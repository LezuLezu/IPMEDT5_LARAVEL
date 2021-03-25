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

PORT = "/dev/ttyUSB0"
BAUDRATE = 9600
TIMEOUT = 30.0

timeZone = pytz.timezone("Europe/Amsterdam")

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
        if(amount != "0.2"): #Eliminate false readings

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

myDB.close()

    