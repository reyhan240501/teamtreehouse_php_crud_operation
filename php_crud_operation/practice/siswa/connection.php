<?php

try {

    $db =new PDO("mysql:host=localhost;dbname=latihan","root","",[PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);
   
} catch (Exception $error) {
    echo $error->getMessage();
}