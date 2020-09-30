/*
*   timer.cpp
*   A simple timer class
*   Paul Lockyer (plockyer@googlemail.com)
*   2020-09-30
*/

class Timer {

    private:
        unsigned long _currTime;
        unsigned long _prevTime;
        int _pinNum;
        long update_freq;
        
        
    public:
        void Timer(int pinNumber, long updateFrequency);
        void Update();
        bool state;
        
}
