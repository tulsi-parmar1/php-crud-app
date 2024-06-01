<html>
<head>
<style type="text/css">
  *
  {
    font-family:  Helvetica;
  }
	.formm
	{
		display: flex;
		justify-content: center;
		margin-top: 90px;
    margin-left:-240px;
	
	}
  .g
  {
    width:200px;
    height:30px;
    padding-left:10px;
    font-size: 15px;
    margin-left:10px;
    border-radius: 10px;
    margin-top:10px;
    margin-left:-5px;
    margin-bottom: 20px;
  }
	.formm .abc
	{
		width:200%;
		margin-top: 20px;
		margin-bottom: 20px;
		border-radius: 10px;
		height:30px;
		padding-left: 20px;
    border:none;
    border:2px solid gray;
	}
	.btn
	{
		width:150px;
		height:40px;
    border-radius: 10px;
    background-color:gray;
    border:none;
    background-color: #4169e1;
    color:white;
    font-size: 15px;
	}
	.btn:hover
	{
		background-color:#6495ed;
		cursor: pointer;
	
	}
</style>
 </head>
 <body>
 <div class="formm">  
<form action="" method="POST">
  <label>Name:</label><br>
  <input type="text" name="name" id="name" class="abc" autocomplete="off" spellcheck="false"><br>
   <label>Last Name:</label><br>
   <input type="text" name="lastname" class="abc" autocomplete="off" id="lastname" spellcheck="false"><br>

   Gender:<br><select name="gender" class="g">
    <option value="">Select</option>
    <option>Male</option>
    <option>Female</option>
   </select><br>
   Email:<br>
   <input type="email" class="abc" name="email"  autocomplete="off" id="email" spellcheck="false" placeholder="xyz@gmail.com"><br>
   <br>
   <input type="submit" name="submit" class="btn" id="submit">
    </form>
</div>
   <?php
    // connection
   $conn=mysqli_connect("localhost","root","","riddhi");
   if($conn==false)
   {
   	  die("connection failed!".mysqli_connect_error());

   }
 // insert
   if(isset($_POST['submit']))
   {
   	$name=$_POST['name'];
   	$lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
   	if($_POST['name']!='' && $_POST['lastname']!='' && $_POST['gender']!='' && $_POST['email']!='')
   	{
   		$sql2="insert into tbl(name,lastname,gender,email) values('$name','$lastname','$gender','$email')";
   		mysqli_query($conn,$sql2);		
   	}
   }
   // select record
     include("display.php");
   ?>
</body>
</html>