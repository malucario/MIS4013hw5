
<?php
Include "view-header.php";
?>

<h1>Learning JavaScript Functions!</h1>
 <p>Hello! Click the button below to get the time. If you'd like to see some other functions, travel to one of the other tabs.</p>
<button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>

<p id="demo"></p>
 <?php
Include "view-footer.php";
?>
