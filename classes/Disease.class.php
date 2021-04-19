<?php

class Disease extends DB
{
    public function add_disease ($disease,$image){
        $arr =  [$image,$disease];
        $query = PARENT::queryStatement("INSERT INTO disease VALUES (NULL,?,?)", $arr);
        return ($query)? true:false;
            

    }

    public function add_question ($question, $disease_id){
        $arr =  [$question, $disease_id];
        $query = PARENT::queryStatement("INSERT INTO expert_questions VALUES (NULL,?,?)", $arr);
        return ($query)? true:false;
            

    }

    public function add_inference ($solution, $disease_id){
        $arr =  [$solution, $disease_id];
        // $arr2= [$disease_id];
        // $query = PARENT::queryStatement("SELECT * FROM disease WHERE disease_id", $arr);
        // if(PARENT::queryRowCount() < 0){
            $query = PARENT::queryStatement("INSERT INTO solution VALUES (NULL,?,?)", $arr);
            return ($query)? true:false;
        // }
        // return false;
       
            

    }

    public function delete_disease ($disease_id){
        $arr =  [$disease_id];
        $query = PARENT::queryStatement("DELETE FROM disease WHERE disease_id=?", $arr);
        return ($query)? true:false;
            

    }

    public function delete_question ($question_id,$disease_id){
        $arr =  [$question_id,$disease_id];
        $query = PARENT::queryStatement("DELETE FROM expert_questions WHERE question_id=? AND disease_id=?", $arr);
        return ($query)? true:false;
            

    }

    public function delete_inference ($solution_id){
        $arr =  [$solution_id];
        $query = PARENT::queryStatement("DELETE FROM solution WHERE solution_id=?", $arr);
        return ($query)? true:false;
            

    }

    public function update_inference ($solution,$solution_id){
        $arr =  [$solution,$solution_id];
        $query = PARENT::queryStatement("UPDATE solution SET solution=? WHERE solution_id=?", $arr);
        return ($query)? true:false;
            

    }

    public function all_disease (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM disease", $arr);
        return PARENT::fALL();
            

    }
    public function all_disease_questions ($disease_id){
        $arr =  [$disease_id];
        $query = PARENT::queryStatement("SELECT * FROM expert_questions WHERE disease_id=? ORDER BY question_id DESC", $arr);
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

    public function get_specific_solution($solution_id){
        $arr =  [$solution_id];
        $query = PARENT::queryStatement("SELECT * FROM `solution` WHERE solution_id = ?", $arr);
        return PARENT::f_one(); //fetch all

    }

    public function all_solutions(){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `solution` LEFT JOIN disease ON solution.disease_id = disease.disease_id", $arr);
        return PARENT::fALL(); //fetch all

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