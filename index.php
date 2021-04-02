<?php


$uc='formlogine';



if(isset($_GET['idd']))
    $uc='tito';


if($uc=='formlogine'){
        include 'new1.php';
    }

if($uc=='tito')
{
    include 'ind.php';
}


?>