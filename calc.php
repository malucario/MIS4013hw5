
<?php
Include "view-header.php";
?>

<h1>Learning JavaScript Functions!</h1>
 <p>Hello! Click the button below to get the time. If you'd like to see some other functions, travel to one of the other tabs.</p>
<input type="number" id="num1" placeholder="Enter first number">
<input type="number" id="num2" placeholder="Enter second number">
<button class="button" onclick="calculateSum()">Calculate Sum</button>
<p id="sumResult"></p>
<button class="button" onclick="calculateDifference()">Calculate Difference</button>
<p id="differenceResult"></p>
<button class="button" onclick="calculateProduct()">Calculate Product</button>
<p id="productResult"></p>
<button class="button" onclick="calculateQuotient()">Calculate Quotient</button>
<p id="quotientResult"></p>

<script>
function calculateSum() {
      const num1 = parseFloat(document.getElementById('num1').value);
      const num2 = parseFloat(document.getElementById('num2').value);
      const sum = num1 + num2;
      document.getElementById('sumResult').innerText = `Sum: ${isNaN(sum) ? 'Invalid input' : sum}`;
    }
 function calculateDifference() {
      const num1 = parseFloat(document.getElementById('num1').value);
      const num2 = parseFloat(document.getElementById('num2').value);
      const difference = num1 - num2;
      document.getElementById('differenceResult').innerText = `Difference: ${isNaN(difference) ? 'Invalid input' : difference}`;
    }
 function calculateProduct() {
      const num1 = parseFloat(document.getElementById('num1').value);
      const num2 = parseFloat(document.getElementById('num2').value);
      const product = num1 * num2;
      document.getElementById('productResult').innerText = `Product: ${isNaN(product) ? 'Invalid input' : product}`;
    }
 function calculateQuotient() {
      const num1 = parseFloat(document.getElementById('num1').value);
      const num2 = parseFloat(document.getElementById('num2').value);
      const quotient = num1 / num2;
      document.getElementById('quotientResult').innerText = `Quotient: ${isNaN(quotient) ? 'Invalid input' : quotient}`;
    }
</script>

 <?php
Include "view-footer.php";
?>
