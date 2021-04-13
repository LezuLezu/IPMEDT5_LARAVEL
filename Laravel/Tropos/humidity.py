import serial
import mysql.connector

arduino = serial.Serial("/dev/ttyUSB0", baudrate=115200, timeout=.1)
#poort rechtsonderin van pi
mydb = mysql.connector.connect(
    host="localhost",
    user="anoea",
    passwd="Raspberry2!",
    database="TroposDB"
)

def verstuurDb(data):
    print(data)
    mycursor = mydb.cursor()
    mycursor.execute("DELETE FROM humidity LIMIT 1;")
    mycursor.execute("INSTERT INTO humidity (luchtvochtigheid) VALUES (%s)", (int(data),))
    mydb.commit()



while True:
    data = arduino.readline()[:-2]
    if data:
        verstuurDb(data)