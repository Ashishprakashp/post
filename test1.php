<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>HTML DOM Events</h1>
<h2>The onclick Event</h2>

<p>The onclick event triggers a function when an element is clicked on.</p>
<p>Click to trigger a function that will output "Hello World":</p>

<button onclick="myFunction()">Click me</button>

<p id="demo"></p>

<script>
sessionStorage.setItem('idassign', 'possible');
</script>
<?php
echo $_SESSION['idassign'];
?>
</body>
</html>
