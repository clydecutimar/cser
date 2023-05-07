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
    <?php session_start(); ?>

<h1><?php echo $_SESSION['username']; ?></h1>
        <button onclick="logout()">Logout</button>
    </div>
    
    <script type="text/javascript">
        function logout() {
            window.location.href = 'logout.php';
        }
    </script>

	</div>
	<div class="sidebar">
		<img class="logo" src="image-14.png" alt="Image 14">
		<a href="premium.php" class="active">Premium Plan</a>
        <a href="extend.php">Extend Plan</a>
        <a href="faqs.php">FAQs</a>
		<a href="contact.php">Contact</a>
        <a href="about.php">About</a>
	</div>

    <div class="return-button">
        <a href="javascript:history.back()"><img class="return" src="return.png" alt="Return"> </a>
    </div>
    

	<div class="content">
		<div id="topics">
			<a href="analogy-videos.php"><img class="videos" src="videos.png" alt="Videos"></a>
			<a href="analogy.pdf" download><img class="pdfs" src="pdfs.png" alt="PDFs"></a>
			<a href="analogy-lesson.php"><img class="lesson" src="lesson.png" alt="Lesson"></a>
			<a href="analogy-quiz.php"><img class="quiz" src="quiz.png" alt="Quiz"></a>
		</div>
			
	</div>	  

	<script src="script.js"></script>
</body>
</html>