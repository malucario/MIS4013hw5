<?php
Include "view-header.php";
?>

<h1>Learning JavaScript Functions!</h1>
 <p>Hello! Do some magic and make this the text here disapear! If you'd like to see some other functions, travel to one of the other tabs.</p>

<button class="button" onclick="toggleText()">Toggle Text</button>
  <p id="toggleText">This text can be hidden or shown!</p>

<script>
function toggleText() {
      const textElement = document.getElementById('toggleText');
      if (textElement.style.display === 'none') {
        textElement.style.display = 'block';
      } else {
        textElement.style.display = 'none';
      }
    }
  </script>

 <?php
Include "view-footer.php";
?>
