<?php
class pepole extends db 
{
    public function __construct() {
        db::__construct();
    }
    public function loaddata(){
        date_default_timezone_set("Asia/Bangkok");
        $sql =  "SELECT * FROM `pepole` WHERE `pepole_id` =1";
        db::query($sql);
        $result =  db::get_data();
        $result['year'] = db::datetime_thaiformat( $result['year']);
        $result['year_thaichana'] = db::datetime_ISO( $result['year_thaichana']);
        $result['year_pakchong'] = db::datetime_ISO( $result['year_pakchong']); 
        $result['year_noenhom'] = db::datetime_ISO( $result['year_noenhom']); 
        $result = json_encode($result);
        return  $result;
    }
    public function updatedata($amout,$max){
        date_default_timezone_set("Asia/Bangkok");
        $gettime = time();
        $amout = db::real_string($amout);
        $max= db::real_string($max);
        $sql =  "UPDATE `pepole` SET  `amout`={$amout},`max`={$max},year={$gettime} ,year_thaichana={$gettime} WHERE `pepole_id` =  1";
        db::query($sql);
        echo 1 ; 
    }
}


?>