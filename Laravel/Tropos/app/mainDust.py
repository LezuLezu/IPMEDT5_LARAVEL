import mysql.connector
import time

import serial
import os

myDB = mysql.connector.connect(
    host = 'localhost',
    user = 'dev',
    passwd = '123',
    database = 'TroposDB'
)

myCursor = myDB.cursor()
port = serial.Serial('/dev/ttyUSB0", baudrate = 9600, timeout= 3.0')

while True:
    rcv = port.readline().strip()
    print(rcv)
    