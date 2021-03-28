<?php

class Disease extends DB
{
    public function all_disease (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM disease", $arr);
        return PARENT::fALL();
            

    }

    
    // public function update_farmer_status ($value){
    //     $arr = [$value,$_SESSION['farmer_id']];
        
    //     $query = PARENT::queryStatement("UPDATE farmer SET new_user_status = ? WHERE farmer_id = ?", $arr);
    //     return ($query)? true:false;
    // }
}