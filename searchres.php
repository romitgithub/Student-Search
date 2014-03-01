<html>
	<head>
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
         a:link {text-decoration:none;color:#007d9a;}      /* unvisited link */
         a:visited {text-decoration:none;color:#007d9a;}  /* visited link */
         a:hover {text-decoration:none;color:#007d9a;}  /* mouse over link */
         a:active {text-decoration:none;color:#007d9a;}  /* selected link */ 
	</style>
	<script type="text/javascript">
		 function focusOnInput()
			{
		 		document.getElementById("sname").focus();
		 	}
 </script>	
</head>
<?php


	include 'connect.inc.php';
	include 'header.php';

	if (isset($_GET['sname']) || isset($_POST['submitforface'])) {

		/*if (isset($_GET['sname']) and isset($_GET['roll']) and isset($_GET['city']) and isset($_GET['gender'])) {
			
			$name = mysql_real_escape_string($_GET['sname']);
			$roll = mysql_real_escape_string($_GET['roll']);
			$city = mysql_real_escape_string($_GET['city']);
			$gender = mysql_real_escape_string($_GET['gender']);
			$batch = mysql_real_escape_string($_GET['batch']);
			$program = mysql_real_escape_string($_GET['program']);
			$dept = mysql_real_escape_string($_GET['dept']);
			$hall = mysql_real_escape_string($_GET['hall']);
			$blood = mysql_real_escape_string($_GET['blood']);
			$email = mysql_real_escape_string($_GET['email']);
			$track = "";
		}*/

		if (isset($_POST['submitforface'])) {
		
			$name = mysql_real_escape_string($_POST['sname']);
			$roll = mysql_real_escape_string($_POST['roll']);
			$city = mysql_real_escape_string($_POST['city']);
			$gender = mysql_real_escape_string($_POST['gender']);
			$batch = mysql_real_escape_string($_POST['batch']);
			$program = mysql_real_escape_string($_POST['program']);
			$dept = mysql_real_escape_string($_POST['dept']);
			$hall = mysql_real_escape_string($_POST['hall']);
			$blood = mysql_real_escape_string($_POST['blood']);
			$email = mysql_real_escape_string($_POST['email']);
			$track = "";


		}
			if($name!=""){

				$nameQ = "(name='".$name."' or firstname='".$name."' or lastname='".$name."')";
				$track.= "1";
			}
			else{
				$nameQ = "";
				$track.="0";
			}

			if($roll!=""){

				if ($track=="0") {
					$rollQ = "roll='".$roll."'";
					$track.= "1";	
				}
				else{
					$rollQ = " and roll='".$roll."'";
					$track.= "1";	
				}
			}
			else{
				$rollQ = "";
				$track.="0";
			}

			if($city!=""){

				if ($track=="00") {
					$cityQ = "hometown='".$city."'";
					$track.= "1";		
				}
				else{
					$cityQ = " and hometown='".$city."'";
					$track.= "1";	
				}
			}
			else{
				$cityQ = "";
				$track.="0";
			}

			if($gender!=""){

				if ($track=="000") {
					$genderQ = "gender='".$gender."'";	
					$track.= "1";	
				}
				else{
					$genderQ = " and gender='".$gender."'";
					$track.= "1";	
				}
			}
			else{
				$genderQ = "";
				$track.="0";
			}

			if($batch!=""){

				if ($track=="0000") {
					$batchQ = "batch='".$batch."'";	
					$track.= "1";	
				}
				else{
					$batchQ = " and batch='".$batch."'";
					$track.= "1";	
				}
			}
			else{
				$batchQ = "";
				$track.="0";
			}

			if($program!=""){

				if ($track=="00000") {
					$programQ = "program='".$program."'";	
					$track.= "1";	
				}
				else{
					$programQ = " and program='".$program."'";
					$track.= "1";	
				}
			}
			else{
				$programQ = "";
				$track.="0";
			}

			if($dept!=""){

				if ($track=="000000") {
					$deptQ = "department='".$dept."'";	
					$track.= "1";	
				}
				else{
					$deptQ = " and department='".$dept."'";
					$track.= "1";	
				}
			}
			else{
				$deptQ = "";
				$track.="0";
			}

			if($hall!=""){

				if ($track=="0000000") {
					$hallQ = "hall='".$hall."'";	
					$track.= "1";	
				}
				else{
					$hallQ = " and hall='".$hall."'";
					$track.= "1";	
				}
			}
			else{
				$hallQ = "";
				$track.="0";
			}

			if($blood!=""){

				if ($track=="00000000") {
					$bloodQ = "blood='".$blood."'";	
					$track.= "1";	
				}
				else{
					$bloodQ = " and blood='".$blood."'";
					$track.= "1";	
				}
			}
			else{
				$bloodQ = "";
				$track.="0";
			}

			if($email!=""){

				if ($track=="000000000") {
					$emailQ = "email='".$email."'";	
					$track.= "1";	
				}
				else{
					$emailQ = " and email='".$email."'";
					$track.= "1";	
				}
			}
			else{
				$emailQ = "";
				$track.="0";
			}



			$query = "SELECT * FROM fellowdata WHERE ".$nameQ."".$rollQ."".$cityQ."".$genderQ."".$batchQ."".$programQ."".$deptQ."".$hallQ."".$bloodQ."".$emailQ." ORDER BY roll";
			$result = mysql_query($query);
			$num = mysql_num_rows($result);

			echo "<div id='serres' style='' align='center' >";
					
					if($num==1){
						
						$row = mysql_fetch_row($result);
						
						echo "<script>
						window.location = 'profile.php?view=$row[0]'
					</script>";
					
					}
					
					else if($num!=0 and $num !=1){
					
					echo "<div align='center' style='margin:50px;'>
                  <h3 style='margin-top:20px;padding:10px;background:#003399;opacity:0.6;color:white;font-size:28px;'>$num Results</h3>";

					for($i=0;$i<$num;$i++){
					
					$row = mysql_fetch_row($result);
					$title = "$row[1]\n$row[9]\n$row[3]";
					
					$url = getImageUrlFront($row[15],$row[9]);
					
					$namelength = strlen($row[1]);
					
					
					
					
					echo 
								"<div id='singleimage'  style='display:inline-block;margin:10px;margin-bottom:0px;background:white;box-shadow:0px 0px 2px grey;width:190px;'>
									<a href='profile.php?view=$row[0]'  title='$title' style='color:black;text-decoration:none;'>
										$url
										<div style='margin:0px auto;text-align:center;background:white;font-size:13px;font-weight:bold;'>$row[1]<br>$row[9]&nbsp;&nbsp;$row[3]</div>
									</a>
								 </div>";
				}
				
					echo "</div><br>";
					}
					elseif ($num==0 and $name!="") {
						$string1 = $name;
				
						$substr = substr($string1,0,1);
						
						$querysug = "SELECT * FROM fellowdata WHERE name LIKE '$substr%'";
						$results = mysql_query($querysug);
						$numres = mysql_num_rows($results);
						$namesarray = array();
						$similarityarray = array();
						$idarray = array();
						
						for($i=0;$i<$numres;$i++){
							$row = mysql_fetch_row($results);
							$names = explode(' ', $row[1]);
							$firstname = $names[0];
							$namesarray[$i] = $row[1];
							$idarray[$i] = $row[0];
							$similarity = similar_text($string1,$firstname,$result);
							$similarityarray[$i] = $result;
						}
						
						
						array_multisort($similarityarray,$namesarray,$idarray);
						
						echo "<p style='margin:30px;font:bold 20px arial;'>Sorry No results were found</p><br>
								<p style='margin-left:30px;color:blue;font-size:24px;'>Were you looking for one of these?</p>
							<hr><br><br>";
						
						echo "<div style='margin:30px;'>";
						
						
						for($i=$numres,$j=0;$j<11;$i--,$j++){
						
							if(isset($idarray[$i]) and isset($namesarray[$i])){
							echo "<div style='margin:6px;'><a href='profile.php?view=$idarray[$i]'  style='margin:15px;font-size:18px;'>$namesarray[$i]</a></div>";
						
							}
						}
					}


		}
		


?>
