<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <style>
            
    
 
            a {
  color: #2dc997;
}
            a:hover, a:active, a:focus {
  color: #2dca98;
  outline: none;
  text-decoration: none;
}

      h1, h2, h3, h4, h5, h6 {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
  padding: 0;
}
      
#header {
  padding: 10px 0;
  height: 92px;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  transition: all 0.5s;
  z-index: 997;
}

#header #logo {
  float: left;
}

#header #logo h1 {
  font-size: 36px;
  margin: 0;
  padding: 5px 5px;
  line-height: 1;
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  letter-spacing: 3px;
  text-transform: uppercase;
}

#header #logo h1 a, #header #logo h1 a:hover {
  color: #000000;
}

#header #logo img {
  padding: 100px;
  margin: 100px;
}

@media (max-width: 768px) {
  #header #logo h1 {
    font-size: 26px;
  }
  #header #logo img {
    max-height: 40px;
  }
}

#header.header-fixed {
  
  padding: 3px 10px;
  height: 72px;
  transition: all 2.5s;
}




.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu ul {
  position: absolute;
  display: none;
  top: 100%;
  left: 0;
  z-index: 99;
}

.nav-menu li {
  position: relative;
  white-space: nowrap;
}

.nav-menu > li {
  float: left;
}

.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}

.nav-menu ul ul {
  top: 0;
  left: 100%;
}

.nav-menu ul li {
  min-width: 180px;
}
            /* Nav Menu Arrows */
.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}
            /* Nav Meu Container */
#nav-menu-container {
  float: right;
  margin: 100px;
}

@media (max-width: 768px) {
  #nav-menu-container {
    display: flex;
  }
}

 /* Nav Meu Styling */
.nav-menu a {
  padding: 8px 200px 10px 60px;
  text-decoration: none;
  display: inline-block;
  color: #000000;
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  text-transform: uppercase;
  font-size: 20px;
  outline: none;
}

.nav-menu > li {
  margin-left: 60px;
}

.nav-menu > li > a:before {
  content: "";
  position: absolute;
  width: 50%;
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: #2dc997;
  visibility: hidden;
  -webkit-transform: scaleX(0);
  transform: scaleX(0);
  -webkit-transition: all 0.3s ease-in-out 0s;
  transition: all 0.3s ease-in-out 0s;
}

.nav-menu a:hover:before, .nav-menu li:hover > a:before, .nav-menu .menu-active > a:before {
  visibility: visible;
  -webkit-transform: scaleX(1);
  transform: scaleX(1);
}

.nav-menu ul {
  margin: 10px 10px 10px 10px;
  border: 2px solid #e7e7e7;
}

.nav-menu ul li {
  background: #fff;
}

.nav-menu ul li:first-child {
  border-top: 0;
}

.nav-menu ul li a {
  padding: 100px;
  color: #333;
  transition: 0.1s;
  display: block;
  font-size: 13px;
  text-transform: none;
}

.nav-menu ul li a:hover {
  background: #2dc997;
  color: #fff;
}

.nav-menu ul ul {
  margin: 0;
}  
    



.btn{
  display: block;
  width: 120px;
  height: 50px;
 
  position: absolute;
  top: 10%;
  left: 90%;
  background-color: #212121;
  transform: translate(-50%, -50%);
}

.btn-5 {
  border: 0 solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 1px solid;
  outline-color: rgba(255, 255, 255, .5);
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
} 

.btn-5:hover {
  border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, .5), 0 0 20px rgba(255, 255, 255, .2);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  text-shadow: 1px 1px 2px #427388; 
}

 a {
    background: rgba(#fff, 0);
  
    color: #fff;

    padding: .25em;
    text-decoration: none;
    
    &:hover {
      background: rgba(#fff, 1);
      color: #E1332D;
    }
  }
#con { 
    align-items: center;
    display: flex;
    flex-direction: row;
    text-align: center; 
    

}
            </style>
 <?php   $host='localhost:3306';
        $user='root';
        $password='myroute12@1';
        $dbname='hehehe';
        
       $con= mysqli_connect($host,$user,$password,$dbname);
        if(mysqli_connect_errno())
            die("ECHEC connecxion my sql:". mysqli_connect_error());
//        $id=$_GET['id'];
        $query="SELECT * FROM  ma7ale order by id_ma7al";
        $result= mysqli_query($con, $query);
        if(!$result)
            die("ECHEC de la requete:".$query);
        
        
            
        echo '<div id="con"><div>  <h1>Welcom to my application</h1>';
        echo '   <h1>#LOGO</h1></div>';
        echo '  <div>';
        echo '  <a href="premier.php"  id="titi" class="btn btn-5">GOO</a> ';
        echo '</div></div>';
        
     
            
            
          
             echo ' <div id="header">';
   
 echo '   <div id="nav-menu-container">';
        echo '  <ul class="nav-menu">';
        echo '<li class="menu-active"><a href="new1.php">Hom</a></li>';
  for($i=0;$i< mysqli_num_rows($result);$i++){
        $line=mysqli_fetch_array($result,MYSQLI_ASSOC);
        
       
        echo ' <li class="men"><a  href="index.php?id='.$line['id_ma7al'].'">'.$line['Nom'].' </a></li>';
  }                        

        echo '  </ul>';
       
        
        
        
         
        
         
        
       
        
        echo '  </div>';
        
           
    
       
        
        
            
            
  
        echo '  </body>';
        echo '</html>';
  ?>