<?php
require 'functions.php';

//cek button submit sudah ditekan atau belum
if (isset($_POST["peperiksaan"])) {
//cek data berjaya ditambah atau tidak
  if(daftar_peperiksaan($_POST)>0){
    echo "
        <script>
          alert('Data Successfully Added!');
          document.location.href='peperiksaan.php';
        </script>
    ";
  }else{
    echo "
        <script>
          alert('Fail Insert Data');
          document.location.href='peperiksaan.php';
        </script>
    ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Peperiksaan</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>
   <style>
        body{
            background-image: url(images/TTA_library.jpg)
            
        }
        
    </style>
    <?php require 'nav.php'; ?>
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Tetapan Peperiksaan</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        
                        <div class="form-row">
                            <div class="name">Nama Pensyarah</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="varchar" name="Namapensyarah">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Subjek</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Subjek">
                                            <option disabled="disabled" selected="selected">Pilih Kod Subjek</option>
                                            <option value="BIT33032">BIT33032</option>
                                            <option value="BIT31003">BIT31003</option>
                                            <option value="BKU33041">BKU33041</option>
                                            <option value="BTA34234">BTA34234</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Tempat</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="varchar" name="Tempat">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tarikh</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="Tarikh">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Masa</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="time" name="Masa">
                                </div>
                            </div>
                        </div>  
                    <div class="form-row">
                            <div class="name">Bilangan Pelajar</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="int" name="Bilanganpelajar">
                                </div>
                            </div>
                        </div>
                        
                        
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit ">Tetapkan Peperiksaan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->