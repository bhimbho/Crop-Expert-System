<?php

class Content  extends DB
{
    public function get_contents (){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `content` LEFT JOIN administrator ON content.poster_id = administrator.admin_id", $arr);
        return PARENT::fALL(); //fetch all

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

   
}