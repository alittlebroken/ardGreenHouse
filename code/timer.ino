/*
*   timer.ino
*   Test out my new simple timer class
*   Paul Lockyer (plockyer@googlemail.com)
*   2020-09-30
*/

// Includes
#include "Timer.h"

// Defines

// Objects
// Create a new instances of the timer class
Timer minuteTimer(60000);
Timer fiveMinuteTimer(300000);

// Variables/Properties

// Methods

// PROGRAM START
void setup(){
  
}


void loop(){

  // Update all timers
  minuteTimer.Update();
  fiveMinuteTimer.Update();
  
  // Check if any of the timers have triggered
  if(minuteTimer.timerTriggered)
  {
      Serial.println("Minute timer has triggered");
  }
  
  if(fiveMinuteTimer.timerTriggered)
  {
      Serial.println("5 minute timer has triggered");
  }
  
}
// PROGRAM END
