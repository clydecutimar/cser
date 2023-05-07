const form = document.querySelector('#quiz-form');
const resultsContainer = document.querySelector('#quiz-results');
const answerKey = ['c', 'c', 'c', 'd', 'a'];
let timeLeft = 300; // 5 minutes in seconds
let timerIntervalId;

// function to start the timer
function startTimer() {
  timerIntervalId = setInterval(function() {
    timeLeft--;
    if (timeLeft <= 0) {
      clearInterval(timerIntervalId);
      form.dispatchEvent(new Event('submit')); // submit the form
    } else {
      const minutes = Math.floor(timeLeft / 60);
      const seconds = timeLeft % 60;
      document.querySelector('#timer').textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
    }
  }, 1000);
}

// start the timer on page load
window.addEventListener('load', startTimer);

form.addEventListener('submit', function(e) {
  e.preventDefault();
  clearInterval(timerIntervalId); // stop the timer
  let score = 0;
  const userAnswers = [form.question1.value, form.question2.value, form.question3.value, form.question4.value, form.question5.value];
  userAnswers.forEach(function(answer, index) {
    if (answer === answerKey[index]) {
      score += 1;
    }
  });
  resultsContainer.innerHTML = `You got ${score} out of ${answerKey.length} correct!`;
});

// Get a reference to the retake button
const retakeButton = document.getElementById('retake-button');

// Add a click event listener to the retake button
retakeButton.addEventListener('click', () => {
  // Reset the quiz by reloading the page
  location.reload();
});
