<?php
 /*local server info
 $server = "127.0.0.1";
 $username = "root";
 $password = "";
 $db = "portfolio";*/

 //cpanel
 $server = "sxb1plzcpnl491036";
 $username = "amyvince_amy";
 $password = "=v.U!{8i{Ql!";
 $db = "amyvince_portfolio";

 //Check connection
 try
 {
   $db = new PDO("mysql:host=$server; dbname=$db", "$username", "$password");
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
 }
 catch(PDOException $e){
    die("Oops cannot connect to database");
    $e->getMessage();
 }

