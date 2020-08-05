<?php
class thaichana extends db 
{
    public function __construct() {
        db::__construct();
    }
    public function loaddata(){
        date_default_timezone_set("Asia/Bangkok");
        $sql =  "SELECT * FROM `thaichana` WHERE `thaichana` =1";
        db::query($sql);
       $result =  db::get_data();
       $result['year'] = db::datetime_thaiformat( $result['year']);
       $result = json_encode($result);

        return  $result;
    }
    public function updatedata($amout){
        date_default_timezone_set("Asia/Bangkok");
        $gettime = time();
        $amout = db::real_string($amout);
        $max= db::real_string($max);
        $sql =  "UPDATE `pepole` SET  `amout`={$amout}, year={$gettime}, year_thaichana={$gettime} WHERE `pepole_id` =  1";
        db::query($sql);
        $sql1 =  "UPDATE `thaichana` SET  `amout`={$amout}, year={$gettime}  WHERE `thaichana_id` =  1";
        db::query($sql1);
        echo 1 ; 
    }
}


?>