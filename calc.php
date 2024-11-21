
<?php
Include "view-header.php";
?>

<h1>Learning JavaScript Functions!</h1>
 <p>Hello! Click the button below to get the time. If you'd like to see some other functions, travel to one of the other tabs.</p>
<input type="number" id="num1" placeholder="Enter first number">
  <input type="number" id="num2" placeholder="Enter second number">
  <button class="button" onclick="calculateSum()">Calculate Sum</button>
  <p id="sumResult"></p>

<script>
function calculateSum() {
      const num1 = parseFloat(document.getElementById('num1').value);
      const num2 = parseFloat(document.getElementById('num2').value);
      const sum = num1 + num2;
      document.getElementById('sumResult').innerText = `Sum: ${isNaN(sum) ? 'Invalid input' : sum}`;
    }
</script>

 <?php
Include "view-footer.php";
?>
