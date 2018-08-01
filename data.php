<!DOCTYPE html>
<html>
<head>
	<title>user_data</title>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js
"></script>
	<style type="text/css">
		#detail{
			width: 500px;
			height: 400px;
			margin: 0px auto;
			box-shadow: 0px 0px 20px 0px #888888;
			padding-top: 100px;
			text-align: center;
			display: none;
		}
	</style>
</head>
<body>

	<select id="opr" name="opr">
		<option value="akash">akash</option>
		<option value="akshay">akshay</option>
		<option value="sumit">sumit</option>
		<option value="piyush">piyush</option>
		<option value="p999">piyush000</option>
	</select>
	<input type="button" id="mybtn" name="mybtn" value="Show Answer" />
	<div id="detail">
	<div>	
	<img id="image" alt="user_pic" style="width: 200px;
    height: 200px;">
	</div>
    <div id="name" style="text-align: center;"></div>
    <div id="age" style="text-align: center;"></div>
    <div id="work" style="text-align: center;"></div>
    </div>
    


    <script type="text/javascript">
		$(document).ready(function(){

	$("#mybtn").click(function() {

		$("#detail").show();
			//$("#opr").change(function() {
		//	alert("in js");
		var SITEROOT="myajax_data.php";
		//				alert (SITEROOT);
						var opr=$("#opr").val();
						
						//var opr="add";
						//alert(opr);
						$.ajax({
							type: "POST",
							url: SITEROOT, 
							data : "opr="+opr,
							dataType: 'json',
							success: function(data) {
								//alert(data);
								$("#name").html("Name: "+data.user);
								$("#age").html("Age: "+data.age);
								$("#work").html("Work: "+data.work);	
								$("#image").attr("src",data.img);				
							 }
							
						});

			});

});
</script>
</body>
</html>