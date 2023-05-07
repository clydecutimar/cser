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
    <h1>Mock Test</h1>
    <p id="timer">50:00</p>
    <form id="quiz-form">
      <div class="question">
        <p>1. Which of the following words means "the quality of being honest and having strong moral principles"?</p>
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
        <p>2. Which of the following words means "an expression of strong disapproval or harsh criticism"?</p>
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
        <p>3. Which of the following words means "to give up a position, right, or power"?</p>
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
        <p>4. Which of the following words means "to give up or disavow a belief or principle"?</p>
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
        <p>5. Which of the following words means "to go beyond what is necessary or desired"?</p>
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
    <div class="question">
	<p>6. Which of the following is correct?</p>
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
        <p>7. Which of the following is a correctly punctuated sentence?</p>
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
        <p>8. Which of the following is a correctly formed sentence?</p>
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
        <p>9. Which of the following is a correctly formed sentence?</p>
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
        <p>10. Which of the following is correct?</p>
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
    <div class="question">
	<p>11. A. One effective way is to diversify his funds to different investments like real estate, stocks and
            money instruments like bonds and trust funds.</p>
            <p>   B. It is always best to expand money to different investment wheels.</p>
                <p>   C. A wise investor must not put all his eggs in one basket.</p>
                    <p>   D. He should always consider the risks involved in investing his money.</p>
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
        <p>12. A. It is very vital to have social media presence however personal blogs serve as web domains.</p>
            <p>   B. Most people including celebrities and businessmen have blogs nowadays.</p>
                <p>   C. Therefore, building them will help anyone in promoting himself or his business.</p>
                    <p>   D. Apparently blogs are like our offices only they are in the internet.</p>
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
        <p>13. A. The basic steps in building a website are easy to remember and registering a domain name is the
            usual priority.</p>
            <p>   B. Designing a layout will come after that.</p>
                <p>   C. Finally, adding more content and social media presence are required to keep your site active.</p>
                    <p>   D. Then you need a hosting provider to host your site’s content in the World Wide Web.</p>
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
        <p>14. A. Speaking in English every day is also proven effective.</p>
            <p>   B. Another way is watching English movies and TV shows particularly with English subtitles.</p>
                <p>   C. Reading articles in books, newspapers, and magazines is just among the helpful ways.</p>
                    <p>   D. There are many ways to improve and develop English proficiency.</p>
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
        <p>15. A. Others don’t realize yet what to pursue because they have many dreams.</p>
            <p>   B. Finding the right course in college is one of the most challenging decisions anyone can make.</p>
                <p>   C. Some people want to pursue their dreams ever since they were just little.</p>
                    <p>   D. Indeed destiny is a matter of choice.</p>
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
    <div class="question">
	<p>16. There are no effective boundaries when it comes to pollutants. Studies have shown that toxic insecticides that have been banned in many countries are riding the wind from countries where they remain legal. Compounds such as DDT and toxaphene have been found in remote places like the Yukon and other Arctic regions. This paragraph best supports the statement that</p>
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
        <p>17. Most researchers in needy countries are based on the thinking and approach of the highly developed Western world, and seldom have they been directed toward meeting the countries; own development needs. The sentence best supports the statement that _________.</p>
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
        <p>18. Critical reading is a demanding process. To read critically, you must slow down your reading and, with pencil in hand, perform specific operations on the text. Mark up the text with your reactions, conclusions, and questions. When you read, become an active participant. This paragraph best supports the statement that</p>
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
        <p>19. Two person look out through the same bars; one sees mud and the other, the stars. The sentence best supports the statement that__________.</p>
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
        <p>20. Nagawang mabago ng mga kasalukuyang awitin ang kamalayan ng Pilipino upang kantahin ang sarili niyang mga awit sa tanging wikang nakapagsasatinig sa kanyang kaluluwa. Isinasaad ng pangungusap na __________.</p>
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
    <div class="question">
	 <p>21. (2×1÷2), (4÷1×2), (6×1÷2), _____</p>
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
        <p>22. (15-8+3), 8, (4÷2×3), ____ </p>
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
        <p>23. Simplify: 33 1/3 % of 48 + 12 1⁄2 % of 96 – 44 4/9 % of 27</p>
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
        <p>24. 12 is 125% of what number?</p>
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
        <p>25. What percent of 16 is 40?</p>
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
    <div class="question">
	<p>26. The official motto used in 30th Southeast Asian Games is what?</p>
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
        <p>27. On August 16, 2018, the government announced at least ___ Philippine holidays for 2019 as declared by virtue of Proclamation No. 555, series of 2018.</p>
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
        <p>28. Which of the following statements best describes the relationship between global warming ozone depletion?</p>
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
        <p>29. It is only Philippine province with an English name.</p>
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
        <p>30. What form of government does the Philippines adopt?</p>
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
    <div class="question">
	<p>31. Computer : fqprxvht :: Language : ?</p>
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
        <p>32. Genuine : Authentic : : Mirage : _____</p>
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
        <p>33. SECLUSION : HERMIT ::</p>
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
        <p>34. philanthropist : munificence ::</p>
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
        <p>35. Vague : Nebulous : :</p>
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
    <div class="question">
	<p>36. What is an analogy?</p>
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
        <p>37. Which of the following is an example of an analogy?</p>
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
        <p>38. What is the purpose of using analogies?</p>
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
        <p>39. Which of the following is an example of an analogy used in literature?</p>
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
        <p>40. Which of the following is not an element of an analogy?</p>
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
    <div class="question">
	<p>41. Which of the following words is spelled correctly?</p>
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
        <p>42. Which of the following words is spelled correctly?</p>
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
        <p>43. Which of the following words is spelled correctly?</p>
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
        <p>44. Which of the following words is spelled correctly?</p>
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
        <p>45. Which of the following words is spelled correctly?</p>
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
    <div class="question">
	<p>46. Which of the following is an example of clerical operations?</p>
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
        <p>47. What is the primary purpose of filing documents in a clerical office?</p>
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
        <p>48. Which of the following is NOT a benefit of using technology in clerical operations?</p>
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
        <p>49. What is the purpose of data entry in clerical operations?</p>
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
        <p>50. What is the difference between data and information?</p>
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
      <button type="submit">Submit Answers</button>
    </form>
    <div id="quiz-results"></div>
    <button id="retake-button" type="button">Retake Quiz</button>
  </div>
        
</div>	  
    
	<script src="mocktest.js"></script>
</body>
</html>