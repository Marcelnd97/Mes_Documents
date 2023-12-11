<?php
  
  class connexionDB {
    private $host    = 'localhost';  // nom de l'host  
    private $name    = 'drivingcarsolution';    // nom de la base de donnée
    private $user    = 'root';       // utilisateur 
    private $pass    = '';       // mot de passe (il faudra peut-être mettre '' sous Windows)
    private $connexion;
    
    function __construct($host = null, $name = null, $user = null, $pass = null){
      if($host != null){
        $this->host = $host;           
        $this->name = $name;           
        $this->user = $user;          
        $this->pass = $pass;
      }
      try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name,
          $this->user, $this->pass, 
          array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8MB4', 
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_EMULATE_PREPARES   => false));
      }catch (PDOException $e){
        echo 'Erreur : Impossible de se connecter  à la BDD !';
        die();
      }
    }

    public function query($sql, $data = array()){
      try {
        $req = $this->connexion->prepare($sql);
        if ($req !== false) {
          $req->execute($data);
          return $req;
        }else{
          echo "Erreur de préparation de la requête.";
          return false;
        }
      }catch(PDOException $e){
        echo "Erreur d'exécution de la requête : " . $e->getMessage();
            return false;
      }  
    }
      
    public function insert($sql, $data = array()){
        $req = $this->connexion->prepare($sql);
        $req->execute($data);
    }
  }
  // Faire une connexion à votre fonction
  $DB = new connexionDB();

?>

