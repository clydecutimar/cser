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

	<div class="content-quiz"> 

    <div class="quiz-container">
    <h1>Vocabulary Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	Which of the following words means "the quality of being honest and having strong moral principles"?</p>
        <label>
          <input type="radio" name="question1" value="a">
          Integrity
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          Insolence
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          Innuendo
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          Insinuation
        </label>
      </div>
      <div class="question">
        <p>2.	Which of the following words means "an expression of strong disapproval or harsh criticism"?</p>
        <label>
          <input type="radio" name="question2" value="a">
          Euphemism
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          Encomium
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          Ennui
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          Diatribe
        </label>
      </div>
      <div class="question">
        <p>3.	Which of the following words means "to give up a position, right, or power"?</p>
        <label>
          <input type="radio" name="question3" value="a">
          Abstain
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          Abdicate
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          Abhor
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          Abide
        </label>
      </div>
      <div class="question">
        <p>4.	Which of the following words means "to give up or disavow a belief or principle"?</p>
        <label>
          <input type="radio" name="question4" value="a">
          Denounce
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          Disparage
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          Disavow
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          Discredit
        </label>
      </div>
      <div class="question">
        <p>5.	Which of the following words means "to go beyond what is necessary or desired"?</p>
        <label>
          <input type="radio" name="question5" value="a">
          Extricate
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          Extrapolate
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          Extravagant
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          Extort
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
    <button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="vocabulary-quiz.js"></script>
</body>
</html>