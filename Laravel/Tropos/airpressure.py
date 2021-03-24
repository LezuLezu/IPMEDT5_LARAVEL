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

while True:
    rcv = port.readline().strip()
    if(rcv != 0):
        mycursor.execute("UPDATE airpressure SET measurement = " + rcv + ";")
        print(rcv)

        time.sleep(1)
        mydb.commit()

mydb.close()
