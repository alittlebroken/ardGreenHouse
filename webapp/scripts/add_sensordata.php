<?php

    ## Filename:       add_sensordata.php
    ## Author:         aLittleBroken (https://github.com/alittlebroken)
    ## Description:    Adds sensor data int the database

    ## INCLUDES ##
    ## Database config
    include("../config/database.php");
    
    ## MAIN SCRIPT ###
    ## Grab the passed in values
    $sensor_id
    
    ## Connect to the database
    try{
     $dbo = new PDO($db_cs,$db_uid,$db_pass,$db_options);
    }catch(PDOException $e){
      ## Add code to do something with exception here
    }
?>
