import serial
import mysql.connector

#poort rechtsonderin van pi
arduino = serial.Serial("/dev/ttyUSB0", baudrate=115200, timeout=.1)

#verbinding maken met de Database
mydb = mysql.connector.connect(
    host="localhost",
    user="anoea",
    passwd="Raspberry2!",
    database="TroposDB"
)

#het verwijderen en toevoegen van data in de tabel om op 72 inserts te blijven
def verstuurDb(data):
    print(data)
    mycursor = mydb.cursor()
    mycursor.execute("DELETE FROM humidity LIMIT 1;")
    mycursor.execute("INSERT INTO humidity (luchtvochtigheid) VALUES (%s)", (int(data),))
    mydb.commit()


#lees arduino uit
while True:
    data = arduino.readline()[:-2]
    if data:
        verstuurDb(data)