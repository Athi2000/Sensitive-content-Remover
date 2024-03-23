<?php
      
     include 'config.php';
	 
	 if (isset($_POST['post'])){
		 
		 $Message=$_POST['message'];

      $sql = "INSERT INTO comments (Message)
      VALUES ('$Message')";

      if ($conn->query($sql) === TRUE) {
           
         } else {
           echo "Error: " . $sql . "<br>" . $conn->error;
               }
	 } 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devce-width,initial-scale=1.0">
    <title>IT 1134</title>
    <link rel="stylesheet" href="1134.css">
</head>
<style>

     .content{
	height:180px;
	border:2px solid black;
	margin-bottom:12px;
	}
  
   .comment button{
	float:right;
	font-size:25px;
	background-color:#061046;
	color:white;
	margin-right:12px;
	}
	
	.comment form textarea{
	   border-radius:12px;
	   margin:12px;
	}
	
	

</style>
<body>

<header>
    <h2 class="logo">Logo</h2>
    <nav class="navigation">
        <a href="Home.html">Home</a>
        <a href="aboutus.html">About</a>
        <a href="Courses.html">Courses</a>
        <a href="contactus.html">Contact us</a>

    </nav>
</header>
            
   <div class="body1">
      <div class="topic">
	  
	  </div>
	  
	  <div class="content">
	  
	  </div>
	
	    <div class="comment">
		    <div class="comment1">
			
	    <?php 
		$sql="SELECT * FROM comments";
		$result=$conn->query($sql);
		
		if($result->num_rows>0){
			while ($row=$result->fetch_assoc()){
				?>
				
				<p><?php echo $row['Message']; ?></p>
				
		<?php } } ?>
			
		
	         </div>
			 
			<form action="" method="post">
			    <textarea name="message" rows="2" cols="160" placeholder="Type your comment here...."></textarea>
				<br/>
				<button type="submit" class="button button1" name="post">Post</button>
			</form>	
		</div>
    </div>


</body>
</html>