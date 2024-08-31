<?php
    $insert = false;
    if(isset($_POST['name'])){
        $server = "localhost";
        $username = "root";
        $password = "";
    
        $con = mysqli_connect($server, $username, $password);
    
        if(!$con){
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        // echo "Success connecting to the db";
        $name = $_POST['name'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $school = $_POST['school'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $whatsapp = $_POST['whatsapp'];
        $backup = $_POST['backup'];
        $dob = $_POST['dob'];
        $std = $_POST['std'];
        $duration = $_POST['duration'];
        $sql = "INSERT INTO `jnm`.`classes` (`name`, `address`, `city`, `state`, `school`, `email`, `phone`, `whatsapp`, `backup`, `dob`, `std`, `duration`) VALUES (`$name`, `$address`, `$city`, `$state`, `$school`, `$email`, `$phone`, `$whatsapp`, `$backup`, `$dob`, `$std`, `$duration`);";
        // echo $sql;
        // INSERT INTO `trip`.`airplane` (`Name`, `Age`, `Gender`, `Email`, `Phone`, `From`, `To`, `Departure`, `Class`, `Date_time`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$from', '$to', '$departure', '$class', current_timestamp());
    
        if($con->query($sql) == true){
            $insert = true;
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
    
        $con->close();
        
    }
?>







<html>
<head>
	<title>JNM.com</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
<style>
	div {
  	background-color: bisque;
 	width: 500px;
  	border: 25px solid goldenrod;
  	padding: 100px;
  	margin-left:450px;
	margin-right:350px;
	padding-top:30px;
	padding-right:30px;
	padding-bottom:50px;
}
.btn{
    padding: 6px 20px;
    border: 2px solid white;
    background-color: goldenrod;
    color: white;
    margin: 17px;
    font-size: 1.5rem;
    border-radius: 10px;
    cursor:pointer;
}
</style>
</head>
<body bgcolor="bisque">
<img src="WP_image-removebg-preview.png" alt="Not Found" width="100" height="80">
<script>
	function form()
	{
		var a = document.getElementById("name").value;
		var b = document.getElementById("address").value;
        var c=document.getElementById("city").value;
        var d=document.getElementById("state").value;
		var e=document.getElementById("school").value;
		var f=document.getElementById("gmail").value;
		var h=document.getElementById("phone").value;
		var i=document.getElementById("whatsappno").value;
		var j=document.getElementById("backup").value;
		var k=document.getElementById("dob").value;
		var l=document.getElementById("std").value;
		var m=document.getElementById("duration").value;
		var n=document.getElementById("payment").value;
		if(a == " ")
		{
            alert("Name cannot be blanked");
		}
        if(a.length<10)
        {
            alert("Name cannot be greater than 10 Letters.");
            return false;
        }
        if(b=" ")
        {
            alert("Address cannot be blanked");
            return false;
		}
		if(b.length<150)
        {
            alert("Address cannot be greater than 150 Letters.");
            return false;
        }
        if(c=="")
        {
            alert("Invalid");
            return false;
		}
        if(d=="")
        {
    	   alert("Invalid");
            return false;
		}
		if(e=="")
		{
			alert("Enter school name");
			return false;
		}
		if(e.length<50)
        {
            alert("School name cannot be greater than 50 Letters.");
            return false;
        }
		if(f=="")
		{
			alert("Enter your Gmail-id");
			return false;
		}
		if(h=="")
		{
			alert("Phone number cannot be blanked");
			return false;
		}
		if(h.length<11)
        {
            alert("Phone number cannot be greater than 10 numbers.");
            return false;
        }
		if(h.length>9)
        {
            alert("Phone number cannot be less than 9 numbers.");
            return false;
        }
		if(i=="")
		{
			alert("Whatsapp number cannot be blanked");
			return false;
		}
		if(i.length<11)
        {
            alert("Whatsapp number cannot be greater than 10 numbers.");
            return false;
        }
		if(i.length>9)
        {
            alert("Whatsapp number cannot be less than 9 numbers.");
            return false;
        }
		if(j=="")
		{
			alert("Backup number cannot be blanked");
			return false;
		}
		if(j.length<11)
        {
            alert("Backup number cannot be greater than 10 numbers.");
            return false;
        }
		if(j.length>9)
        {
            alert("Backup number cannot be less than 9 numbers.");
            return false;
        }
		if(l=="")
		{
			alert("Select any STD");
			return false;
		}
		if(m=="")
		{
			alert("Select Duration of Time");
			return false;
		}
		if(n=="")
		{
			alert("Select Payment method");
			return false;
		}
	}
</script>
	<div>
<form  onsubmit="return form()">
<h4>Name : <input type="text" id="name" value="" required></h4>
<h4>Address : <br><textarea id="address" name="" rows="4" cols="45" required></textarea></h4>
<h4>City : <input type="text" placeholder="City" id="city" value="" required></h4>
<h4>State : <input type="text" placeholder="State" id="cge" value="" required></h4>
<h4>School name : <input type="text" placeholder="School name" id="state" value="" required></h4>
<h4>Your Email id : <input type="text" placeholder="Gmail" id="email" value="" required></h4>
<h4>Phone no : <input type="text" placeholder="Phone no" id="phone" value="" required></h4>
<h4>Whatsapp no : <input type="text" placeholder="Whatsapp no" id="whatsapp" value="" required></h4>
<h4>Backup no : <input type="text" placeholder="Backup no" id="backup" value="" required></h4>
<h4>D.O.B : <input type="date" placeholder="Date of Birth" id="dob" value="" required></h4>
<h4>STD : <!dropdownlist>
<select size="1">
<option></option>
<option>Std 10</option>
<option>Std 12</option>
</select></h4>
<h4>Duration : <!dropdownlist>
<select size="1">
<option></option>
<option>3 Months</option>
<option>6 Months</option>
<option>9 Months</option>
<option>12 Months</option>
</select></h4>
<h4>Payment Method : <!dropdownlist>
<select size="1">
<option></option>
<option>UPI Payment</option>
<option>Credit Card</option>
<option>Debit card</option>
<option>Net Banking</option>
<option>Bank Transfer</option>
<option>Master Card</option>
</select>
</h4>
<center>
	<input type="submit" value="Submit">Submit</button>
	<a href="10_12.html" target="new"><button class="btn" type="button">Next</button></a>
</center>
</div>
</form>
</body>
</html>