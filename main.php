<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  color:red;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {

  background-color: #777;
  padding: 10px;
  color: white;
}
h1{
  text-align:center;
}

h2{

  color: red;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>Romarez, junh carlo</h2>
<p>In this example, we have created a header, two columns/boxes and a footer. On smaller screens, the columns will stack on top of each other.</p>
<p>Resize the browser window to see the responsive effect (you will learn more about this in our next chapter - HTML Responsive.)</p>

<header>
  <h1>Cities</h1>
</header>


<section>
  <nav>
    <ul>
      <li><a href="index.php?page=london" class="<?php echo(isset($_GET['page'])==='london')? 'active' :'';?>">london</a></li>
      <li><a href="index.php?page=paris" class="<?php echo(isset($_GET['page'])&&  $_GET['page'] ==='paris')? 'active' :'';?>">paris</a></li>
      <li><a href="index.php?page=tokyo" class="<?php echo(isset($_GET['page'])&&  $_GET['page'] ==='tokyo')? 'active' :'';?>">tokyo</a></li>
      <li><a href="index.php?page=Example form" class="<?php echo(isset($_GET['page'])&&  $_GET['page'] ==='Example form')? 'active' :'';?>"> Example form</a></li>
      

    </ul>
  </nav>
  
  <article>
    <?php
        if(isset($_GET['page'])){
             $page=$_GET['page'];
                switch($page){
                    case 'london':
                        include 'london.php';
                        break;
                    case 'paris':
                        include 'paris.php';
                        break;
                    case 'tokyo':
                        include 'tokyo.php';
                        break;
                    case 'form':
                        include 'form.php';
                        break;
                    default:
                        echo "<p> please select a City.</p>";
                         break; 
            
             }
        }
        
    ?>

  </article>
</section>

<footer>
  <p>footer</p>
</footer>

</body>
</html>
