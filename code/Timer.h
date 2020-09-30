class Timer {

    private:
        unsigned long _currTime;                     // Records the current time at the start of the update loop
        unsigned long _prevTime;                     // Records the last time the update loop was run
        unsigned long _update_freq;                  // How often does the timer need to trigger
        
        
    public:
        Timer(unsigned long updateFrequency);        // Class constructer. Just takes in how often the timer triggers
        Update();                                    // Updates the timer internals
        bool timerTriggered;                         // Indicates to the outside world if the timer has triggered
        
};

// Class constructer - sets up the base properties
Timer::Timer(unsigned long updateFrequency)
{
    this->_update_freq = updateFrequency;
    timerTriggered = false;
}

// Updates all internals each time it is called
Timer::Update()
{

    // Set the current time for the update
    this->_currTime = millis();

    // Check if we have just triggered, otherwise set us to not have triggered
    if(this->_currTime - this->_prevTime >= this->_update_freq)
    {
        // We have been triggered and we need to set the triggered flag
        _prevTime = _currTime;
        timerTriggered = true;
    }else{
        timerTriggered = false;
    }
      
    return;
}
