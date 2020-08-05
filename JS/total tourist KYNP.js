$(document).ready(function () {
  
    setInterval(loaddata(),60000)// h=1 
});

function loaddata() {
    var in_noenhom , in_pakchong , out_noenhom,out_pakchong,nownow,thaichana;
      $.get("ajax/loaddata.php",
        function (data) {
        thaichana = data.amout;
        in_noenhom = data.noen_hom_in;
        out_noenhom = data.noen_hom_out;
        in_pakchong = data.pak_chong_in;
        out_pakchong = data.pak_chong_out;
        nownow = parseInt(in_noenhom) + parseInt(in_pakchong) - parseInt(out_noenhom) - parseInt(out_pakchong);
        if (parseInt(nownow) < 0) {nownow = thaichana;}
        else {nownow = parseInt(nownow) + parseInt(thaichana);}
          
//        document.writeln(" thaichana = " + thaichana +" nownow = " +  nownow +" ");
//        document.writeln("in_pakchong = " + in_pakchong +"  out_pakchong = " + out_pakchong +" ");
//        document.writeln("in_noenhom = " + in_noenhom +" out_noenhom = " + out_noenhom );
//        document.writeln("thaichana = " + data.year_thaichana);
//        document.writeln("pakchong = " + data.year_pakchong);
//        document.writeln("noenhom = " + data.year_noenhom);

            $("#time-3").text(data.year_thaichana);
            $("#time-4").text(data.year_pakchong);
            $("#time-5").text(data.year_noenhom);
          
//            document.getElementById('time-3').innerHTML = data.year_thaichana;
//            document.getElementById('time-4').innerHTML = data.year_pakchong;
//            document.getElementById('time-5').innerHTML = data.year_noenhom;
          
            $("#now-1").text( numeral(nownow).format('0,0'));
            $("#thaichana").text( numeral(thaichana).format('0,0'));
            $("#noenhom-in").text( numeral(data.noen_hom_in).format('0,0'));
            $("#noenhom-out").text( numeral(data.noen_hom_out).format('0,0'));
            $("#pakchong-in").text( numeral(data.pak_chong_in).format('0,0'));
            $("#pakchong-out").text( numeral(data.pak_chong_out).format('0,0'));
          
            $("#time-1").text(data.year);
            $("#time-2").text(data.year);
            $("#max-1").text( numeral(data.max).format('0,0'));
            $("#max-2").text( numeral(data.max).format('0,0'));
      },
        "JSON"
    );
      
 
}