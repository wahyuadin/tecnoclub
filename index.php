<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>HIMATIF UBP</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

    <!-- Tag Search -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>



<!-- <?php 
$id = $_GET['id']; 

//koneksi database
include('koneksi.php');

//query
$query = "SELECT * FROM user WHERE id_user='$id'";
$result = mysqli_query($conn, $query);

?> -->


    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Form Registrasi</h2>
                    <h5 class="title">Tecno Club Himatif Sabilulungan - Universitas Buana Perjuangan </h5>
                    <form method="POST" action="proses.php">
                        <p>Nama</p><br>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="nama" name="nama" required>
                        </div>

                        <div class="row row-space">

                            <div class="col-2">

                                <p>NIM</p>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="NIM" name="nim" required>

                                </div>
                            </div>

                            <div class="col-2">

                                <div class="input-group">
                                    <p>No Telp</p>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <input class="input--style-1" type="text" placeholder="Masukan No Telp" name="telp" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div>
                                <p>Kelas</p><br>
                                <!-- <select name="class "> -->
                                <input list="brow " placeholder="Masukan Kelas" required name="kelas">
                                <datalist id="brow " select="kelas">
                                        <option value="IF20A"></option>
                                        <option value="IF20B"></option>
                                        <option value="IF20C"></option>
                                        <option value="IF20D"></option>
                                        <option value="IF20F"></option>
                                        <option value="IF19A"></option>
                                        <option value="IF19B"></option>
                                        <option value="IF19C"></option>
                                        <option value="IF19D"></option>
                                        <option value="IF19F"></option>
                                        <option value="IF18A"></option>
                                        <option value="IF18B"></option>
                                        <option value="IF18C"></option>
                                        <option value="IF18D"></option>
                                        <option value="IF18F"></option>  
                                        <option value="IF17A"></option>
                                        <option value="IF17B"></option>
                                        <option value="IF17C"></option>
                                        <option value="IF17D"></option>
                                        <option value="IF17F"></option>
                                        <option value="IF16A"></option>
                                        <option value="IF16B"></option>
                                        <option value="IF16C"></option>
                                        <option value="IF16D"></option>
                                        <option value="IF16F"></option>
                                        <option value="IF15A"></option>
                                        <option value="IF15B"></option> 
                                        <option value="IF15C"></option> 
                                        <option value="IF15D"></option> 
                                        <option value="IF15F"></option>          
                                    <!-- </optgroup> -->
                                </datalist>
                                <!-- </select> -->

                                <div class="select-dropdown "></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <p>Pilih Kategori</p><br>
                                <select name="kategori" required>
                                    <option disabled="disabled " selected="selected">Pilih Kategori Club</option>
                                        <option value="web-desain">Web Desain</option>
                                        <option value="jaringan">Jaringan</option>
                                        <option>Android Development (Cooming Soon)</option>
                                        <!-- <option>IF20 B</option>
                                        <option>IF20 C</option>
                                        <option>IF20 D</option>
                                        <option>IF20 E</option>
                                        <option>IF20 F</option> -->
                                </select>
                                <div class="select-dropdown "></div>
                            </div>
                        </div>
                        <!-- <div class="row row-space ">
                            <div class="col-2 ">
                                <div class="input-group ">
                                    <input class="input--style-1 " type="text " placeholder="REGISTRATION CODE " name="res_code ">
                                </div>
                            </div>
                        </div> -->
                        <div class="p-t-20 ">
                            <button class="btn btn--radius btn--green " type="submit">Daftar</button>
                        </div>
                        <br>
                        <br>
                        <br>
                        <center><br>Pendidikan Riset dan Teknonogi - Himatif UBP<b> 2020</b></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js "></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js "></script>
    <script src="vendor/datepicker/moment.min.js "></script>
    <script src="vendor/datepicker/daterangepicker.js "></script>

    <!-- Main JS-->
    <script src="js/global.js "></script>
    
</body>

</html>
<!-- end document-->