<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CSE ReviewBoost</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

	<header>
		<div id="header-title">CSE Prof and Sub-Prof ReviewBoost</div>
	</header>

	<div class="homepage">
        <h1><?php echo $_SESSION['username']; ?></h1>
        <button onclick="logout()">Logout</button>
    </div>
    
    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>

	<div class="sidebar">
		<img class="logo" src="image-14.png" alt="Image 14">
		<a href="premium.php" class="active">Premium Plan</a>
        <a href="extend.php">Extend Plan</a>
        <a href="faqs.php">FAQs</a>
		<a href="contact.php">Contact</a>
        <a href="about.php">About</a>
	</div>


	<div class="content"> 

	<div id="topics">
			<a href="vocabulary.php"><img class="vocabulary" src="vocabulary.png" alt="Vocabulary"></a>
			<a href="grammar.php"><img class="grammar" src="grammar.png" alt="Grammar"></a>
			<a href="paragraph.php"><img class="paragraph" src="paragraph.png" alt="Paragraph"></a>
			<a href="reading.php"><img class="reading" src="reading.png" alt="Reading"></a>
			<a href="numerical.php"><img class="numerical" src="numerical.png" alt="Numerical"></a>
			<a href="general.php"><img class="general" src="general.png" alt="General"></a>
			<a href="logic.php"><img class="logic" src="logic.png" alt="Logic"></a>
			<a href="analogy.php"><img class="analogy" src="analogy.png" alt="Analogy"></a>
			<a href="spelling.php"><img class="spelling" src="spelling.png" alt="Spelling"></a>
			<a href="clerical.php"><img class="clerical" src="clerical.png" alt="Clerical"></a>
			<a href="mocktest.php"><img class="mock" src="mock.png" alt="Mock"></a>
		</div>
			
	</div>	  
    
	<script src="script.js"></script>
</body>
</html>