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
    <h1>Grammar and Correct Usage Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	Which of the following is correct?</p>
        <label>
          <input type="radio" name="question1" value="a">
          Him and me went to the store. 
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          He and I went to the store. 
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          Him went to the store. 
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          Me and he went to the store.
        </label>
      </div>
      <div class="question">
        <p>2.	Which of the following is a correctly punctuated sentence?</p>
        <label>
          <input type="radio" name="question2" value="a">
          She went to the store, and bought bread, milk, and eggs. 
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          She went to the store and bought bread, milk and eggs. 
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          She went to the store, and bought bread, milk and eggs. 
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          She went to the store and bought bread milk and eggs.
        </label>
      </div>
      <div class="question">
        <p>3.	Which of the following is a correctly formed sentence?</p>
        <label>
          <input type="radio" name="question3" value="a">
          Whom did you give the book to? 
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          Who did you give the book to? 
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          To whom did you give the book? 
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          All of the above.
        </label>
      </div>
      <div class="question">
        <p>4.	Which of the following is a correctly formed sentence?</p>
        <label>
          <input type="radio" name="question4" value="a">
          Its important to get enough sleep. 
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          It's important to get enough sleep. 
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          Its' important to get enough sleep. 
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          It is important to get enough sleep.
        </label>
      </div>
      <div class="question">
        <p>5.	Which of the following is correct?</p>
        <label>
          <input type="radio" name="question5" value="a">
          Their going to the party tomorrow. 
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          They're going to the party tomorrow. 
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          There going to the party tomorrow. 
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          None of the above.
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="grammar-quiz.js"></script>
</body>
</html>