

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
