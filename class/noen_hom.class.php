<?php
class noen_hom extends db 
{
    public function __construct() {
        db::__construct();
    }
    public function loaddata(){
        date_default_timezone_set("Asia/Bangkok");
        $sql =  "SELECT * FROM `noen_hom` WHERE `noen_hom_id` =1";
        db::query($sql);
        $result =  db::get_data();
        $result['year'] = db::datetime_thaiformat( $result['year']);
        $result = json_encode($result);

        return  $result;
    }
    public function updatedata($in_in,$out_out){
        date_default_timezone_set("Asia/Bangkok");
        $gettime = time();
        $in_in = db::real_string($in_in);
        $out_out= db::real_string($out_out);
        $sql = "UPDATE `noen_hom` SET  `in_in`={$in_in},`out_out`={$out_out},year={$gettime}  WHERE `noen_hom_id` =  1";
        db::query($sql);
         $sql1 = "UPDATE `pepole` SET  `noen_hom_in`={$in_in},`noen_hom_out`={$out_out}, year={$gettime}, year_noenhom={$gettime}  WHERE `pepole_id` =  1";
        db::query($sql1);
        echo 1 ; 
    }
}


?>