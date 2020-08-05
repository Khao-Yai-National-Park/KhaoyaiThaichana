$(document).ready(function () {
    loaddata();
    $("#edit_data").click(function (e) { 
        e.preventDefault();
        update_Data();
       
        
    });
});

function loaddata() {
    $.get("ajax/loaddata_noen_hom.php",
        function (data) {
                        console.log(data);
                        
            $("#time").text(data.year);
            $("#in_value").text(numeral(data.in_in).format('0,0'));

            $("#out_value").text(numeral(data.out_out).format('0,0'));
            $("#in_value_update").val(data.in_in);
            $("#out_value_update").val(data.out_out);
        },
        "JSON"
    );
}

function update_Data() {
    $.post("ajax/update_noen_hom.php", {
        in_in:$("#in_value_update").val(),
        out_out:$("#out_value_update").val(),
    },
        function () {
            Swal.fire(
                'บันทึกข้อมูลสำเร็จ',
                'แก้ไขข้อมูลสำเร็จ',
                'success'
            ).then((result) => {
                if (result.value) {
                    location.href = "./noen_hom-control.php"
                }
                location.href = "./noen_hom-control.php"
            })
        },
        "JSON"
    );
     

}