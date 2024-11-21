<?php
Include "view-header.php";
?>

<h1>Learning JavaScript Functions!</h1>
 <p>Hello! Enter something backwards and see it spat out forwards, or vice versa. If you'd like to see some other functions, travel to one of the other tabs.</p>

  <input type="text" id="textInput" placeholder="Enter text to reverse">
  <button class="button" onclick="reverseText()">Reverse Text</button>
  <p id="reversedText"></p>

<script>
  function reverseText() {
      const text = document.getElementById('textInput').value;
      const reversed = text.split('').reverse().join('');
      document.getElementById('reversedText').innerText = `Reversed Text: ${reversed}`;
    }
</script>

<?php
Include "view-footer.php";
?>
