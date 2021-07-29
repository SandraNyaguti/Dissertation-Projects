<?php 

// Get user input
	$name = $_GET['name']; 
	$comment = $_GET['comment']; 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>simple XSS test</title>
</head>
<body>
	<h2>This is to Test for cross site scripting (XSS) awareness</h2>
	<div class="wrapper">
		<form  method="GET" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name" >Name</label>
					<input type="text" name="name" id="name" placeholder="Enter a name" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">There's a saying a begger has no choice.What is your say?</label>
				<textarea id="comment" name="comment" placeholder=" Leave your Thoughts here?" required></textarea>
				
			</div>
			<div class="input-group">
				<button name="submit" class="btn"> Post Your Thought</button>
			</div>
		</form>
		
	</div>

    Hello <?php echo $name; ?> <br>
    <?php echo $comment; ?>

    <a href="https://techmonitor.ai/technology/cybersecurity/xss-attacks"> Stay XSS aware</a>


</body>
</html>