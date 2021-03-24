import mysql.connector
import time

import serial
import os

mydb = mysql.connector.connect(
    host="localhost",
    user="root",
    passwd="Aardbeien2002",
    database="ipmedt5"
)

port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)

mycursor = mydb.cursor()

while True:
    temp = port.read(5)
    print(temp)
    time.sleep(1)
    mydb.commit()

mydb.close()
