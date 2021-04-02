<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <title></title>
    </head>
    <body>
        <style>
            
             table{
                width: 900px;
                border-collapse: collapse;
                table-layout: auto;
                vertical-align: top;
                margin-top: 40px;
                margin-left: 50px;
                border: 2px solid #CCCCCC;
                background-color: #CFF;
                color: #36C;
                font: Tohoma;
                font-size: 16px;
            }
            
            </style>
           
        <?php
//        $cpt=0;
//          for($i=0;$i<7;$i++){
//        if(isset($_GET['add'])){
//            $cpt++;
//        }
//        else
//            if(isset ($_GET['-'])){
//                $cpt--;
//            }
//    }
        $host='localhost:3306';
        $user='root';
        $password='myroute12@1';
        $dbname='hehehe';
        
       $con= mysqli_connect($host,$user,$password,$dbname);
        if(mysqli_connect_errno())
            die("ECHEC connecxion my sql:". mysqli_connect_error());
        
        
        echo '<div class="container">
  <form class="form-inline" method="post" >
    <input type="text" name="roll_no" class="form-control" placeholder="Search roll no..">
    <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>';
    
//       if (isset($_GET['save'])) {
//
//$term = mysql_real_escape_string($_REQUEST['save']);     
//
//$sql = "SELECT Nom FROM bada3 WHERE Nom LIKE '%".$term."%'"; 
//$r_query = mysql_query($sql); 
//
//while ($row = mysql_fetch_array($r_query)){  
//echo '<td>'.$row['Nom'].'</td>';  
//   
//}  

//}
    $id=$_GET['id'];
        $query="SELECT Nom FROM bada3 where bada3.id_ma7al= ".$id;
               
                
                
        $result= mysqli_query($con, $query);
        if(!$result)
            die("ECHEC de la requete:".$query);
        
        
        
      
       echo '<table border="1">';
        for($i=0;$i<7;$i++){
        $line=mysqli_fetch_array($result,MYSQLI_ASSOC);
          
      
        echo '<td>'.$line['Nom'].'</td><td><input type="submit" value="ADD" name="add"/></td>'
                . '<td><input type="submit" value="-" name="-"/></td><td>'.$cpt.'</td></tr>';
      
        }
        echo '</table><br><br>';
        
  
        
        
        ?>
    </body>
</html>
