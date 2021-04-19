<?php

class Notes extends DB
{
    public function save_notes ($notes,$cassava_id){
        $query_key = [$cassava_id];
        $arr = [$notes,$cassava_id];
        $query = PARENT::queryStatement("SELECT * FROM `notes` WHERE cassava_id=?", $query_key);
        if(PARENT::queryRowCount() == 0){ //fetch all
            $query = PARENT::queryStatement("INSERT INTO notes(`notes`, `cassava_id`) VALUES (?,?)", $arr);
            ($query)? $_SESSION['msg']="Notes Saved": $_SESSION['err']="Notes cannot Saved";
        }
        else{
            $_SESSION['err']="Notes already exist";
        }
    }

    public function get_all_notes(){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `notes` LEFT JOIN cassava_varieties ON notes.cassava_id=cassava_varieties.cassava_id", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function delete_note ($note_id){
        $arr = [$note_id];
        
        $query = PARENT::queryStatement("DELETE FROM notes WHERE note_id = ?", $arr);
        return ($query)? true:false;
    }
}
