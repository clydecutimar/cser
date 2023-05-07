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
    <h1>Logic Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	Computer : fqprxvht :: Language : ?</p>
        <label>
          <input type="radio" name="question1" value="a">
          ocqixcig
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          oxpixdig
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          ocqicyig
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          ocqixcjg
        </label>
      </div>
      <div class="question">
        <p>2.	Genuine : Authentic : : Mirage : _____</p>
        <label>
          <input type="radio" name="question2" value="a">
          Illusion
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          Image
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          Hideout
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          Reflection
        </label>
      </div>
      <div class="question">
        <p>3.	SECLUSION : HERMIT ::</p>
        <label>
          <input type="radio" name="question3" value="a">
          wealth: embezzler
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          ambition : philanthropist 
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          domination : athlete 	
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          turpitude : introvert
        </label>
      </div>
      <div class="question">
        <p>4.	philanthropist : munificence ::</p>
        <label>
          <input type="radio" name="question4" value="a">
          aristocrat : gratitude 	
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          skeptic : disbelief 
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          symptom : treatment 
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          anomaly : plausibility
        </label>
      </div>
      <div class="question">
        <p>5.	Vague : Nebulous : :</p>
        <label>
          <input type="radio" name="question5" value="a">
          spectacular : legitimate 
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          mundane : commonplace 
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          magical : impressive
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          steep : shallow
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="logic-quiz.js"></script>
</body>
</html>