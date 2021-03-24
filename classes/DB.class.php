<?php

class DB{
    // private $db_config = ['host'=>'localhost',
    //                       'username'=>'amtecmed_zealarax',
    //                       'password'=>'zealarax@2018',
    //                       'database'=>'amtecmed_college',
    //                       'charset'=>'utf8mb4'];
    private $db_config = ['host'=>'localhost',
                          'username'=>'root',
                          'password'=>'',
                          'database'=>'expert',
                          'charset'=>'utf8mb4'];
    public $pdo;
    public $query;
    public function __construct()
    {
        /*
         * Database Connection
         * */
        $dsn = "mysql:host=".$this->db_config['host'].";dbname=".$this->db_config['database'].";charset=".$this->db_config['charset'];
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        try {
            $this->pdo = new PDO($dsn, $this->db_config['username'], $this->db_config['password'], $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
        
    }
    public function queryStatement($statement, $value = [])
    {
        /*
         * Query Database
         * @statement get sql query
         * @value[] get query param
         * */
        $this->query = $this->pdo->prepare($statement);
        if($this->query){
            return $this->query->execute($value);
        }else{
            return false;
        }
        
    }
    
    public function fALL()
    {
        /*
         * Fetch all data
         * */
        $fetch_all_data = $this->query->fetchAll(PDO::FETCH_OBJ);
        if($fetch_all_data)
        {
            return $fetch_all_data;
        }else{
            return false;
        }
       
    }
    public function f_one()
    {
        /*
         * Fetch one data
         * */
        $fetch_all_data = $this->query->fetch(PDO::FETCH_OBJ);
        if($fetch_all_data)
        {
            return $fetch_all_data;
        }else{
            return false;
        }
       
    }
    public function queryRowCount()
    {
          /*
         * Count Rows
         * */
        $count_row = $this->query->rowCount();
        return $count_row;
        
    }

    public static function redirect($param)
    {
         /*
         * Page Redirect
         * */
      echo "<script>window.location.href='".$param."'</script>";
    }

     public function filter($value)
    {
      return filter_var(htmlspecialchars(trim($value)),FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public static function check()
    {
      if(!isset($_SESSION['farmer_id'])){
          header("location:index.php");
      }
    }

   
}



