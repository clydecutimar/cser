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
    <h1>Clerical Operations Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	Which of the following is an example of clerical operations?</p>
        <label>
          <input type="radio" name="question1" value="a">
          Managing the finances of a company 
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          Developing marketing strategies 
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          Answering phone calls and responding to emails 
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          Designing a website
        </label>
      </div>
      <div class="question">
        <p>2.	What is the primary purpose of filing documents in a clerical office?</p>
        <label>
          <input type="radio" name="question2" value="a">
          To reduce paper usage 
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          To make the office look organized 
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          To make it easier to retrieve information 
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          To make it easier to discard information
        </label>
      </div>
      <div class="question">
        <p>3.	Which of the following is NOT a benefit of using technology in clerical operations?</p>
        <label>
          <input type="radio" name="question3" value="a">
          Increased efficiency 
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          Improved accuracy 
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          Increased paper usage 
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          Enhanced communication
        </label>
      </div>
      <div class="question">
        <p>4.	What is the purpose of data entry in clerical operations?</p>
        <label>
          <input type="radio" name="question4" value="a">
          To create new data 
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          To edit existing data 
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          To delete unnecessary data 
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          To store data in a database
        </label>
      </div>
      <div class="question">
        <p>5.	What is the difference between data and information?</p>
        <label>
          <input type="radio" name="question5" value="a">
          Data is unorganized and meaningless, while information is organized and meaningful. 
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          Data and information are the same thing. 
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          Information is unorganized and meaningless, while data is organized and meaningful. 
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          There is no difference between data and information.
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="clerical-quiz.js"></script>
</body>
</html>