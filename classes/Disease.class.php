<?php

class Disease extends DB
{
    public function all_disease (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM disease", $arr);
        return PARENT::fALL();
            

    }

    public function all_disease_except ($disease_id){
        $arr =  [$disease_id];
        $query = PARENT::queryStatement("SELECT * FROM disease WHERE disease_id <> ?", $arr);
        return PARENT::fALL();
            

    }
    
    public function get_all_questions($disease_id){
        $arr =  [$disease_id];
        $query = PARENT::queryStatement("SELECT * FROM `expert_questions` WHERE disease_id = ? ORDER BY RAND(question_id)", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function get_specific_disease($disease_id){
        $arr =  [$disease_id];
        $query = PARENT::queryStatement("SELECT * FROM `disease` WHERE disease_id = ?", $arr);
        return PARENT::f_one(); //fetch all

    }

    public function get_disease_solution($disease_id){
        $arr =  [$disease_id];
        $query = PARENT::queryStatement("SELECT * FROM `solution` WHERE disease_id = ? ORDER BY RAND(disease_id)", $arr);
        return PARENT::f_one(); //fetch all

    }

    
    // public function update_farmer_status ($value){
    //     $arr = [$value,$_SESSION['farmer_id']];
        
    //     $query = PARENT::queryStatement("UPDATE farmer SET new_user_status = ? WHERE farmer_id = ?", $arr);
    //     return ($query)? true:false;
    // }
}