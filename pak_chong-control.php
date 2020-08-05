<!doctype html>
<html lang="en">

<head>
    <title>update จำนวนนักท่องเที่ยวลงชื่อเข้า-ออก ด่านปากช่อง</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/ky.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>
        .blox {
            display: block;
            height: 900px;
        }
         .border-size {
            border-style: solid;
            border-width: 10px;
        }
        </style>
</head>

<body class="bg-success">
     <div class="container  ">
         <div class="row mt-5 blox bg-white text-center border-size">
         <div class="col-12  pt-5">
         <h4  >ข้อมูลถูกอัพเดจ ณ วันที่  <br><br> <h1 class="display-5 text-danger"> <span id="time"></span> </h1>   </h4>
         </div>
            <div class="col-12     pt-5">
            <h4  >จำนวนบุคคลลงชื่อเข้าอุทยานแห่งชาติเขาใหญ่<br>
              ด่านปากช่อง<br> <h1 class="display-1 text-success"> <span id="in_value">0</span> </h1>  คน </h4>
            <br><br> <br>
            <h4  >จำนวนบุคคลลงชื่อออกอุทยานแห่งชาติเขาใหญ่<br>
ด่านปากช่อง<br><br> <h1 class="display-1 text-primary"> <span id="out_value">0</span></h1>  คน </h4>
            </div>
            <div class="container pt-3 ">
                <div class="row text-center">
                    <div class="col-12">
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#editpepole">แก้ไขจำนวนบุคคล</button>
                    </div>
                </div>
          
            </div>
         </div>
     </div>
        <!-- Button trigger modal -->
      
        
        <!-- Modal -->
        <div class="modal fade" id="editpepole" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">แก้ไขจำนวนบุคคลลงชื่อ เข้า-ออก ด่านปากช่อง</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                          <label for="">จำนวนบุคคลลงชื่อเข้าอุทยานฯ</label>
                          <input type="numer"   id="in_value_update"  min="0" class="form-control" placeholder="จำนวนบุคคลลงชื่อเข้า"  >
                           
                        </div>
                        <div class="form-group">
                          <label for="">จำนวนบุคคลลงชื่อออกอุทยานฯ</label>
                          <input type="numer"  id="out_value_update"  min="1" class="form-control" placeholder="จำนวนบุคคลลงชื่อออก"  >
                           
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                        <button type="button" class="btn btn-primary" id="edit_data">บันทึก</button>
                    </div>
                </div>
            </div>
        </div>
 
    <script src="JS/jquery.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="JS/pak_chong-control.js"></script>
</body>

</html>