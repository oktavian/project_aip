<?php
    include "config/koneksidb.php";
?>
<html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/jquery-1.8.2.js"></script>
    </head>
    <body>
        <div id="keterangan">
           berisi logut, hak akses , anda berada di menu apa
        </div>
        <div id="navigasi">
            <ul>
                <li><a href="index.php?berkas=home/home.php">HOME</a></li>
                <li><a href="index.php">DSP</a></li>
                <li><a href="index.php">NASABAH</a></li>
                <li><a href="index.php">LAPORAN</a></li>
            </ul>
        </div>
        <div id="outer">
            <div id="header">
                <h1>visi misi</h1>
                <h1>visi misi</h1>
                <h1>visi misi</h1>
                <h1>visi misi</h1>
                <h1>visi misi</h1>
            </div>
            <div id="content">
                <?php  
                    if(!isset($_GET['berkas'])){
                        include "home/home.php";
                    }else{
                        include $_GET['berkas'];
                    }
                ?>
            </div>
        </div>
        <div class="clear"></div>
    </body>
</html>