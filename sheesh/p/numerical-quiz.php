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
    <h1>Numerical Reasoning Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	(2×1÷2), (4÷1×2), (6×1÷2), _____</p>
        <label>
          <input type="radio" name="question1" value="a">
          8
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          16
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          4
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          32
        </label>
      </div>
      <div class="question">
        <p>2.	(15-8+3), 8, (4÷2×3), ____ </p>
        <label>
          <input type="radio" name="question2" value="a">
          4
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          3
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          8
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          2
        </label>
      </div>
      <div class="question">
        <p>3.	Simplify: 33 1/3 % of 48 + 12 1⁄2 % of 96 – 44 4/9 % of 27</p>
        <label>
          <input type="radio" name="question3" value="a">
          12
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          16
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          24
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          48
        </label>
      </div>
      <div class="question">
        <p>4.	12 is 125% of what number?</p>
        <label>
          <input type="radio" name="question4" value="a">
          9.6
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          8
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          9
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          10
        </label>
        <label>
          <input type="radio" name="question4" value="e">
          8.6
        </label>
      </div>
      <div class="question">
        <p>5.	What percent of 16 is 40?</p>
        <label>
          <input type="radio" name="question5" value="a">
          2.5% 
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          2500%
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          1/4 
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          250%
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          25%
        </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="numerical-quiz.js"></script>
</body>
</html>