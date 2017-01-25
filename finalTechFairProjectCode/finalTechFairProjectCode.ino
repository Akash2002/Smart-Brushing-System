#include <Ethernet.h>
#include <SPI.h>

#define trig1 5
#define echo1 4

bool takenout = false;
bool broughtback = false;
int seconds;
int counter;
char server[] = "54.213.177.63";
long distance1, duration1; 

EthernetClient client;
byte mac[]={
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED
};

void setup() {

  Serial.begin(9600);
  Serial.println("Starting....");
  if(Ethernet.begin(mac)){
    Serial.println("Setup mac address");
  } else {
    Serial.println("Failed to setup mac address");
  }
  Serial.println("Beginning the program");
  pinMode(trig1, OUTPUT);
  pinMode(echo1, INPUT);
  delay(100);
}

void loop() 
{
    getDistance();
    countSeconds();
    Serial.print("Seconds : ");
    Serial.println(seconds);
    if(broughtback)
    {
      Serial.println("Connecting....");
      if (!client.connected()) 
      {
      client.stop();
      delay(100);    
      if (client.connect(server, 8080)) 
      {
        Serial.println("Connected");
        client.print("GET /updateTime.php?Time=");
        client.print(seconds);
        client.println(" HTTP/1.1");
        client.println("Host: 192.168.137.1");
        client.println("Connection: close");
        client.println();
        client.stop();
        Serial.println("Done recording");
        takenout = false;
        broughtback = false;
        seconds =0;
      } else 
      {
        // if you didn't get a connection to the server:
        Serial.println("connection failed");
      }
    }
   }
}

int countSeconds(){
  seconds = seconds + counter;
  delay(900);
  return seconds;
}

void getDistance(){
  digitalWrite(trig1,HIGH);
  delayMicroseconds(10);
  digitalWrite(trig1,LOW);
  delayMicroseconds(10);
  duration1 = pulseIn(echo1,HIGH);
  distance1 = (duration1/2) / 29.1; //centimeter converter 

  if(distance1 > 3) {
    counter = 1;
    takenout = true;
    //broughtback = false;
  } else if (distance1 < 6 and takenout) {
    counter = 0;
    //takenout = false;
    broughtback = true;
  }
}

