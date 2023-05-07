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
    <h1>Analogy Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	What is an analogy?</p>
        <label>
          <input type="radio" name="question1" value="a">
          A comparison between two things 
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          A statement that contradicts itself 
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          A belief without evidence 
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          A type of logical fallacy
        </label>
      </div>
      <div class="question">
        <p>2.	Which of the following is an example of an analogy?</p>
        <label>
          <input type="radio" name="question2" value="a">
          "All men are mortal, Socrates is a man, therefore Socrates is mortal." 
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          "The cat is as graceful as a ballerina." 
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          "If you don't do your homework, you won't pass the test." 
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          "The earth is round because we can see its curve from space."
        </label>
      </div>
      <div class="question">
        <p>3.	What is the purpose of using analogies?</p>
        <label>
          <input type="radio" name="question3" value="a">
          To explain complex ideas in simpler terms 
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          To confuse the audience 
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          To prove a point 
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          To persuade the audience
        </label>
      </div>
      <div class="question">
        <p>4.	Which of the following is an example of an analogy used in literature?</p>
        <label>
          <input type="radio" name="question4" value="a">
          "Life is like a box of chocolates, you never know what you're gonna get." 
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          "To be or not to be, that is the question." 
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          "It was the best of times, it was the worst of times." 
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          "I wandered lonely as a cloud."
        </label>
      </div>
      <div class="question">
        <p>5.	Which of the following is not an element of an analogy?</p>
        <label>
          <input type="radio" name="question5" value="a">
          The target 
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          The source 
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          The argument 
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          The comparison
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="analogy-quiz.js"></script>
</body>
</html>