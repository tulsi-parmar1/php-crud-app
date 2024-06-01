<html>
<head>
   <style>

table
   {
      margin-top:30px;
       border-collapse: collapse;
       margin-left:400px;
      
   }
   table,th,td{
      border:1px solid black;
   }
   th
   {
      height:30px;
   }
   table{
      width:800px;
      height:20px;
   }
   td{
       padding:10px;
    }
    .btnn
    {
      background-color: #006400 ;
      color:white;
      text-decoration: none;
      font-size: 15px;
      border-radius: 10px;  
      border:none;
      width:100px;
      height:30px;
    }
    .btnn:hover
    {
      cursor:pointer;
      background-color:#228b22; 
    }
    .btnn2
    {
      background-color:#860111 ;
      color:white;
      text-decoration: none;
      font-size: 15px;
      border-radius: 10px;  
      border:none;
      width:100px;
      height:30px;
    }
    .btnn2:hover
    {
      cursor:pointer;
      background-color:#b31b1b; 
    }

 </style>
</head>
</html>
<?php
   $sql="select * from tbl";
   $result=mysqli_query($conn,$sql);
   $no=mysqli_num_rows($result);
   if($no>0)
   {
        $noo=1;
   	    echo '<table>';
   	    echo '<th>ID</th>'.'<th>Name</th>'.'<th>LastName</th>'.'<th>Gender</th>'.'<th>Email</th>'.'<th>Action</th>';
   	    while($row=mysqli_fetch_assoc($result))
   	    {
   	    	echo '<tr>';
   	    	echo '<td>';
   	    	echo $noo;
   	    	echo '</td>';
   	    	echo '<td>';
   	    	echo $row['name'];
   	    	echo '</td>';
   	    	echo '<td>';
   	    	echo $row['lastname'];
   	    	echo '</td>';
          echo '<td>';
          echo $row['gender'];
          echo '</td>';
          echo '<td>';
          echo $row['email'];
          echo '</td>';
   	    	echo '<td>';
          echo "<a href='update.php?id=".$row["id"]."'><input class='btnn' type='button' value='Edit'></a><span style='margin-right: 15px;'></span><a class='btn2' href='delete.php?id=".$row["id"]."'><input class='btnn2' type='button' value='Delete'></a>";
   	    	echo '</td>';
   	    	echo '</tr>';
          $noo +=1;
   	    }
   	     echo '</table>';
   }
   ?>