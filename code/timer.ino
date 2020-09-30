/*
*   timer.ino
*   Test out my new simple timer class
*   Paul Lockyer (plockyer@googlemail.com)
*   2020-09-30
*/

// Includes
#include "Timer.h"

// Defines

// Variables/Properties

// Methods

// PROGRAM START
void setup(){

  // Create a new instances of the timer class
  Timer minuteTimer(60000)
  Timer fiveMinuteTmer(300000)
  
}


void loop(){

  // Update an timers
  minuteTimer.Update();
  fiveMinuteTimer.Update();
  
}
// PROGRAM END
