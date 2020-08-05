<?php
class pak_chong extends db 
{
    public function __construct() {
        db::__construct();
    }
    public function loaddata(){
        date_default_timezone_set("Asia/Bangkok");
        $sql =  "SELECT * FROM `pak_chong` WHERE `pak_chong_id` =1";
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
        $sql =  "UPDATE `pak_chong` SET  `in_in`={$in_in},`out_out`={$out_out},year={$gettime}  WHERE `pak_chong_id` =  1";
        db::query($sql);
         $sql1 =  "UPDATE `pepole` SET  `pak_chong_in`={$in_in},`pak_chong_out`={$out_out},year={$gettime}, year_pakchong={$gettime}  WHERE `pepole_id` =  1";
        db::query($sql1);
        echo 1 ; 
    }
}


?>