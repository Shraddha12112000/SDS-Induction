<?php
	$mobile_number_error	=	"";
	$rating_error			=	"";
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$full_name		=	$_POST['user_name'];
		$mis            =   $_POST['user_mis'];
		$mobile_number	=	$_POST['mobile_number'];
		$email_id		=	$_POST['email_id'];
		$gender			=	$_POST['gender'];
		$select_rating1 =   $_POST['select_rating1'];
		$select_rating2  =   $_POST['select_rating2'];
		$select_rating3 =   $_POST['select_rating3'];
		$select_rating4  =   $_POST['select_rating4'];
        $select_rating5  =   $_POST['select_rating5'];
		$user_message   =   $_POST['user_message'];	
      $servername = "localhost";
      $username = "root";
      $password = "";
      $db = "feedb";
      $connection = mysqli_connect($servername,$username,$password,$db);
      if(!$connection){
        die("Sorry! we failed to connect: ".mysqli_connect_error());
      }
      else{
		$query= "INSERT INTO 'feedb-form'(`user_name`, `user_mis`, `mobile_number`, `email_id`,
		 `gender`, `select_rating1`, `select_rating2`, `select_rating3`, `select_rating4`,
		  `select_rating5`, `user_message`) VALUES ('$full_name','$mis','$mobile_number',
		 '$email_id','$gender','$select_rating1','$select_rating2','$select_rating3',
		 '$select_rating4','$select_rating5','$user_message')";
		$query_run = mysqli_query($connection,$query);
		if(($query_run))
        {
            echo 'Thank you for your feedback. We\'ll appreciate!';
        }
        else
        {
            echo 'Data not saved , Please try again!!';
        }
		if(strlen($mobile_number)!=10)
		{
			$mobile_number_error	=	"Please enter 10 digit mobile number";
			
		}
		
		if($select_rating1=="Select Rating" or $select_rating2=="Select Rating" or
		$select_rating3=="Select Rating" or $select_rating4=="Select Rating" or
		$select_rating5=="Select Rating")
		{
			$rating_error	=	"Please select rating";
		}
	
	}
}
	?>
<html>
<head>
  	<title> SDS Feedback Portal</title>
    <link rel="stylesheet" type="text/css" href="css/web_design.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-utilities.css" />
	
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>	
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>	
	<script type="text/javascript" src="bootstrap/js/bootstrap.esm.js"></script>
</head>
<body>

	<?php
		include('header.php');
	?>
	
	<div class="web_body">
		
		<form action="feedback-form.php" method="POST" enctype="multipart/form-data">
		<div class="feedback_form_contnr">
			
			<!--<img src="images/feed.png" class="feedback_img" />-->
		
			<h1 class="main_title">Feedback Form</h1>
			
			<hr />
			
			<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

		
</div>			
         <label class="lbl_dsgn">Enter Your Name :</label>
         <br />
         <input type="text" name="user_name" class="txtbx" placeholder="Full Name" value="" required />
                    
         <br />
         <label class="lbl_dsgn">Enter Your MIS :</label>
         <br />
         <input type="number" name="user_mis" class="txtbx" placeholder="MIS" value="" required />
                    
         <br />
                    
         <label class="lbl_dsgn">Enter Mobile Number :</label>
         <br />
         <input type="number" name="mobile_number" class="txtbx" placeholder="Mobile Number" required />
                    
         <br />
                    
         <label class="lbl_dsgn">Enter Email ID : </label>
         <br />
         <input type="email" name="email_id" required class="txtbx" placeholder="Email ID" />
                    
         <br />
         <label class="lbl_dsgn">Select Gender</label>
         <input type="radio" name="gender" value="Male" checked />Male
         <input type="radio" name="gender" value="Female" />Female
                    
         <br />
                    
         <label class="lbl_dsgn"> How was course content covered:</label>
         <br />
        <select name="select_rating1" class="txtbx">
         <option value="Select Rating">Select Rating</option>
         <option value="service_1">Excellent</option>
         <option value="service_2">Very Good</option>
         <option value="service_3">Good</option>
         <option value="service_4">Bad</option>
         <option value="service_5">Very Bad</option>
         </select>
                    
         <br />
         <label class="lbl_dsgn"> How was the Course content covered in Online mode:</label>
         <br />
         <select name="select_rating2" class="txtbx">
         <option value="Select Rating">Select Rating</option>
         <option value="service_1">Excellent</option>
         <option value="service_2">Very Good</option>
         <option value="service_3">Good</option>
         <option value="service_4">Bad</option>
         <option value="service_5">Very Bad</option>
         </select>
                    
         <br />
         <label class="lbl_dsgn"> How much you can relate the concepts to real world problem solving:</label>
         <br />
         <select name="select_rating3" class="txtbx">
         <option value="Select Rating">Select Rating</option>
         <option value="service_1">Excellent</option>
         <option value="service_2">Very Good</option>
         <option value="service_3">Good</option>
         <option value="service_4">Bad</option>
         <option value="service_5">Very Bad</option>
         </select>
                    
         <br />
         <label class="lbl_dsgn"> How much you are confident about the course:</label>
         <br />
         <select name="select_rating4" class="txtbx">
         <option value="Select Rating">Select Rating</option>
         <option value="service_1">Excellent</option>
         <option value="service_2">Very Good</option>
         <option value="service_3">Good</option>
         <option value="service_4">Bad</option>
         <option value="service_5">Very Bad</option>
         </select>
                    
         <br />
         <label class="lbl_dsgn"> How much likely you will recommend this Course :</label>
         <br />
         <select name="select_rating5" class="txtbx">
         <option value="Select Rating">Select Rating</option>
         <option value="service_1">Excellent</option>
         <option value="service_2">Very Good</option>
         <option value="service_3">Good</option>
         <option value="service_4">Bad</option>
         <option value="service_5">Very Bad</option>
         </select>
                    
         <br />
                    
         <label class="lbl_dsgn">Any suggesions to improve course content : </label>
         <br />
         <textarea name="user_message" required class="txtbx" placeholder="Enter Message"></textarea>
                    
                     
		 <input type="submit" name="submit_btn" class="submit_btn" value="Submit Feedback" />
			
		 <br />
			
		</div>
		</form>
		
	</div>
	
	<?php
		include('footer.php');
	?>

</body>
</html>
