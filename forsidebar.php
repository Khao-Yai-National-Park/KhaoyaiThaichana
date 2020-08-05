<!doctype html>
<html lang="en">

<head>
    <title>จำนวนนักท่องเที่ยว ณ เวลา น.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="shortcut icon" href="img/ky.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        p.now11{
            align-content: center;
            font-size: 130px;
            font-weight: 400;
            color:#034900;
            margin-top: -20px;
        }
        .bodymain {
            width: 320px;
            height: 240px;
        }
        .bodymain table {
            height: 20px
            margin-top: -90px;
            border:none;
        }
        p.table15{
            font-size: 9px;
            font-weight: 200;
        }
        .bimg{
    background-image: -webkit-linear-gradient(270deg,rgba(255,255,255,1.00) 0%,rgba(19,73,0,1.00) 100%);
    background-image: -moz-linear-gradient(270deg,rgba(255,255,255,1.00) 0%,rgba(19,73,0,1.00) 100%);
    background-image: -o-linear-gradient(270deg,rgba(255,255,255,1.00) 0%,rgba(19,73,0,1.00) 100%);
    background-image: linear-gradient(180deg,rgba(255,255,255,1.00) 0%,rgba(19,73,0,1.00) 100%);            
        }
    </style>
</head>

<body class="bodymain">
    <div class="bimg"><center><img src="img/header 1600x200.png" alt="Head" width=320 height=40 scale="fit"/></center></div>
    <div> <center><p class="now11" id="now-1">0000</p></center></div>
    <table class="bodymain table"width="320" border="0">
  <tbody>
    <tr>
        <td width="183" height="20"><p class="table15" align="left">ณ วันที่ <span id="time-1"></span></p></td>
      <td width="125" height="20"><p class="table15" align="right">จำนวนที่รองรับได้ <span id="max-1">0000</span> คน</p></td>
    </tr>
  </tbody>
</table>

    <script src="JS/jquery.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script src="JS/total.js"></script>  
</body>

</html>