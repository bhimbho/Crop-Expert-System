<?php
class Survey extends DB
{
    public function get_all_questions(){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `questions`", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function get_all_crops(){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `crop`", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function get_all_cassava_varieties(){
        $arr =  [];
        $query = PARENT::queryStatement("SELECT * FROM `cassava_varieties`", $arr);
        return PARENT::fALL(); //fetch all

    }

    public function survery_answers_save ($farmer_id,$ans1,$ans2){
        $arr = [$farmer_id,$ans1,$ans2];
        
        $query = PARENT::queryStatement("INSERT INTO survey_answers(`farmer_id`, `ans_1`, `ans_2`, `date_answered`) VALUES (?,?,?,NOW())", $arr);
        return ($query)? true:false;
    }

    public function get_survery_answer(){
        $arr =  [$_SESSION['farmer_id']];
        $query = PARENT::queryStatement("SELECT * FROM `survey_answers` WHERE farmer_id = ? ORDER BY answer_id DESC", $arr);
        return PARENT::f_one(); //fetch all

    }

    public function get_question_by_id($id){
        $arr =  [$id];
        $query = PARENT::queryStatement("SELECT * FROM `questions` WHERE question_id = ?", $arr);
        return PARENT::f_one(); //fetch all

    }
    public function yes_no($question_value){
        return ($question_value)?'Yes':'No';

    }

    public function survey_inference_db($object){
        $arr = [$object->crop_id, $object->cassva_type];
        $query = PARENT::queryStatement("SELECT * FROM `survey_solutions` WHERE crop_id = ? AND cassava_type = ? ORDER BY stage ASC", $arr);
        return PARENT::fALL();
    }

    // ------------- NEW USER INFERENCE ---------------
    public function survey_inference_db_preplanting($object){
        $arr = [$object->ans_1, $object->ans_2,0];
        $query = PARENT::queryStatement("SELECT * FROM `survey_solutions` WHERE crop_id = ? AND cassava_type = ? AND stage = ?", $arr);
        return PARENT::f_one();
    }

    public function survey_inference_db_planting($object){
        $arr = [$object->ans_1, $object->ans_2,1];
        $query = PARENT::queryStatement("SELECT * FROM `survey_solutions` WHERE crop_id = ? AND cassava_type = ? AND stage = ?", $arr);
        return PARENT::f_one();
    }

    public function survey_inference_db_postplanting($object){
        $arr = [$object->ans_1, $object->ans_2,2];
        $query = PARENT::queryStatement("SELECT * FROM `survey_solutions` WHERE crop_id = ? AND cassava_type = ? AND stage = ?", $arr);
        return PARENT::f_one();
    }
    // ------------------END NEW USER INFERENCE ----------------
    public function survey_inference($object){
        $answer = '';
        if($object->ans_1 == 0){
            $answer = $answer."<li>Cassava grows best on light sandy loams or on loamy sands which are moist, fertile and deep, but it also does well on soils ranging in texture from the sands to the clays and on soils of relatively low fertility.</li><br>";
        }
        if($object->ans_2 == 0){
            $answer = $answer.  "<li>Use Land Burning Method for land preparation. By clearing the bush in the selected area using the burning method, you will destroy disease vectors and other parasites present in the soil. In addition, the layer of ashes left after burning may help to increase the quantity of potassium salt in the soil available to the growing plants.</li><br>";
        }
        // if($object->ans_3 == 0){
        //     $answer = $answer.  "<li>Use Land Burning Method for land preparation. By clearing the bush in the selected area using the burning method, you will destroy disease vectors and other parasites present in the soil. In addition, the layer of ashes left after burning may help to increase the quantity of potassium salt in the soil available to the growing plants.</li><br>";
        // }
        if($object->ans_3 == 0 || $object->ans_4 = 1){
            $answer = $answer.  "<li><b>“March to June”</b> is the best planting season for cassava farmers and seed producers in Nigeria. 
            March to June is the long rainy season which occurs. Although some farmers plant cassava in March to June, 
            it’s more common for them to plant during the short “October to December” rainy season. 
            Research shows that there is a much higher degree of infection by cassava brown streak disease (CBSD) in October to December than in March to June. 
            This is why yields are lower in October to December and higher in March to June. <b>During the october-december season, cassava plants are infested by higher numbers of whiteflies leading to more virus transmission and higher CBSD incidence</b></li><br>";
        }
        if($object->ans_5 == 1){
            $answer = $answer.  "<li>Planting Cassava in dry season isn't advisable. I'll advise you plant during wet season</li><br>";
        }

        if($object->ans_6 == 0 || $object->ans_6 == 1){
            $answer = $answer.  "<li>Ensure you are planting cassava stem cuttings you cut from plants that are up to 8 – 18 months old. Use a sharp machete or cutlass to cut the stem.

            Take care not to bruise the buds or otherwise damage the stem.
            
            The cuttings should be about 20-25 cm in length with 5 or more nodes.</li><br>";
        }

        if($object->ans_7 == 0){
            $answer = $answer.  "<li><b>Ridges</b> depends on the availability of planting materials and the fertility of the soil..</li><br>";
        }

        if($object->ans_8 == 0){
            $answer = $answer.  "<li>Ensure stem cutting is not from old cassava plants which might be infected and cause low yield.</li><br>";
        }

        return $answer;

    }
}
