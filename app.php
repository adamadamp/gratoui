<?php 
$u="root";
$p=12345;
$bd= new PDO("mysql:host=localhost;dbname=fasb;",$u,$p); 


    if(
        $bd
    ){
        echo 1;
    }

    if (isset($_POST['adde'])) {
        $aa = stripcslashes($_POST['a']) ;
        $bb = stripcslashes($_POST['b']);
    
       

       
    $add = $bd->prepare("INSERT INTO `ara`(`a`, `b`) VALUES ('$aa','$bb')");
     $add->execute();
    }
 


    ?>