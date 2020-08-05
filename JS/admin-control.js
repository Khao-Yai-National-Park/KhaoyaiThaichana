$(document).ready(function () {
    loaddata();
    $("#edit_data").click(function (e) { 
        e.preventDefault();
        update_Data();
       
        
    });
});

function loaddata() {
    $.get("ajax/loaddata.php",
        function (data) {
                        console.log(data);
                        
            $("#time").text(data.year);
            $("#val").text(numeral(data.amout).format('0,0'));

            $("#max").text(numeral(data.max).format('0,0'));
            $("#value_update").val(data.amout);
            $("#value_max_update").val(data.max);
        },
        "JSON"
    );
}

function update_Data() {
    $.post("ajax/update.php", {
        amout:$("#value_update").val(),
        max:$("#value_max_update").val(),
    },
        function () {
            Swal.fire(
                'บันทึกข้อมูลสำเร็จ',
                'แก้ไขข้อมูลสำเร็จ',
                'success'
            ).then((result) => {
                if (result.value) {
                    location.href = "./admin-control.php"
                }
                location.href = "./admin-control.php"
            })
        },
        "JSON"
    );
     

}