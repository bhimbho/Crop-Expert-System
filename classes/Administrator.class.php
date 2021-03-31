<?php

class Administrator extends DB
{
    public function administrator_login ($username, $password){
        $arr =  [$username, md5($password)];
        $query = PARENT::queryStatement("SELECT * FROM administrator WHERE admin_username = ? AND admin_password = ?", $arr);
        if(Parent::queryRowCount() > 0){
            $user_details = PARENT::f_one();
            $_SESSION['admin_id'] = $user_details->admin_id;
            $_SESSION['admin_username'] = $user_details->admin_username;
            header("location: dashboard.php");
            // if($user_details->new_user_status == NULL){
            //     header("location:survey.php");
            // }
            // else{
            //     header("location:expert-system.php");
            // }
        }
        else{
            return false;
            // echo "no";
        }

    }

    public function farmer_registration ($fname,$lname,$gender,$phone,$address,$email, $password){
        $arr = [$fname,$lname,$address,$gender,$phone,$email, md5($password),$date = date('Y-m-d')];
        
        $query = PARENT::queryStatement("INSERT INTO farmer(`firstname`, `lastname`, `farm_address`, `gender`, `phone`, `email`, `password`, `date_created`) VALUES (?,?,?,?,?,?,?,?)", $arr);
        return ($query)? true:false;
    }

    // public function update_farmer_status ($value){
    //     $arr = [$value,$_SESSION['farmer_id']];
        
    //     $query = PARENT::queryStatement("UPDATE farmer SET new_user_status = ? WHERE farmer_id = ?", $arr);
    //     return ($query)? true:false;
    // }
}