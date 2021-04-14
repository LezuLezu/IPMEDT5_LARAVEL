import mysql.connector
import time

import serial
from datetime import datetime
import pytz

myDB = mysql.connector.connect(
    host = 'localhost',
    user = 'dev',
    passwd = '123',
    database = 'TroposDB'
)

# serial port variables
PORT = "/dev/ttyUSB0"
BAUDRATE = 9600
TIMEOUT = 30.0

# Time zone for time stamps
timeZone = pytz.timezone("Europe/Amsterdam")

# Dust levels
low_dust = 75.00
high_dust = 200.00

myCursor = myDB.cursor()
port = serial.Serial(port = PORT, baudrate =  BAUDRATE, timeout = TIMEOUT)

while True:
    # Input from Arduino
    rcv = port.readline().decode().strip()
    # print(rcv)
    rcv = rcv.split('\t')
    if(len(rcv) == 2):
        amount = rcv[0].strip()
        unit = rcv[1].strip()
        # print(amount)
        # print(unit)
        if(amount != 0.02): #Eliminate false readings
            # Time & date 
            now = datetime.now(timeZone)
            dateTime = now.strftime("%Y-%m-%d %H:%M:%S")
            # print(dateTime)
            dateTime = dateTime.split(" ")
            date = dateTime[0].strip()
            time = dateTime[1].strip()
            # print(date)
            # print(time)

            # sql code to insert date to table dust in TroposDB
            sql = "INSERT INTO dust (date, time, measurement, unit) VALUES (%s, %s, %s, %s)"
            val = (date, time, amount, unit)
            myCursor.execute(sql, val)
            myDB.commit()
    

    # Read from file
    filePath = "public/\App\LedControl.txt"
    infoFile = open(filePath, "rt")
    info = infoFile.readline()  
    # print(info)   
    info = info.split(',') 
    url = info[0]
    # print(url)
    
    
    if(url == '/avg'):
        infoAmount = info[1]
    if(url == '/'):
        infoAmount = info[1]
    print(infoAmount)

        # Led indication towards Arduino
    if(float(infoAmount) <= low_dust):
        port.write(str.encode("g"))
        # print("low")
    if(float(infoAmount) > low_dust and float(infoAmount) < high_dust):
        port.write(str.encode("y"))
        # print("moderate")
    if(float(infoAmount) >= high_dust):
        port.write(str.encode("r"))
        # print('high')
        
infoFile.close()
myDB.close()

    