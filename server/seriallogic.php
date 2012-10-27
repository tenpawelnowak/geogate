<?php


/* Simple serial script for turning two leds on 
and off from the web! 

Utilizes the PHP Serial class by Rémy Sanchez <thenux@gmail.com> 
(Thanks you rule!!) to communicate with the Arduino Serial! 

*/ 


//check the GET action var to see if an action is to be performed 
if (isset($_GET['action'])) { 
    //Action required 
     
    //Load the serial port class 
    require("php_serial.class.php"); 
     
    //Initialize the class 
    $serial = new phpSerial(); 

    //Specify the serial port to use... in this case COM1 
    $serial->deviceSet("/dev/tty.usbmodemfa131"); //SET THIS TO WHATEVER YOUR SERIAL DEVICE HAPPENS TO BE, YOU CAN FIND THIS UNDER THE ARDUINO SOFTWARE'S MENU
     
    //Set the serial port parameters. The documentation says 9600 8-N-1, so 
    $serial->confBaudRate(9600); //Baud rate: 9600 
   // $serial->confParity("none");  //Parity (this is the "N" in "8-N-1") ******THIS PART OF THE CODE WAS NOT NEEDED
  // $serial->confCharacterLength(8); //Character length (this is the "8" in "8-N-1") ******THIS PART OF THE CODE WAS NOT NEEDED
   // $serial->confStopBits(1);  //Stop bits (this is the "1" in "8-N-1") ******THIS PART OF THE CODE WAS NOT NEEDED
    //$serial->confFlowControl("none"); //******THIS PART OF THE CODE WAS NOT NEEDED


    //Now we "open" the serial port so we can write to it 
    $serial->deviceOpen(); 

    //Issue the appropriate command according to the Arduino source code 0=Green On, 1=Green Off, 2=Red On, 3=Red Off.
    if ($_GET['action'] == "press") { 
        // send "9" to press
        $serial->sendMessage("9\r"); 
   }  
   
     
    //We're done, so close the serial port again 
    $serial->deviceClose(); 

} 

?>