<?php

class Content  extends DB
{
    public function get_contents (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `content` LEFT JOIN administrator ON content.poster_id = administrator.admin_id", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function get_contents_count (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `content`", $arr);
        return PARENT::queryRowCount(); //fetch all

    }

    public function store_content ($title,$content,$image){
        $arr = [$title,$content,$image,$_SESSION['admin_id'],$date = date('Y-m-d')];
        
        $query = PARENT::queryStatement("INSERT INTO content(`title`, `content`, `content_image`, `poster_id`, `date_created`) VALUES (?,?,?,?,?)", $arr);
        return ($query)? true:false;
    }

    public function get_contents_single ($id){
        $arr =  [$id];
        $query = PARENT::queryStatement("SELECT * FROM `content` LEFT JOIN administrator ON content.poster_id = administrator.admin_id WHERE content_id=?", $arr);
        return PARENT::f_one(); //fetch all

    }

    public function recent_content (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `content` ORDER BY content_id DESC limit 5", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function delete_content ($content_id){
        $arr = [$content_id];
        
        $query = PARENT::queryStatement("DELETE FROM content WHERE content_id = ?", $arr);
        return ($query)? true:false;
    }

   
}