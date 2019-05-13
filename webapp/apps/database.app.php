<?php
/*
    database.app.php
    Copyright (c) 2019 Paul Lockyer (plockyer@googlemail.com)
    
    A very simple database wrapper class to aid interfacing with the database
*/
class dbApp
{

  /*
   Class properties
  */
  
  private $_host;      // Which server the DB resides on
  private $_name;      // The name of the database
  private $_uid;       // The id with the correct privs to work aginst the DB
  private $_pwd;       // The password for the DB user we connect with
  private $_opts;      // The options for the PDO module
  private $_dsn;       // The data source connection string
  private $_dbo;       // The Database resource object used by PDO
 
  private $_cfg;       // The configuration options for this app

  private $_log;       // The log file to write messages to

  /*
   Class methods
  */
  
  // The class constructor use this to setup some basic information
  // It should be passed in a copy of the configuration for the web app
  public function __construct($config)
  {
  
      // Assign  the configuration options
      $this->_cfg = $config;
      
      // Assign the rest of the configuration options
      $this->_host = $this->_cfg["db"]["hostName"];
      $this->_name = $this->_cfg["db"]["dbName"];
      $this->_uid = $this->_cfg["db"]["userName"];
      $this->_pwd = $this->_cfg["db"]["userPassword"];
      
      $this->_log = $this->_cfg["log"]["logFileName"];
  
  }

}
?>
