<?php

if(!empty($_POST['nickname']) && !empty($_POST['password'])){
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    if($nickname== "cliente" && $password == "123"){
        header("location: cliente.php");
    }elseif($nickname== "administrador" && $password == "asd"){
        header("location: admin.php");
    } else{
        header("location: error.php");
       // echo "usuario/contraseña no valida";
    }
}else{
    header("location: index.php");
}
