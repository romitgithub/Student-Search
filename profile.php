
<?php 

	include "connect.inc.php";


	

?>

<html>
	<head>
		<title>Faceit</title>
		<link rel='stylesheet' type='text/css' href='main.css'>
		<style>
			.mybutton {
				margin:5px;
				background: #2daebf url(/images/alert-overlay.png) repeat-x;
				display: inline-block;
				padding: 5px 10px 6px;
				color: #fff;
				text-decoration: none;
				font-weight: normal;
				line-height: 1;
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
				-moz-box-shadow: 0 1px 3px #999;
				-webkit-box-shadow: 0 1px 3px #999;
				text-shadow: 0 -1px 1px #222;
				border-bottom: 1px solid #222;
				position: relative;
				cursor: pointer;
				-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
				-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
				text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
				border-bottom: 1px solid rgba(0,0,0,0.25);
			}
			.mybutton:hover { 
				background-color: #007d9a;
				color: white;
			}
			.mybutton {
			 top: 1px;
			}

			.home{
				font:normal 26px arial;
				position:absolute;
				left:30px;
				top:80px;
				box-shadow:0px 0px 1px grey;
				background:#2daebf;
				color:white;
				padding:5px;
				-webkit-transition:background 1s,color 1s;
				-moz-transition:background 1s,color 1s;
				-box-transition:background 1s,color 1s;
			}
			.home:hover{
				background:rgba(255, 255,255,0.7);;
				color:grey;
			}
			#othersearches a:link {text-decoration:underline;color:blue;}      /* unvisited link */
			#othersearches a:visited {text-decoration:underline;color:blue;}  /* visited link */
			#othersearches a:hover {text-decoration:none;color:blue;}  /* mouse over link */
			#othersearches a:active {text-decoration:underline;color:blue;}  /* selected link */	
			li{
				list-style-type:none;	
				font:normal 17px arial;
				margin-top:3px;
			}	
		</style>
	</head>
	<body>
		<!-- headergoeshere -->
		
		
			
			<?php   


				include 'header.php';



				echo "<div id='studimages'  style='margin:80px;''>";			
			
				
				if(isset($_GET['view'])){
					$view = mysql_real_escape_string($_GET['view']);
					
					if($view!=""){
		
						$queryno = "SELECT * FROM fellowpopularitymeter WHERE userid='$view'";
						$querynorow = mysql_fetch_row(mysql_query($queryno));
						$ratehitpast = $querynorow[2];

						$ratehitnow = $ratehitpast+1;
			
						$queryhit = "UPDATE fellowpopularitymeter SET ratehit='$ratehitnow' WHERE userid='$view'";
						$queryrun = mysql_query($queryhit);
			
						$query = "SELECT * FROM fellowdata WHERE id='$view'";
						$result = mysql_query($query);
						$num = mysql_num_rows($result);


						if($num==0){

						   echo "Lools like you have entered a wrong url!!";

						}
						else{
							for($i=0;$i<$num;$i++){
				
								$row = mysql_fetch_row($result);
				
								$studentid = $row[0];
								$name = $row[1];
				
								$groupsclub = $row[8];
		
								$temp = explode(',',$groupsclub);
								
								$templen = count($temp);
								
								$url = getImageUrl($row[15],$row[9]);
				
								if(!$row[8]){$row[8] = 'Not Available';}
					
								if(!$row[4]){$row[4] = 'None';}
				
								$namelength = strlen($row[1]);
					
								if($namelength >= 22){
									$width = '190px';
								}
								elseif($namelength > 17 and $namelength<22){
									$width = '160px';
								}
								else{
									$width = '130px';
								}

								$hometown = rtrim($row[4]);
				
								$groups = explode(',',$row[8]);

								echo "<table align=center style='margin:10px auto;' cellspacing='5'>		
										<tr align=center>";
							
								echo "<a href='http://home.iitk.ac.in/~$row[16]' target='_blank'>
											<td id='imagebox' style='background:white;box-shadow:0px 0px 1px grey ;min-width:150px;margin-left:5px;width:260px;'>
												$url
											<p id='imagelayer'>$row[1]&nbsp;&nbsp;$row[9]</p>
							
											</td></a>";
							
							
								echo"<td style='padding:20px;padding-left:20px;width:400px;min-width:300px;text-align:left;background:white;box-shadow:0px 0px 1px grey ;margin:5px;'>";
									
							
								echo "<div id='variables' style=''>
										<li>Name</li><hr>
										<li>Roll No</li><hr>
										<li>Batch</li><hr>
										<li>Gender</li><hr>
										<li>Program</li><hr>
										<li>Department</li><hr>
										<li>IITK Address</li><hr>
										<li>Hometown</li><hr>
										<li>Email</li><hr>
										<li>Blood Group</li><hr>
									  </div>";
							
								echo "<div id='values'>
										<li>$row[1]</li><hr>
										<li>$row[9]</li><hr>
										<li>$row[2]</li><hr>
										<li>$row[5]</li><hr>
										<li>$row[11]</li><hr>
										<li>$row[3]</li><hr>
										<li>$row[17]</li><hr>
										<li>$row[4]</li><hr>
										<li><a href='mailto:$row[16]@iitk.ac.in' style='font-size:17px;text-decoration:none;'>$row[16]@iitk.ac.in</li></a><hr>
										<li>$row[12]</li><hr>
									  </div>";
								  
								  
								echo"</td>";
							
							
				
				
								echo"<td style='background:white;box-shadow:0px 0px 1px grey;padding:10px;min-width:260px;width:280px;'>";

								if ($row[15]==0) {
									$facebook = "https://www.facebook.com/search/results.php?q=$row[1]&type=users&ed=iit kanpur";
								}
								else{
									$facebook = "https://www.facebook.com/$row[15]";
								}

								
								echo "<ul align='left' style='margin-left:20px;'>
										<span style='font:normal 18px arial;'>Other related searches</span><br><hr><br>
										<li style='display:inline-block;'><a class='mybutton' href='groups.php?type=hometown&value=$row[4]' style='' ><b >$row[4]</b></a></li>
										<li style='display:inline-block;'><a class='mybutton' href='groups.php?type=department&value=$row[3]' style='' ><b >$row[3]</b></a></li>
									  	<li style='display:inline-block;'><a class='mybutton' href='groups.php?type=hall&value=$row[6]' style='' ><b >$row[6]</b></a></li>
									  	<li style='display:inline-block;'><a class='mybutton' href='groups.php?type=batch&value=$row[2]' style='' ><b >$row[2]</b></a></li>
									  	<li style='display:inline-block;'><a class='mybutton' href='#'><b >Group1</b></a></li>
									  	<li style='display:inline-block;'><a class='mybutton' href='#'><b >Group2</b></a></li>
									  	<li style='display:inline-block;'><a class='mybutton' href='#'><b >Group3</b></a></li>
									  	<li style='display:inline-block;'><a class='mybutton' href='#'><b >Group4</b></a></li>
									  </ul>";

								echo "<br><br><br><br><a href='$facebook' target='_blank' style='text-decoration:none;color:white;font-size:18px;'><div style='padding:6px;background:#003399;opacity:0.8;display:inline-block;padding-left:10px;padding-right:10px;'>f
							 </div></a>
							 <a href='https://plus.google.com/s/$row[1]/people' target='_blank' style='text-decoration:none;color:white;font-size:18px;'><div style='padding:6px;background:red;opacity:0.8;display:inline-block;padding-left:10px;padding-right:10px;'>
								g+
							 </div></a>
							 <a href='https://twitter.com/search?q=$row[1]&mode=users' target='_blank' style='text-decoration:none;color:white;font-size:18px;'>
							 <div style='padding:6px;background:#2daebf;opacity:0.8;display:inline-block;padding-left:10px;padding-right:10px;'>
								t
							 </div></a>
							 <a href='http://www.linkedin.com/vsearch/p?keywords=$row[1]' target='_blank' style='text-decoration:none;color:white;font-size:18px;'>
							 <div style='padding:6px;background:#007d9a;opacity:0.8;display:inline-block;padding-left:10px;padding-right:10px;'>
								in
							 </div></a>
							 ";


								
								
								echo"</td>";
						
								
									echo"</tr>";
						
						
								echo"</table>";
											
			}
			
			echo "	<br><br><br><h3 style='font:bold 24px franklin gothic book;font-variant:small-caps;'>Other related searches</h3><br><hr><br>";
			
			
					
			if($row[4]){	echo 	"<div id='othersearches' style='display:inline-block;margin:7px;'>	<a href='groups.php?type=hometown&value=$row[4]' style='' >Find other people from <b style='font:bold 18px arial;'>$row[4]</b></a></div>";}
			if($row[3]){	echo 	"<div id='othersearches' style='display:inline-block;margin:7px;'>	<a href='groups.php?type=department&value=$row[3]' style='' >Find  people from <b style='font:bold 18px arial;'>$row[3]</b></a></div>";}
			if($row[6]){	echo 	"<div id='othersearches' style='display:inline-block;margin:7px;'>	<a href='groups.php?type=hall&value=$row[6]' style='' >Find  people from <b style='font:bold 18px arial;'>$row[6]</b></a></div> ";}
			if($row[2]){	echo 	"<div id='othersearches' style='display:inline-block;margin:7px;'>	<a href='groups.php?type=batch&value=$row[2]' style='' >Find other people from <b style='font:bold 18px arial;'>$row[2]</b></a></div>";}
				
				
			if($templen>=1){
	for($i=0;$i<$templen-1;$i++){
	
		echo 		"<div id='othersearches' style='display:inline-block;margin:7px;'><a href='groups.php?view=$temp[$i]' style='' >Find other people from <b style='font:bold 18px arial;'>$temp[$i]</b></a></div>";
	
	}
		}		
	}
	}

}
		?>
			
			</div>
			
	</body>
</html>
