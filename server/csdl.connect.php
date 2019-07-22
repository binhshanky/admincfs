<?php
class csdl{
    private $username = "admincfs";
    private $password = "O9TVwRP8se60qvng";
    private $database = "cfs";
    private $host = "localhost";
    public function ConnectCSDL(){
        $conn = new mysqli($this->host, $this->username, $this->password,$this->database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        return $conn;
    }
    public function getConfig(){
        $conn = $this->ConnectCSDL();
        $result = $conn->query("SELECT * FROM `config` WHERE 1");
        while($cfg = $result->fetch_assoc()){
            $GLOBALS[$cfg['name']] = $cfg['value'];
        }
        $conn->close();
        unset($result);
    }
    public function sltc(){
        $conn = $this->ConnectCSDL();
        $result = $conn->query("SELECT * FROM `cfs_done` WHERE 1");
        $nb = $result->num_rows;
        $conn->close();
        unset($result);
        return $nb;
    }
    public function slcd(){
        $conn = $this->ConnectCSDL();
        $result = $conn->query("SELECT * FROM `cfs` WHERE 1");
        $nb = $result->num_rows;
        $conn->close();
        unset($result);
        return $nb;
    }
}