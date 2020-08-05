$(document).ready(function () {
  
    setInterval(loaddata(),60000)// h=1 
});

function loaddata() {
    var in_noenhom , in_pakchong , out_noenhom,out_pakchong,nownow,thaichana;
    $.get("ajax/loaddata_pak_chong.php",
        function (data) {
            in_pakchong = data.in_in;
            out_pakchong = data.out_out;
//            nownow = in_pakchong - out_pakchong;
//            document.write("in_pakchong = " + in_pakchong +"  out_pakchong = " + out_pakchong +" nownow = " + nownow );
        },
        "JSON"
    );
      $.get("ajax/loaddata_noen_hom.php",
        function (data) {
            in_noenhom = data.in_in;
            out_noenhom = data.out_out;
//            nownow = in_noenhom - out_noenhom;
//            document.write("in_noenhom = " + in_noenhom +" out_noenhom = " + out_noenhom +" nownow = " + nownow );
        },
        "JSON"
    );
 
      $.get("ajax/loaddata.php",
        function (data) {
        thaichana = data.amout;
        nownow = parseInt(in_noenhom) + parseInt(in_pakchong) - parseInt(out_noenhom) - parseInt(out_pakchong);
        if (parseInt(nownow) < 0) {nownow = thaichana;}
        else {nownow = parseInt(nownow) + parseInt(thaichana);}
          
//        document.write(" thaichana = " + thaichana +" nownow = " +  nownow +" ");
//        document.write("in_pakchong = " + in_pakchong +"  out_pakchong = " + out_pakchong +" ");
//        document.write("in_noenhom = " + in_noenhom +" out_noenhom = " + out_noenhom );
            $("#time-1").text(data.year);
            $("#time-2").text(data.year);
            $("#now-1").text( numeral(nownow).format('0000'));
            $("#now-2").text( numeral(nownow).format('0000'));
            $("#max-1").text( numeral(data.max).format('0000'));
            $("#max-2").text( numeral(data.max).format('0000'));
      },
        "JSON"
    );
      
 
}