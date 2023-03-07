<?php

if(isset($_POST['email']) && isset($_POST['texto'])){
    $email=$_POST['email'];
    $texto=$_POST['texto'];
    $to = "espertcuquerellalluis@gmail.com";
    $subject = "Consulta";
    $txt = $texto;
    
    mail($to, $subject, $txt);
}

?>