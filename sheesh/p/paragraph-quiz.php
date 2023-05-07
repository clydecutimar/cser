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
    <h1>Paragraph Organization Quiz</h1>
    <p id="timer">5:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1.	A. One effective way is to diversify his funds to different investments like real estate, stocks and
            money instruments like bonds and trust funds.</p>
            <p>  	B. It is always best to expand money to different investment wheels.</p>
                <p> 	C. A wise investor must not put all his eggs in one basket.</p>
                    <p> 	D. He should always consider the risks involved in investing his money.</p>
        <label>
          <input type="radio" name="question1" value="a">
          CBAD
        </label>
        <label>
          <input type="radio" name="question1" value="b">
          CBDA 
        </label>
        <label>
          <input type="radio" name="question1" value="c">
          CDAB
        </label>
        <label>
          <input type="radio" name="question1" value="d">
          CDBA
        </label>
      </div>
      <div class="question">
        <p>2.	A. It is very vital to have social media presence however personal blogs serve as web domains.</p>
            <p>  	B. Most people including celebrities and businessmen have blogs nowadays.</p>
                <p> 	C. Therefore, building them will help anyone in promoting himself or his business.</p>
                    <p> 	D. Apparently blogs are like our offices only they are in the internet.</p>
        <label>
          <input type="radio" name="question2" value="a">
          BDAC
        </label>
        <label>
          <input type="radio" name="question2" value="b">
          BADC
        </label>
        <label>
          <input type="radio" name="question2" value="c">
          BACD
        </label>
        <label>
          <input type="radio" name="question2" value="d">
          BDCA
        </label>
      </div>
      <div class="question">
        <p>3.	A. The basic steps in building a website are easy to remember and registering a domain name is the
            usual priority.</p>
            <p>  	B. Designing a layout will come after that.</p>
                <p> 	C. Finally, adding more content and social media presence are required to keep your site active.</p>
                    <p> 	D. Then you need a hosting provider to host your site’s content in the World Wide Web.</p>
        <label>
          <input type="radio" name="question3" value="a">
          ABCD
        </label>
        <label>
          <input type="radio" name="question3" value="b">
          ADBC
        </label>
        <label>
          <input type="radio" name="question3" value="c">
          ACBD
        </label>
        <label>
          <input type="radio" name="question3" value="d">
          ADCB
        </label>
      </div>
      <div class="question">
        <p>4.	A. Speaking in English every day is also proven effective.</p>
            <p>  	B. Another way is watching English movies and TV shows particularly with English subtitles.</p>
                <p> 	C. Reading articles in books, newspapers, and magazines is just among the helpful ways.</p>
                    <p> 	D. There are many ways to improve and develop English proficiency.</p>
        <label>
          <input type="radio" name="question4" value="a">
          DCBA 
        </label>
        <label>
          <input type="radio" name="question4" value="b">
          DACB
        </label>
        <label>
          <input type="radio" name="question4" value="c">
          DABC
        </label>
        <label>
          <input type="radio" name="question4" value="d">
          DCAB
        </label>
      </div>
      <div class="question">
        <p>5.	A. Others don’t realize yet what to pursue because they have many dreams.</p>
            <p>  	B. Finding the right course in college is one of the most challenging decisions anyone can make.</p>
                <p> 	C. Some people want to pursue their dreams ever since they were just little.</p>
                    <p> 	D. Indeed destiny is a matter of choice.</p>
        <label>
          <input type="radio" name="question5" value="a">
          BDAC
        </label>
        <label>
          <input type="radio" name="question5" value="b">
          BCDA
        </label>
        <label>
          <input type="radio" name="question5" value="c">
          BADC
        </label>
        <label>
          <input type="radio" name="question5" value="d">
          BCAD
  </label>
      </div>
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
	<button id="retake-button" type="button">Retake Quiz</button>
  </div>
			
</div>	  
    
	<script src="paragraph-quiz.js"></script>
</body>
</html>