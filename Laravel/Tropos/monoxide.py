import mysql.connector
import time

import serial
import os

mydb = mysql.connector.connect(
    host = "localhost",
    user = "testuser",
    passwd = "testuser",
    database = "ipmedt5"
)
port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)
mycursor = mydb.cursor()

while True:
    time.sleep(180)     #TIME.SLEEP FOR THE CO METER (TEST CODE WITHOUT TIME.SLEEP)
    mycursor.execute("SELECT * FROM buzzers;")
    for x in mycursor:
        print(x[3])
    if x[3] == 'aan':
        print(x[3])
        port.write("b0")    #buzzer off later (m = motor)
    # else:
    #     port.write("b0")    #buzzer off


    rcv = port.readline().strip()
    mycursor.execute("UPDATE carbon_monoxide SET amount = " + rcv + ";")
    print(rcv)

    time.sleep(1)
    mydb.commit()

mydb.close()


