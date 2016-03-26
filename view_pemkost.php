<?php

include "config.php";

$select = "select * from user where level='pemilik_kost'";
$select_query = mysql_query($select);

?>


<html>

<head>

<meta http-equiv="Content-Script-Type" content="text/javascript" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection, tv" />

<!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="css/style-ie.css" media="screen, projection, tv" /><![endif]-->
<link rel="stylesheet" href="css/style-print.css" type="text/css" media="print" />

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

<title>E-KOSTAN</title>
</head>

<body>

<!-- Header -->
	<div id="header">
			<ul id="navigation">
				
		</ul>
		<h1><a href="#">Tel-U</a> Kostan</h1>
		<!-- Your website name  -->
		
<!-- Your website name end -->
		
			<!-- Your slogan -->
			<!-- Your slogan end -->
		
		<!-- Search form -->	
	
			<!-- Search form end -->		
		
		<!-- Menu -->
		<a href="#skip-menu" class="hidden">Skip menu</a>
		<ul id="menu">
			<li><a href="admin.php">Home</a></li>
			<li><a href="tambah_pemkost.php">Tambah Pemilik</a></li>
			<li><a href="view_pemkost.php"class="active">Lihat Pemilik</a></li>
			<li><a href="#">Lihat order</a></li>
			<li><a href="Logout.php">Logout</a></li>
		</ul>
		<!-- Menu end -->
	</div>
<hr class="noscreen" />

<div id="skip-menu"></div>
	
	<div id="content">

		<!-- Middle and right column wrapper-->
		<div id="content">

			<!-- Middle column -->
			<caption><h1>Daftar Pemilik Kost</h1></caption>
			
   
   <table class="zebra-table" >
   	<thead>
<tr><th>username</th><th>nama</th><th>email</th><th>pilihan</th>
</tr>
</thead>
<tbody>

<?php

while($select_result = mysql_fetch_array($select_query)){

$username = $select_result['username'];
$nama = $select_result['nama'];
$email = $select_result['email'];

echo "<tr><td>$username</td><td>$nama</td><td>$email</td>
<td>
<form method=\"POST\" action=\"action.php?id=username\"><input type=\"hidden\" value=\"$username\" name=\"username\">
<input type=\"submit\" name=\"action\" value=\"Update\"><br />
<input type=\"submit\" name=\"action\" value=\"Delete\">
</form>
</td>
</tr>";
}

?>
</tbody>
</table>
	</div>
			<!-- Middle column end -->

			<!-- Right column -->
		
			<!-- Right column end -->
		</div>
		<!-- Middle and right column wrapper end-->

		<!-- Left column -->
		
		<!-- Right column end -->
		<div class="cleaner">&nbsp;</div>

<hr class="noscreen" />
	
	<!-- Footer -->
	<div id="footer">
		<div id="footer-in">
			<p class="footer-left">&copy; <a href="#">E-KOSTAN</a>, 2016.</p>
		  <p class="footer-right">Design by <a href="#">B.R.A Team</a></p>
	  </div>
</div>

</body>
</html>