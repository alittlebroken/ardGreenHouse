/*
*   timer.cpp
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
        void Timer(long updateFrequency);                // Class constructer. Just takes in how often the timer triggers
        void Update();                                   // Updates the timer internals
        bool timerTriggered;                             // Indicates to the outside world if the timer has triggered
        
}

// Class constructer - sets up the base properties
Timer::Timer(long updateFrequency)
{
    _update_freq = updateFrequency;
    timerTriggered = false;
}

// Updates all internals each time it is called
Timer::Update()
{
    // Set the current time
    _currTime = millis();
    
    // Check if the time has been triggered or not
    if(_currTime - _prevTime > _update_freq)
    {
        // We have been triggered and we need to set the triggered flag
        timerTriggered = true;
    }
    
    // Set the previous time this function was called
    _prevTime = _currTime;
}
