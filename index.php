<?php 

	include "connect.inc.php";

?>
<html>
	<head>
		<title>Faceit</title>
		<script>

		<?php 

			include 'ajax.js';

		?>

</script>
		<style>
			*{
				margin:0px;
				padding:0px;
				font:normal 14px arial;
			}
			
			h1{
				padding:10px;
				padding-left:50px;
				font:normal 36px arial;
				background:#003399;
				color:white;
			}
			img{
				border: none;
			}
			a{
				text-decoration:none;
			}
			a:hover{
				text-decoration:underline;
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
			.newdes{
				font:normal 26px arial;
				position:absolute;
				right:30px;
				top:80px;
				box-shadow:0px 0px 1px grey;
				background:#2daebf;
				color:white;
				padding:5px;
				-webkit-transition:background 1s,color 1s;
				-moz-transition:background 1s,color 1s;
				-box-transition:background 1s,color 1s;
			}
			.newdes:hover{
				background:rgba(255, 255, 255,0.7);;
				color:grey;
			}
			a:link {text-decoration:none;}      /* unvisited link */
			a:visited {text-decoration:none;}  /* visited link */
			a:hover {text-decoration:none;}  /* mouse over link */
			a:active {text-decoration:none;}  /* selected link */ 
		</style>
	</head>
	<body>
		<!-- headergoeshere -->
		
	
		
			
			<?php   


				include 'header.php';

			 ?>
			

		<div id='info'  style='position:absolute;z-index:1;background:#EEEEEE;box-shadow:-10px 10px 15px black;min-width:100%;' align='center'></div>
		
		<table align="center" style='margin:0px auto;'>
			<tr>
		
			<div id="studimages"  style="margin:52px;width:680px;display:inline-block;margin-top:20px;">
				
			<?php 
			
				$querymsp = "SELECT * FROM fellowpopularitymeter ORDER BY ratehit DESC";
				$resultmsp = mysql_query($querymsp);
				$nummsp = mysql_num_rows($resultmsp);
				
				for($i=0;$i<$nummsp and $i<24;$i++){
					
					$rowmsp = mysql_fetch_row($resultmsp);
					$query = "SELECT * FROM fellowdata WHERE id='$rowmsp[1]'";
				$result = mysql_query($query);
					
				$row = mysql_fetch_row($result);
				
				$url = getImageUrlFront($row[15],$row[9]);
					
					$title = "$row[1]\n$row[2]\n$row[3]";
					echo "<a href='profile.php?view=$row[0]' title='$title'>$url</a>"; 
			
				}
			
				
			
			?>
			
			</div>
			<div id="groups" style="display:inline-block;margin:52px;" align="center">
				<h2 style="font:normal 30px arial;text-align:center;">Find People from Different Clubs</h2>
			<hr>
				<p style="text-align:center;margin-top:50px;margin-bottom:50px;"><span style="font-size:17px;">
					<a href="groups.php?view=aeromodelling"><span style="font-size:18px;">Aeromodelling</span></a><br>
					<a href="groups.php?view=music" style="color:violet;"><span style="font-size:21px;">Music</span></a>&nbsp;
					<a href="groups.php?view=brain" style="color:green;"><span style="font-size:21px;">Brain</span></a>&nbsp; 
					<a href="groups.php?view=electronics" style="color:red;"><span style="font-size:24px;">Electronics</span></a> 
					<br>
					<a href="groups.php?view=badminton" style="color:lightgreen;"><span style="font-size:20px;">Badminton</span></a> &nbsp;
					<a href="groups.php?view=programming" style="color:blue;"><span style="font-size:22px;">Programming</span></a>&nbsp; 
					<a href="groups.php?view=business" style="color:green;"><span style="font-size:17px;">Business</span></a>
					<br>
					<a href="groups.php?view=rubik's cube" style="color:green;"><span style="font-size:18px;" >Rubik's Cube</span></a>&nbsp;
					<a href="groups.php?view=athletics" style="color:magenta;"><span style="font-size:23px;">Athletics</span></a>&nbsp;
					<a href="groups.php?view=swimming" style="color:green;">Swimming</a>&nbsp;
					<a href="groups.php?view=robotics" style="color:black;"> <span style="font-size:19px;">Robotics</span></a>
					<br>
					<a href="groups.php?view=cricket" style="color:orange;"><span style="font-size:22px;">Cricket</span></a>&nbsp;
					<a href="groups.php?view=table tennis" style="color:green;">Table Tennis</a>&nbsp;
					<a href="groups.php?view=weightlifting" style="color:pink;"><span style="font-size:22px;">Weight Lifting</span></a>&nbsp;
					<a href="groups.php?view=squash" style="color:red;"><span style="font-size:22px;">Squash</span></a>
					<br>
					<a href="groups.php?view=science coffee house" style="color:red;"><span style="font-size:17px;">Science Coffee House</span></a>&nbsp;
					<a href="groups.php?view=football" style="color:lightblue;"><span style="font-size:24px;">Football</span></a>&nbsp;
					<a href="groups.php?view=hockey" style="color:green;"><span style="font-size:20px;">Hockey</span></a>
					<br>
					<a href="groups.php?view=photography" style="color:indigo;"><span style="font-size:21px;">Photography</span></a>&nbsp;
					<a href="groups.php?view=fmc" style="color:blue;"><span style="font-size:22px;">FMC</span></a>&nbsp;
					<a href="groups.php?view=taekwando" style="color:brown;"><span style="font-size:24px;">Taekwando</span></a>
					<br>
					<a href="groups.php?view=basketball" style="color:orange;"><span style="font-size:21px;">Basketball</span></a>&nbsp;
					<a href="groups.php?view=volleyball" style="color:lightblue;"><span style="font-size:21px;">Volleyball</span></a>&nbsp;
					<a href="groups.php?view=fine arts" style="color:red;"><span style="font-size:21px;">Fine Arts</span></a>&nbsp;
					<br>
					<a href="groups.php?view=dance" style="color:indigo;"><span style="font-size:28px;">Dance</span></a>&nbsp;
					<a href="groups.php?view=skating" style="color:pink;"><span style="font-size:18px;">Skating</span>&nbsp;
					<a href="groups.php?view=els" style="color:blue;"><span style="font-size:23px;">ELS</span></a>
					<br>
					<a href="groups.php?view=dramatics" style="color:green;"><span style="font-size:26px;">Dramatics</span></a>&nbsp;
				</p>
			<hr>
			<h2 style="font:normal 30px arial;text-align:center;">And different Sports too!!!</h2>
			</div>
			</tr>
			</table>

			<table>
				<tr>
					<p style='background:white;box-shadow:0px 0px 10px grey;padding:10px;text-align:center;font-weight:bold;' >Designed and Developed By <a href="http://www.facebook.com/choudharyromit" target='_blank' style='text-decoration:underline;'>Romit Choudhary</a></p>
				</tr>
			</table>
	</body>
</html>
