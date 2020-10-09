<?php

$db=new PDO("mysql:dbname=latihan;host=localhost","root","");
// $simpan=$db->query("insert into kelas values('','SMA','IPA')");
$tampil=$db->query("select * from kelas");

$tampil_data=$tampil->fetch();
var_dump($tampil_data);