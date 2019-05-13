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
  // It should be passed in a copy of the configuration JSON for the web app
  public function __construct($config)
  {
      // Assign  the configuration options
      $this->_cfg = json_decode($config,true);
      
      // Assign the rest of the configuration options
      $this->_host = $this->_cfg["db"]["hostName"];
      $this->_name = $this->_cfg["db"]["dbName"];
      $this->_uid = $this->_cfg["db"]["userName"];
      $this->_pwd = $this->_cfg["db"]["userPassword"];
      
      // Get the log we wish to output to for debug or various other messages
      $this->_log = $this->_cfg["log"]["logFileName"];
      
      // Create the DSN for the PDO object to use
      $this->_dsn = "mysql:hostname=" . $this->_host . ";dbname=" . $this->_pwd;
      
      //Create an array of the options
      $this->_opts = [
    	PDO::ATTR_ERRMODE				=> 		PDO::ERRMODE_EXCEPTION,
    	PDO::ATTR_DEFAULT_FETCH_MODE	=>		PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES		=>		false
      ];
  }
  
  // Send a message to the log file
  private function writeLog($msg){
      // Create the message to write to the log file
      $logMessage = date('Y/m/d h:i:s');
      $logMessage .= " [DB] ";
      $logMessage .= $msg;
      
      // Append the message to the log file
      file_put_content($this->_log,$logMessage,FILE_APPEND);  
  }
    
  // Attempt to connect to the database
  public function connect(){
      // ALWAYS attempt this in a try catch block
      try{
          // Connect to the database
          $this->_dbo = new PDO($this->_dsn,$this->_uid,$this->_pwd,$this->_opts); 
      }catch(PDOException $e){
          // OOPS, lets output to the log what has gone wrong
          $this->writeLog("There was a problem connectin to the database.");
          $this->writeLog($e->getMessage());     
      }   
  }
    
  // Dicsonnect from the database
  public function disconnect(){
      // Only disconnect if the object resoucre is valid
      if($this->_dbo != null){
         $this->_dbo = null   
      }
  }

}
?>
