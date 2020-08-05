<!doctype html>
<html lang="en">

<head>
    <title>จำนวนนักท่องเที่ยว ณ เวลา น.</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="shortcut icon" href="img/ky.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .blox {
            display: block;
            height: 550px;
        }

        .blox-md {
            display: block;
            height: 600px;
        }

        .textblox-md {
            display: block;
            height: 200px;

        }

        .textblox {
            display: block;
            height: 290px;

        }

        img {

            width: 80px;
        }

        .texttest {
            margin: 0;

            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%)
        }

        p.textfix_pc {
            color: rgb(39, 88, 34);
            font-size: 350px;
            font-weight: bold;
        }
        
        p.textfix_pclow {
            color: rgb(39, 88, 34);
            font-size: 350px;
            font-weight: bold;
        }
        
        p.textfix_pcmid {
            color: rgb(255, 150, 50);
            font-size: 350px;
            font-weight: bold;
        }
        
        p.textfix_pchigh {
            color: rgb(255, 00, 00);
            font-size: 150px;
        }

        p.textfix_pc_md {
            color: rgb(39, 88, 34);
            font-size: 150px;
        }

        .border-size {
            border-style: solid;
            border-width: 10px;
        }
    </style>
</head>

<body class="bg-success">
    <div class="container mt-5  bg-white">
        <div class="row   border-size d-none d-xl-block">
            <div class="col-12 blox   ">
                <div class="row ">
                    <div class="float-left mr-auto pt-3">
                        <h1 class="display-4 ml-5 font-weight-bold pt-4"> <u>Khao Yai National Park</u></h1>
                        <h2 class="ml-5">อุทยานแห่งชาติเขาใหญ่</h2>
                    </div>
                    <div class="float-right pt-4 pr-3 mr-4">
                        <img src="img/mnre.png">
                        <img src="img/dnp_logo.png" class="pt-2">
                        <img src="img/ky.png" class="pt-2">
                        <img src="img/logo-Thaichana.png" class="pt-2">
                    </div>
                </div>
                <div class="row bg-white textblox ">
                   
                    <p class=" mt-3 texttest textfix_pc"> <span id="now-1">0000</span </p>      
                    <script>
                        var x = document.getElementById("now-1");
                        var num = parseInt(x);
                        if (num > 100){document.getElementById("now-1").style.color = rgb(220, 0, 00)} 
                        else (num > 3500){document.getElementById("now-1").style.color = rgb(255, 150, 50)}
                    </script>
                </div>
                <div class="row ">
                    <div class="float-left mr-auto pt-4 ml-5  ">
                    <h3 class="font-weight-bold  ">ณ วันที่ <span id="time-1"></span> </h3>
                    </div>
                    <div class="float-right pt-4 pr-3 mr-4">
                        <h3 class="font-weight-bold">จำนวนที่รองรับได้ <span id="max-1"> 0000</span> คน</h3>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="row   border-size  text-center   d-xl-none">
            <div class="col-12 blox-md  ">

                <div class="row">
                    <div class="col-12 text-center">
                    <div class="  pt-3">
                        <h1 class="display-4 ml-5 font-weight-bold pt-4"> <u>Khao Yai National Park</u></h1>
                        <h2 class="ml-5">อุทยานแห่งชาติเขาใหญ่</h2>
                    </div>
                    </div>
                </div>
                
                <div class="row d-block mt-2">
                    <img src="img/mnre.png">
                    <img src="img/dnp_logo.png">
                    <img src="img/ky.png">
                    <img src="img/logo-Thaichana.png">

                    <div class="col-12">
                        <div class="row bg-white textblox-md   ">
                            <p class=" mt-3 texttest textfix_pc_md  "><span id="now-2">0000 </span>  </p>
                        </div>
                    </div>
                </div>

                <div class="row ">
                <div class="col-12">
                <h3 class="font-weight-bold  ">ณ วันที่  <span id="time-2"> </span> </h3>
                   
                </div>
                <div class="col-12">
                <h3 class="font-weight-bold  ">จำนวนที่รองรับได้ <span id="max-2">0000 </span> คน</h3>
                   
                </div>
                    
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
    <script src="JS/total.js"></script>
    
  
</body>

</html>