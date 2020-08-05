$(document).ready(function () {
  
    setInterval(loaddata(),60000)// h=1 
});

function loaddata() {
    $.get("ajax/loaddata.php",
        function (data) {
            $("#time-1").text(data.year);
            $("#time-2").text( data.year);
            $("#now-1").text( numeral(data.amout).format('0000'));
            $("#now-2").text( numeral(data.amout).format('0000'));
            $("#max-1").text( numeral(data.max).format('0000'));
            $("#max-2").text( numeral(data.max).format('0000'));
        },
        "JSON"
    );
}