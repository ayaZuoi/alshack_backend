<?php

namespace database;

class DBcontoller
{
    //database conation probarties
    protected $host_awam = 'localhost';
    protected $user_awam = 'root';
    protected $password_awam = "";
    protected $database_awam = "alshack";
    //connection property
    public $con_awam = null;

    //call contructor
    public function __construct()
    {
        $this->con_awam = mysqli_connect($this->host_awam, $this->user_awam, $this->password_awam, $this->database_awam);
        if ($this->con_awam->connect_error) {
            echo "fail" . $this->con_awam->connect_error;
        } else echo "succsfull";

    }
    public function __destruct()
    {
       $this->closeConnection();
    }

    // for mysql clossing conaction
    protected function closeConnection(){
        if($this->con_awam!=null){
            $this->con_awam->close();
            $this->con_awam=null;
        }
    }
}


