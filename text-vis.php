<?php
Include "view-header.php";
?>

<button class="button" onclick="toggleText()">Toggle Text</button>
  <p id="toggleText">This text can be hidden or shown!</p>

   function toggleText() {
      const textElement = document.getElementById('toggleText');
      if (textElement.style.display === 'none') {
        textElement.style.display = 'block';
      } else {
        textElement.style.display = 'none';
      }
    }

 <?php
Include "view-footer.php";
?>
