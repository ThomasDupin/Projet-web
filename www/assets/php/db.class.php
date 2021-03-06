<?php
/* ici on va creer un objet DB qui va contenir les informations de la bdd pour eviter de copier coller le code a chaque fois */
class DB{
    private $host='localhost';
    private $username='root';
    private $password='';
    private $database='cesi_bde';
    public $db;
    
    public function __construct($host=null, $username=null,$password=null,$database=null){
        if($host != null){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
        
        }
        $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database,$this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => ' SET NAMES UTF8'));
    }
    public function query($sql, $data = array()){
        $req=$this->db->prepare($sql);
        $req->execute($data);
        return $req->fetchAll(PDO::FETCH_OBJ);

    }
}
  
