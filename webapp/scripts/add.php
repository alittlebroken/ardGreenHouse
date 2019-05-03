<?php

    ## Filename:       add.php
    ## Author:         aLittleBroken (https://github.com/alittlebroken)
    ## Description:    Adds sensor data int the database

    ## INCLUDES ##
    ## Database config
    include("../config/database.php");
    
    ## MAIN SCRIPT ###
    ## Grab the passed in values
    #$sensor_id = $_POST["sid"];
    #$sensor_h  = $_POST["shum"];
    #$sensor_t  = $_POST["stmp"];
    
    ## Grab the sensor data and extract the data values from the
    ## We expect the JSON to look as follows
    ## {
    ##   "sensor_id":1,
    ##   "sensor_value":85.00,
    ##   "sensor_value_type":5
    ## }
    $sensor_data = json_decode($_POST["sdata"],true);

    ## Connect to the database
    try{
     $dbo = new PDO($db_cs,$db_uid,$db_pass,$db_options);
    }catch(PDOException $e){
      ## Add code to do something with exception here
    }

   ## Insert the data into the sensor_data table
   ## The table should like this
   ## TABLE: sensor_data
   ## sensordata_id int auto_increment not null pirmary key,
   ## sensordata_added timestamp current_timestamp not null 
   $sqlClause = $dbo->prepare("INSERT INTO sensor_data() VALUES(:sensor_id,:sensor_value,:sensor_value_type)");
   $sqlClause->bindParam(':sensor_id',$sensor_data["sensor_id"],PDO::PARAM_INT);
   $sqlClause->bindParam(':sensor_value',$sensor_data["sensor_value"],PDO::PARAM_STR);
   $sqlClause->bindParam(':sensor_value_type',$sensor_data["sensor_value_type"],PDO::PARAM_INT);
   $sqlClause->execute();

   ## Free up the resources used
   unset($sqlClause);
   unset($dbo);

?>
