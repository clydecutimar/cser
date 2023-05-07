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
    <h1>Reading Comprehension Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	There are no effective boundaries when it comes to pollutants. Studies have shown that toxic insecticides that have been banned in many countries are riding the wind from countries where they remain legal. Compounds such as DDT and toxaphene have been found in remote places like the Yukon and other Arctic regions. This paragraph best supports the statement that</p>
        <label>
          <input type="radio" name="question1" value="a">
          toxic insecticides such as DDT have not been banned throughout the world.
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          more pollutants find their way into polar climates than they do into warmer areas.
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          studies have proven that many countries have ignored their own anti-pollution laws.
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          DDT and toxaphene are the two most toxic insecticides in the world.
        </label>
      </div>
      <div class="question">
        <p>2.	Most researchers in needy countries are based on the thinking and approach of the highly developed Western world, and seldom have they been directed toward meeting the countries; own development needs. The sentence best supports the statement that _________.</p>
        <label>
          <input type="radio" name="question2" value="a">
          highly developed countries offer the best guide for the development of needy countries
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          most researchers done in needy countries are missing their objectives
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          most researchers have universal application
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          needy countries need researchers to help them reach the status of the western world
        </label>
        <label>
        <input type="radio" name="question2" value="e">
          needy countries spend so much time for conducting researchers
        </label>
      </div>
      <div class="question">
        <p>3.	Critical reading is a demanding process. To read critically, you must slow down your reading and, with pencil in hand, perform specific operations on the text. Mark up the text with your reactions, conclusions, and questions. When you read, become an active participant. This paragraph best supports the statement that</p>
        <label>
          <input type="radio" name="question3" value="a">
          critical reading is a slow, dull, but essential process.
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          the best critical reading happens at critical times in a person’s life.
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          readers should get in the habit of questioning the truth of what they read.
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          critical reading requires thoughtful and careful attention.
        </label>
        <label>
          <input type="radio" name="question3" value="e">
          critical reading should take place at the same time each day.
        </label>
      </div>
      <div class="question">
        <p>4.	Two person look out through the same bars; one sees mud and the other, the stars. The sentence best supports the statement that__________.</p>
        <label>
          <input type="radio" name="question4" value="a">
          some people are more blind than others
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          people see things differently depending on their own perspective
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          people have varied ways of looking at different things
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          people have different tastes and interests
        </label>
        <label>
          <input type="radio" name="question4" value="e">
          people tend to influence one another’s views of things
        </label>
      </div>
      <div class="question">
        <p>5.	Nagawang mabago ng mga kasalukuyang awitin ang kamalayan ng Pilipino upang kantahin ang sarili niyang mga awit sa tanging wikang nakapagsasatinig sa kanyang kaluluwa. Isinasaad ng pangungusap na __________.</p>
        <label>
          <input type="radio" name="question5" value="a">
          madamdamin at makabuluhan ang mga awiting isinulat sa wikang Pilipino
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          tagumpay ang mga awiting Pilipino na mabago ang kaugalian ng mga tao Pilipino
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          madaling matutuhan ang mga awiting Pilipino dahil ang mga ito ay nasusulat sa katutubong wika
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          natututuhan nang tangkilikin ng mga Pilipino ang kanilang mga sariling awitin
        </label>
        <label>
          <input type="radio" name="question5" value="e">
          nagkakaroon na ng kamalayan ang mga Pilipino tungkol sa lahat ng mga awitin ngayon
        </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="reading-quiz.js"></script>
</body>
</html>