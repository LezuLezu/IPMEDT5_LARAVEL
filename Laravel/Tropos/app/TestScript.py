import serial

# serial port variables
PORT = "/dev/ttyUSB0"
BAUDRATE = 9600
TIMEOUT = 30.0

port = serial.Serial(port = PORT, baudrate =  BAUDRATE, timeout = TIMEOUT)

# Dust levels
low_dust = 75.00
high_dust = 200.00

while True:
    # Read from file
    filePath = "public/\App\LedControl.txt"
    infoFile = open(filePath, "rt")
    info = infoFile.readline()  
    print(info)   
    info = info.split(',') 
    url = info[0]
    
    
    if(url == '\avg'):
        infoAmount = info[1]
    if(url == '\':
        infoAmount = info[1]

        # Led indication towards Arduino
    if(float(infoAmount) <= low_dust):
        # port.write(str.encode("g"))
        print("low")
    if(float(infoAmount) > low_dust and float(infoAmount) < high_dust):
        # port.write(str.encode("y"))
        print("moderate")
    if(float(infoAmount) >= high_dust):
        # port.write(str.encode("r"))
        print('high')

infoFile.close()