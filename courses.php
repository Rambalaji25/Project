<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> csc </title>
	<link rel="stylesheet" type="text/css" href="css/legend.css">
	<img src="images/ji.jpg" alt="cse" width="1250" height="160">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
 .bordered {
    padding: 2px;

width:auto ;
 background-image: url("de.jpg");
  border-radius: 34px;
  border: 5px outset yellowgreen;
  font-size: 14px;
  color: #DAA520  ;
} 
.gih{

  float:right
}


}

</style>

<body style="background-color:#E74C3C">
	<div class="bordered"><center>

    <h1 style="color:white;">Online courses</h1>   
	 <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>";?></div></center>


	     <div class="gih">
       <a href="logout.php"><img src=" r4.gif"  alt="HTML tutorial" style="width:112px;height:58px;"></a></div>
	     

</body>


<br><br><br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="mysql.html"><img src=" 269-2693201_mysql-logo-circle-png.png"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="python.html"><img src=" pyt.png"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="html.html"><img src=" cen/html.jpg" alt="HTML tutorial" style="width: 232px;height:152px;"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="c++.html"><img src=" cen/c++.jpg" alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="php.html"><img src=" cen/php.jpg" alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="java.html"><img src=" cen/java.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="c.html"><img src=" cen/unnamed.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="autocad.html"><img src=" cen/autocad.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="adjp.html"><img src=" cen/adjp.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="sec.html"><img src=" cen/sec.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


<a href="co.html"><img src=" cen/co.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="tally.html"><img src=" cen/tally.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="po.html"><img src=" cen/po.jpg"  alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a href="DCA.html"><img src=" cen/DCA.jpg" alt="HTML tutorial" style="width: 232px;height:152px;"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;




</div>

<body>

</body>
</html>