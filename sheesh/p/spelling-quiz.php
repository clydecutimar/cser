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
    <h1>Spelling Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	Which of the following words is spelled correctly?</p>
        <label>
          <input type="radio" name="question1" value="a">
          Accross 
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          Across 
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          Acrross 
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          Acros
        </label>
      </div>
      <div class="question">
        <p>2.	Which of the following words is spelled correctly?</p>
        <label>
          <input type="radio" name="question2" value="a">
          Bussiness 
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          Busyness 
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          Businness 
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          Business
        </label>
      </div>
      <div class="question">
        <p>3.	Which of the following words is spelled correctly?</p>
        <label>
          <input type="radio" name="question3" value="a">
          Definetly
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          Definately 
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          Definitely 
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          Definetely
        </label>
      </div>
      <div class="question">
        <p>4.	Which of the following words is spelled correctly?</p>
        <label>
          <input type="radio" name="question4" value="a">
          Embarrass 
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          Embarass 
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          Embaras 
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          Embarras
        </label>
      </div>
      <div class="question">
        <p>5.	Which of the following words is spelled correctly?</p>
        <label>
          <input type="radio" name="question5" value="a">
          Inoculate 
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          Inocullate 
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          Inocculate 
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          Inocullatte
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="spelling-quiz.js"></script>
</body>
</html>