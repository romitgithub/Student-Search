<html>
	<head>
		<style>

	#searchform{
				margin:0px;
				margin-top:30px;
				box-shadow: 0px 0px 6px black;
			}
			input{
				padding:6px;
				margin-left:20px;
				background: white;
			}
			select{
				padding:6px;
				margin-left:20px;
				margin-top: 10px;
				background: white;
			}
			input{
				margin-top:10px;
				
			}
			input,select{
	padding:2px;
	background-color: #FFF;
	border: 1px solid #ccc;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-moz-box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
	-webkit-transition: border linear .2s, box-shadow linear .2s;
	-moz-transition: border linear .2s, box-shadow linear .2s;
	-o-transition: border linear .2s, box-shadow linear .2s;
	transition: border linear .2s, box-shadow linear .2s;
	height: 28px;
	padding: 4px 6px;
	font-size: 14px;
	line-height: 22px;
	color: #555;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	margin:5px;

}
input:focus{
}
.btn{
	padding: 4px 12px;
	margin-bottom: 0px;
	font-size: 14px;
	line-height: 20px;
	color: #333;
	text-align: center;
	text-shadow: 0 1px 1px rgba(255,255,255,.75);
	vertical-align: middle;
	cursor: pointer;
	background-color: #f5f5f5;
	border: 1px solid #ccc;
	border-color: rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);
	border-bottom-color: #b3b3b3;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	-moz-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
	-box-shadow: inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);
}

	</style>
	<script type="text/javascript">
		 function focusOnInput()
			{
		 		document.getElementById("sname").focus();
		 	}
 </script>	
</head>
<body onload="focusOnInput()">
	<div id="searchform"  align="center" style='margin-top:0px;padding-top:20px;background:white;'>
				
				<a href="index.php"><h2 class='home' style="margin-top:0px;">Home</h2></a>

				
				<form align="center" method="post" action="searchres.php" style='background:white;'>
					<input type="text" name="sname" placeholder="Name of student" autofocus autocomplete='off' onKeyUp="result(this)">
					<input type="text" name="roll" placeholder="Roll No" ">
					<input type="text" name="city" placeholder="City" >
					<select name="gender">
						<option value="">Gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<select name="batch">
					<option value="">Batch</option>
						<option value="y11">Y11</option>
						<option value="y12">Y12</option>
						<option value="y13">Y13</option>
					</select>
					<select name="program">
						<option value="">Program</option>
						<option value='BTech'>BTech</option>
						<option value='MTech'>MTech</option>
						<option value='BS'>BS</option>
						<option value='MSc(2 yr)'>MSc(2 yr)</option>
						<option value='PhD'>PhD</option>
						<option value='PhD(Dual)'>PhD(Dual)</option>
						<option value='MDes'>MDes</option>
						<option value='MBA'>MBA</option>
					</select>
					<select name="dept">
						<option value="">Dept</option>
						<option value="EE">EE</option>
						<option value="CSE">CSE</option>
						<option value="MSE">MSE</option>
						<option value="BSBE">BSBE</option>
						<option value="ME">ME</option>
						<option value="CE">CE</option>
						<option value="CHE">CHE</option>
						<option value="MTH">MTH</option>
						<option value="CHM">CHM</option>
						<option value="ECO">ECO</option>
						<option value="MDes">MDes</option>
						<option value="STATISTICS">STATISTICS</option>
						<option value="HSS">HSS</option>
						<option value="Nuclear Engg.">Nuclear Engg.</option>
						<option value="LASER Technology">LASER</option>
						<option value="MSP">MSP</option>
						<option value="IME">IME</option>
					</select>
					<select name="hall">
						<option value="">Hall</option>
						<option value="Hall 1">Hall 1</option>
						<option value="Hall 2">Hall 2</option>
						<option value="Hall 3">Hall 3</option>
						<option value="Hall 4">Hall 4</option>
						<option value="Hall 5">Hall 5</option>
						<option value="Hall 6">Hall 6</option>
						<option value="Hall 7">Hall 7</option>
						<option value="Hall 8">Hall 8</option>
						<option value="Hall 9">Hall 9</option>
						<option value="Hall 10">Hall 10</option>
						<option value="Hall 11">Hall 11</option>
						<option value="GH">GH</option>
						<option value="Hall 6">GH Tower</option>
					</select>
					<select name="blood">
						<option value="">Blood Group</option>
						<option value="A&#43;">A+</option>
						<option value="A&#45;">A-</option>
						<option value="B&#43;">B+</option>
						<option value="B&#45;">B-</option>
						<option value="AB&#43;">AB+</option>
						<option value="AB&#45;">AB-</option>
						<option value="O&#43;">O+</option>
						<option value="O&#45;">O-</option>
					</select>
					<input type='text' name='email' placeholder='Email'>
					<br>
					<input type="submit" name="submitforface" value="Search the Face" style="background:#007d9a;color:white;border:1px solid #007d9a;cursor:pointer;margin-top:20px;box-shadow:0px 0px 5px grey;border-bottom-right-radius:12px;
					border-top-left-radius:12px;">
				</form>
			<br>
			</div>
		</body>
		</html>
