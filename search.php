<?php // search.php 

include_once 'connect.inc.php';




if (isset($_POST['search'])) {    
		$search = mysql_real_escape_string($_POST['search']);  

		
			$query = "SELECT * FROM fellowdata WHERE name LIKE '$search%' or firstname LIKE '$search%' or lastname LIKE '$search%'";
			$result = mysql_query($query);
			$num = mysql_num_rows($result);
		
		
		
		
		if($num){

	
			echo "<h1 style='background:white;color:black;margin-bottom:20px;box-shadow:0px 0px 1px grey;'>Search Suggestions</h1>";
			
				   for($j=0;$j<$num;++$j){
				   
							$row = mysql_fetch_row($result);
							$title = "$row[1]\n$row[2]";
							$url = getImageSuggest($row[15],$row[9]);
					
					
							
							echo 
								"<div id='singleimage'  style='display:inline-block;margin:10px;background:white;box-shadow:0px 0px 2px grey;width:130px'>
									<a href='profile.php?view=$row[0]'  title='$title' style='color:black;text-decoration:none;'>
										$url<hr style='margin-top:0px;'>
										<div style='margin:0px auto;background:white;font-size:13px;'>$row[1]<br>$row[9]&nbsp;&nbsp;$row[3]</div>
									</a>
								 </div>";
				   
				   }
				   echo "";

}

}				   
?> 
