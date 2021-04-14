import mysql.connector
import time

import serial
import os

mydb = mysql.connector.connect(
    host = "localhost",
    user = "ipmedt5",
    passwd = "ipmedt5",
    database = "ipmedt5"
)
port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)
mycursor = mydb.cursor()

time.sleep(15)

mycursor.execute("SELECT * FROM airpressure;")
for x in mycursor:
    print(x[2])
    gewenste_luchtdruk = x[2]
    port.write(str(x[2]))

while True:
    mycursor.execute("SELECT * FROM airpressure;")
    for x in mycursor:
        print(x[2])
        if(x[2] != gewenste_luchtdruk):
            print('gewenste_luchtdruk veranderd')
            gewenste_luchtdruk = x[2]
            port.write(str(x[2]))

    airpressure = port.readline().strip()
    print(airpressure)
    if(airpressure[0] == 'P'):
        mycursor.execute("UPDATE airpressure SET measurement = " + airpressure[1:] + ";")
    elif(airpressure[0] == 'W'):
        mycursor.execute("UPDATE window_airpressure SET window_open = '" + airpressure[1:] + "';")
    elif(airpressure[0] == 'H'):
        mycursor.execute("UPDATE heater_airpressure SET heater_on = '" + airpressure[1:] + "';")


    

    time.sleep(2)
    mydb.commit()

mydb.close()