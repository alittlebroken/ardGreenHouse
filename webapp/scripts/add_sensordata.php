<?php

    ## Filename:       add_sensordata.php
    ## Author:         aLittleBroken (https://github.com/alittlebroken)
    ## Description:    Adds sensor data int the database

    ## INCLUDES ##
    ## Database config
    include("../config/database.php");
    
    ## MAIN SCRIPT ###
    ## Grab the passed in values
    $sensor_id = $_POST["sid"];
    $sensor_h  = $_POST["shum"];
    $sensor_t  = $_POST["stmp"];
    
    ## Connect to the database
    try{
     $dbo = new PDO($db_cs,$db_uid,$db_pass,$db_options);
    }catch(PDOException $e){
      ## Add code to do something with exception here
    }

   ## Insert the data into the sensor_data table
   $sqlClause = $dbo->prepare("INSERT INTO sensor_data() VALUES(:sensor_id,:sensor_humidity,:sensor_values)");
   $sqlClause->bindParam(':sensor_id',$sensor_id,PDO::PARAM_INT);
   $sqlClause->bindParam(':sensor_humidity',$sensor_h,PDO::PARAM_STR);
   $sqlClause->bindParam(':sensor_values',$sensor_t,PDO::PARAM_STR);
   $sqlClause->execute();

   ## Free up the resources used
   unset($sqlClause);
   unset($dbo);

?>
