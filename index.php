
<!-- creating a contact form; -->
<?php 
	if (isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
		echo $contact_name = $_POST['contact_name'];
		echo $contact_email =$_POST['contact_email'];
		echo $contact_text = $_POST['contact_text'];
		if (!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
			$to = '1376342485@qq.com';
			$subject = 'contact form the submitted';
			$body = $contact_text;
			$headers = 'from:'.$contact_email;
			if (mail($to, $subject, $body, $headers)) {
				echo 'thanks for contact';
			} else {
				echo 'sorry, an error occured.';
			}
 		} else {
			echo 'all fileld is required';
		}
	} else {
		echo 'some fild not set.';
	}

 ?>

 <form action="index.php" method="POST">
 	Name: <br><input type="text" name="contact_name"><br><br>
 	Email address: <br><input type="text" name="contact_email"><br><br>
 	Message: <br>
 	<textarea name="contact_text" rows="6" col="30" >
		 		
 	</textarea><br>
 	<input type="submit" value="submit">
 </form>

 <!-- an introduct to xml -->

 <?php 
 	$xml = simplexml_load_file('example.xml');
 	// echo $xml->producer[1]->name.$xml->producer[1].name;
 	echo $xml->produce[1]->name;

 	foreach ($xml->produce as $produce) {
 		 $produce->name.'<br/>';
 		 $produce->show->showname.'<br/>';
 		foreach ($produce->show as $show) {
 			echo $show->showname.$show->showdate.'<br/>';
 		}
 	}
  ?>
	<!-- 一种展示数据的方式 -->
  <?php 

  	// $video = simplexml_load_file('');
  	// echo '<strong>Title:</strong><br/>'.$video->title;
  	// echo '<strong>description:</strong><br/>'.$video->content;
   ?>

	<!-- introduce to the database -->
   <?php 
   $mysql_host = 'localhost';
   $mysql_user = 'root';
   $mysql_pass = 'root';
   $conn_error = 'could not connect to the database';
   mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);
    ?>