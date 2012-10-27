Geogate
=======

Arduino powered gate opener with companion iPhone app. 

Authors: 
- Paweł Nowak, pawel@chwilami.pl

Licence: 
- Creative Commons 3.0
  http://creativecommons.org/licenses/by/3.0/

This distribution also includes:
- Arduino Serial Communication with Web GUI Via PHP 
  http://missionduke.com/wordpress/arduino-projects/
  based on PHP Serial class by Rémy Sanchez <thenux@gmail.com> 

Project status: 
- very early, testing each component



Description
===========

The idea is to leave gate remote at home connected to power and Arduino with a WiFi shield on.
Next using geofencing on iPhone (or any other mobile device) discover your location 
and trigger gate opening when youryou approach home or office. 
This can be later extended to giving access to your friends, when they arrive gate
will be open for them. 

Project consists of several parts: 
* Arduino Uno (any version will do, but was developed on Uno)
* WiFi shield for Arduino 
* Webserver
* iPhone





Repo
====

* arduino - code for your Arduino
* server - code for your PHP server
* schemats - schemats for Arduino connections (use Fritzing to open http://fritzing.org/download/)



