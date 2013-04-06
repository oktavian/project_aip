<?php
    $hos = "localhost";
    $usr = "root";
    $pas = "";
    
    $koneksi   = mysql_connect($hos,$usr,$pas);
    /*
    if($koneksi){
        echo "yes";
    }else{
        echo "oh no";
    }
     */
    
    $koneksidb = mysql_select_db("woodydb");
    //if($koneksidb) echo "oke";
    
?>
