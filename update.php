<?php
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","riddhi");
     if($conn==false)
    {
   	  die("connection failed!".mysqli_connect_error());

    }
   $sql="select * from tbl where id='$id'";
   $result=mysqli_query($conn,$sql);
   $no=mysqli_num_rows($result);
   $row=mysqli_fetch_assoc($result);
   if(isset($_POST['update']))
   {
    $editname=$_POST['updatename'];
    $editlastname=$_POST['updatelastname'];
    $editgender=$_POST['updategender'];
    $editemail=$_POST['updateemail'];
    $sql2="update tbl set name='$editname',lastname='$editlastname',gender='$editgender',email='$editemail' where id=$id";
   if(mysqli_query($conn,$sql2))
   {
        header("Location:finally.php");
   }
   else
   {
   	echo 'no';
   }
   }
   
?>
<html>
<body>
	<head>
		<style>
      *
      {
         font-family:  Helvetica;
      }
		.formm
	    {
		display: flex;
		margin-left:500px;
		margin-top: 100px;
		width:50%;

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
	.up
	{
		width:150px;
		height:40px;
        border-radius: 10px;
        background-color: #4169e1;
      border:none;
       font-size: 15px;
       color:white;
	}
	.up:hover
	{
		background-color:#6495ed;
		cursor: pointer;
	}
  .g{
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
</style>
	</head>
	<div class="formm">
	<form action="" method="POST">
    <h1 >UPDATE FORM</h1><br>
		 <label>Name:</label><br>
  <input type="text" name="updatename" id="updatename" class="abc" autocomplete="off" value="<?php echo $row['name']?>" spellcheck="false"><br>
   <label>Last Name:</label><br>
   <input type="text" name="updatelastname" class="abc" autocomplete="off" spellcheck="false" id="updatelastname" value="<?php echo $row['lastname']?>" ><br>
     Select:<br><select name="updategender" required class="g">
            <option value="">Select</option>
            <option value="male" <?php if($row['gender'] == 'male') echo 'selected'; ?> >Male</option>
            <option value="female" <?php if($row['gender'] == 'female') echo 'selected'; ?> >Female</option>
        </select><br>
        Email:<br><input type="email" name="updateemail"  class="abc" autocomplete="off" spellcheck="false" id="updateemail" value="<?php echo $row['email']?>"><br>
   <br>
   <input type="submit" name="update" class="up" value="update">
	</form>
</div>
</body>
</html>
