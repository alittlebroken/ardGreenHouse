// ------ LIBRARIES

// ------ CONSTANTS

const int pumpPin = 10;     // Pin for the relay controlling the water pump

const int pumpDelay = 5000; // How often in millsecs ( 1000 =  1 second ) to check or change the state of the pump

// ------ VARIABLES

bool pumpState = LOW;   // Controls state of the pump ( LOW for ON, HIGH for OFF )

unsigned long currentMillis = 0;     // Stores current millis each run of the loop
                                            // Compare that for each item you wish to update

unsigned long prevPumpMillis = 0;               // Last time the pump state was updated

function loop{

    currentMillis = millis();       /// Get the current time in millisecs since the program started
    
    

}

function updatePumPState{

    // If the pump is OFF (LOW) then check to see if the specified interval has passed 

}
