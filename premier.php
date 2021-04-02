<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
   echo ' <section id="header">';
   
 echo '   <div id="nav-menu-container">';
        echo '  <ul class="nav-menu">';
        echo '<li class="menu-active"><a href="#hom">Hom</a></li>';
  for($i=0;$i<2;$i++){
        $line=mysqli_fetch_array($result,MYSQLI_ASSOC);
        
       
        echo ' <li class="men"><a  href="index.php?id='.$line['id'].'">'.$line['Nom'].' </a></li>';
  }                        

        echo '  </ul>';
        echo '<form>'
        . '<input type="submit" name="idd" value="More"/>';
        echo '  </div>';
        
           
    
        echo '</section>';
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
 a {
    background: rgba(#fff, 0);
    border-bottom: 1px solid;
    color: #fff;
    line-height: 1.4;
    padding: .25em;
    text-decoration: none;
    
    &:hover {
      background: rgba(#fff, 1);
      color: #E1332D;
    }
  }