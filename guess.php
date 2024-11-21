<?php
Include "view-header.php";
?>

<h1>Learning JavaScript Functions!</h1>
 <p>Hello! Let's play a guessing game! If you'd like to see some other functions, travel to one of the other tabs.</p>

<p>Let's play a guessing game! I'm thinking of a number 1-10. Think you know what it is?</p>
  <input type="number" id="userGuess" min="1" max="10" placeholder="Your guess">
  <button onclick="checkGuess()">Submit Guess</button>
  <p id="result"></p>

<script>
    // Generate a number 1-10
    const randomNumber = Math.floor(Math.random() * 10) + 1;

    // Check the user's guess
    function checkGuess() {
      const userGuess = parseInt(document.getElementById('userGuess').value);
      
      if (userGuess === randomNumber) {
        document.getElementById('result').innerText = 'You win :) The number was ' + randomNumber;
      } else {
        document.getElementById('result').innerText = 'You lose :P The number was ' + randomNumber;
      }
    }
  </script>

<?php
Include "view-footer.php";
?>
