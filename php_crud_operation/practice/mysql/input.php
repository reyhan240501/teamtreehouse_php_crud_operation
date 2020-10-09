<?php

include "connection.php";


$input=$db->exec("insert into siswa (nama,pekerjan) values('".$_POST['nama']."','".$_POST['pekerjan']."')");

if($input)
{
    header("Location:index.php");
}

