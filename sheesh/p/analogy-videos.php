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
    
    <div style="text-align: center; padding-top: 60px;">
        <iframe width="734" height="413" src="https://www.youtube.com/embed/PKMIj71Ozv4?list=PLKv-8wDYBfcK6G3ix-I5ZSPaNJWoJIEY7" title="Module 5 of 9: Word Analogy, Part 1 (Batas for Every Juan)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <br>
        <iframe width="734" height="413" src="https://www.youtube.com/embed/gp94hg_6d5A?list=PLKv-8wDYBfcK6G3ix-I5ZSPaNJWoJIEY7" title="Module 5 of 9: Word Analogy, Part 2 (Batas for Every Juan)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>  

	<script src="script.js"></script>
</body>
</html>