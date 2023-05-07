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

    <div class="return-button">
        <a href="javascript:history.back()"><img class="return" src="return.png" alt="Return"> </a>
    </div>

	<div class="quiz-container">
    <h1>General Information Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	The official motto used in 30th Southeast Asian Games is what?</p>
        <label>
          <input type="radio" name="question1" value="a">
          We Care As One 
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          We Play As One
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          We Win As One
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          We Will As One
        </label>
      </div>
      <div class="question">
        <p>2.	On August 16, 2018, the government announced at least ___ Philippine holidays for 2019 as declared by virtue of Proclamation No. 555, series of 2018.</p>
        <label>
          <input type="radio" name="question2" value="a">
          16
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          18
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          19
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          15
        </label>
      </div>
      <div class="question">
        <p>3.	Which of the following statements best describes the relationship between global warming ozone depletion?</p>
        <label>
          <input type="radio" name="question3" value="a">
          Ozone depletion contributes to global warming.
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          Global warming causes ozone depletion.
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          Ozone depletion and global warming have nothing to do with each other.
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          Excessive build-up of carbon dioxide causes both global warming and ozone depletion.
        </label>
      </div>
      <div class="question">
        <p>4.	It is only Philippine province with an English name.</p>
        <label>
          <input type="radio" name="question4" value="a">
          Cebu
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          Mountain Province
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          General Santos 
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          Zambales 
        </label>
      </div>
      <div class="question">
        <p>5.	What form of government does the Philippines adopt?</p>
        <label>
          <input type="radio" name="question5" value="a">
          Republican
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          Democratic
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          Neither a nor b
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          Both a and b
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="general-quiz.js"></script>
</body>
</html>