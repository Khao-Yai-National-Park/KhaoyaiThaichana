<?php
class db
{
    private $host ;
    private $userdb;
    private $passworddb;
    private $dbname;
    private $con;
    private $result;
    public function __construct() {
            $this->host = "localhost";
            $this->userdb="khaoyain_khaoyaicapacity";
            $this->password="00000000";
            $this->dbname="khaoyain_khaoyaicapacity";
            $this->con = new mysqli($this->host,$this->userdb,$this->password,$this->dbname);
            $this->con->set_charset("utf8");
    }
    public function query($query){
      
            $this->result=$this->con->query($query);
            return $this->con->errno;
            
    }
    public function num_rows()
    {
        return $this->result->num_rows;
    }
    public function default_data(){
        return $this->result;
    }
    public function get_data()
    {
        return $this->result->fetch_assoc();
    }
    public function real_string($text){
        return $this->con->real_escape_string($text);
    }
    public function datetime_thaiformat($datetime){
        date_default_timezone_set("Asia/Bangkok");
        $monthText = array('มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม');
        $hour   = date('H',$datetime);
        $minute = date("i",$datetime);
        $year   = date('Y',$datetime)+543;
        $month  = date('m',$datetime);
        $date   = date('d',$datetime);

        // full,short,notime

        $month  = $monthText[$month-1];


        return $date.' '.$month.' '.$year.' เวลา '.$hour.':'.$minute.' น.';
    }
    public function datetime_ISO($datetime){
        date_default_timezone_set("Asia/Bangkok");
        
        $hour   = date('H',$datetime);
        $minute = date("i",$datetime);
        $year   = date('Y',$datetime)+543;
        $month  = date('m',$datetime);
        $date   = date('d',$datetime);

        // full,short,notime

        // $month  = $monthText[$month-1];


        return $date.'/'.$month.'/'.$year.' '.$hour.':'.$minute;
    }
    
}


?>