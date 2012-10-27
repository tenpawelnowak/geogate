/*
  Physical Pixel
  
  created 2006
  by David A. Mellis
  modified 14 Apr 2009
  by Tom Igoe and Scott Fitzgerald
  http://www.arduino.cc/en/Tutorial/PhysicalPixel
  
  CODE CHANGED AND UPDATED FOR PERSONAL USE BY JEREMIAH M DUKE 7-19-2009
  YOU ARE FREE TO USE THIS SOFTWARE AS LONG AS YOU KEEP ALL OF THE ABOVE INTACT.
  I AM NOT THE ORIGINAL CREATOR OF THIS SOFTWARE.
  
  */
  
  
// DEFAULTS
int pinOnBoard = 12; // the pin 
int pressDuration = 1000; // duration of emulated button press in ms
int incomingByte;      // a variable to read incoming serial data into

// SETUP  
void setup() {
   
    Serial.begin(9600); // initialize serial communication
  
    pinMode(pinOnBoard, OUTPUT);  // initialize the pinOnBoard pin as an output

}

// LOOP
void loop() {
    // see if there's incoming serial data:
    if (Serial.available() > 0) {
     
    incomingByte = Serial.read(); // read the oldest byte in the serial buffer
    //Preform the code to switch on or off the leds
    if (incomingByte == '9') {
       digitalWrite(pinOnBoard, HIGH); //If the serial data is 9 "press" the button
       delay(pressDuration);
       digitalWrite(pinOnBoard, LOW);
     }
  
   }
 }
