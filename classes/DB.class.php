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

    public static function fileUploadImage($_path, $filename)
	{
	/*
	 * @param $path get the path to move the selected file
	 * @param $filename get the file POST name
	*/

	/*
	 * @var $replacePath change the path special character stroke to suit the preg_match
	 * 
	*/

	$path = $_path;
	$replacePath = str_replace('\\', '/', $path);
	// $rep_path = preg_match("/^[a-zA-Z0-9@: \/]+$/", $replacePath);
	
	/*
	 * We check the validity of the parameters
	 * 
	*/
	if(preg_match("/^[a-zA-Z0-9_]+$/", $filename) == false )
	{
		return 'Supply Parameter [1] with a valid POST filename';
		exit;
	}
	// if(preg_match("/^[a-zA-Z0-9@:\. \/]+$/", $replacePath) == false)
	// {
	// 	echo 'Supply Parameter [2] with a valid path name. [Only special characters [/@] allowed]';
	// 	exit;
	// }
	/*
	 * @var $targetFileName get the complete name of the selected file with it extension
	 * @var $targetFileSize get the filesize of the selected file
	 * @var $nameAttachment get a random number to give each file a unique name
	 * @var $checkFile check the validity of the file selected
	*/
	$directory = $_path;
	$targetFileName = basename($_FILES[$filename]['name']);
	$targetFileSize = $_FILES[$filename]['size'];
	$nameAttachment = mt_rand(1000000, 9999999);
	$targetFileExtension = pathinfo($_FILES[$filename]['name'], PATHINFO_EXTENSION);
	$checkFile = getimagesize($_FILES[$filename]['tmp_name']);
	$checkCounter = 1;
	// echo 'Hello:'.$targetFileSize;
	if($targetFileSize >= 3000000)
	{
		$checkCounter = 0;
		return 'File too Large';
	}
	elseif($targetFileSize = 0)
	{
		$checkCounter = 0;
		return 'File Unknown';
	}
// .jpg, .png, .gif
	if($targetFileExtension != 'jpg' && $targetFileExtension != 'png' && $targetFileExtension !='jpeg' && $targetFileExtension != 'gif' && $targetFileExtension != 'jfif')
	{
		$checkCounter = 0;
		return 'Sorry Upload Image files | File Uploaded wasnt an image';
	}
	if($checkFile == true && $checkCounter == 1)
	{
		
		$fullDirectory = $directory.$nameAttachment.'.'.$targetFileExtension;
		$newFileName = $nameAttachment.'.'.$targetFileExtension;
		move_uploaded_file($_FILES[$filename]['tmp_name'], $fullDirectory);
		// echo $targetFileName;
		return $newFileName;
	}
	else
	{
		return 'File not uploaded';
    }
}

   
}



