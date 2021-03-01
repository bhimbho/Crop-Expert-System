<?php

class Farmer extends DB
{
    public function login ($username, $password){
        $arr =  [$username, md5($password)];
        $query = PARENT::queryStatement("SELECT * FROM farmer WHERE email = ? AND password = ?", $arr);
        if(Parent::queryRowCount() > 0){
            $user_details = PARENT::f_one();
            $_SESSION['farmer_id'] = $user_details->farmer_id;
            $_SESSION['email'] = $user_details->email;
            return true;
        }
        else{
            return false;
            // echo "no";
        }

    }

    public function farmer_registration ($fname,$lname,$gender,$phone,$address,$email, $password){
        $arr = [$fname,$lname,$address,$gender,$phone,$email, $password,$date = date('Y-m-d')];
        
        $query = PARENT::queryStatement("INSERT INTO farmer(`firstname`, `lastname`, `farm_address`, `gender`, `phone`, `email`, `password`, `date_created`) VALUES (?,?,?,?,?,?,?,?)", $arr);
        return ($query)? true:false;
    }
}