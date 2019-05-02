# ardGreenHouse
An automated greenhouse controlled by Arduino

## Parts List
### Automation
- 1 x Arduino Uno
- 1 x Dh11/22 sensor
- 1 x Capacative soil moisture sensor
- 1 x small brushless water pump
- 1 x 4 channel relay
- 2 x pc fans
- 1 x led grow light
- 1 x standard light bulb ( for heat )
- 2 x light fitting
- 1 x 10m reel of 5mm tubing
- 4 x t shape connectors 5mm
- 4 x drip nozzle 5 mm
- 1 x 4 pint milk bottle 

### Greenhouse Frame
- 4 x 20cm strut
- 2 x 23cm strut
- 2 x 33cm strut
- 2 x 21cm strut
- 2 x 23x20 cm acrylic sheet
- 2 x 33x20 cm acrylic sheet
- 1 x 23x33 cm acrylic sheet

### tools
- Laptop
- Screwdriver
- Drill
- Drill bits
- Duct tape
- Hot glue gun

## Notes
### GikFun Capacitive Soil Moisture Sensor v1.2
- Unable to as of yet find any data on sensor on GikFun website or the web for values that match what the sensor gives me
- Get really spaced out sensor readings, seems to overlap a lot
- Sensor takes a while to update its values tomreflect it state ( I.E. going from glass to open air )
- Only held sensor in hand so might have not been as accurate as if being held by a frame

#### Sensor Readings
- Connected to Analog pin A0
- Sensor reading in air: <10
- Sensor reading in glass of water: >300 and sat between 400 and >500 for a minute
- Sensor reading after being taking out of glass of water: >150 and <340
- Sensor reading held in palm of hand: <10

#### Sensor Readings #2
- Again connected to A0
- In water ( Rested on glass edge to keep still ): 311
- Out of water ( Rested on top of glass ): > 570 to ( 602 is highest seen so far )

- Note: When sensor was removed and put back in the water the readings went down to zero
- Note: Set v+ of sensor to 3.3v, took it out of the water ( so just air ), dried it off and hit reset. Now get a value between zero and 100. Placed in water again and got values of 300 to 400. WTF????

#### Sensor Readings #3
- Again connected to A0
- Powered by 5v pin instead of 3.3v
- Dry:  542 to 615
- Wet:  320
