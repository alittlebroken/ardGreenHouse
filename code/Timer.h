/*
*   Timer.h
*   A simple timer class, 
*   Paul Lockyer (plockyer@googlemail.com)
*   2020-09-30
*/

 class Timer {

    private:
        unsigned long _currTime;                         // Records the current time at the start of the update loop
        unsigned long _prevTime;                         // Records the last time the update loop was run
        long _update_freq;                               // How often does the timer need to trigger
        
        
    public:
        Timer(long updateFrequency);                 // Class constructer. Just takes in how often the timer triggers
        Update();                                    // Updates the timer internals
        bool timerTriggered;                              // Indicates to the outside world if the timer has triggered
        
};

// Class constructer - sets up the base properties
Timer::Timer(long updateFrequency)
{
    this->_update_freq = updateFrequency;
    this->timerTriggered = false;
}

// Updates all internals each time it is called
Timer::Update()
{
    // Set the current time
    this->_currTime = millis();
    
    // Check if the time has been triggered or not
    if(this->_currTime - this->_prevTime > this->_update_freq)
    {
        // We have been triggered and we need to set the triggered flag
        this->timerTriggered = true;
    }
    
    // Set the previous time this function was called
    this->_prevTime = this->_currTime;
}
