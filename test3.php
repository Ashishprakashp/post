<html>
<body>
<video width="320" height="240" autoplay muted>
  <source src="./sample_files/freelancer0.mp4" type="video/mp4">
</video>
<h1>The Window Location Object</h1>
<h2>The href Property</h2>

<p>Click the button to set the href value to https://www.w3schools.com.</p>

<button onclick="myFunction()">Take me to w3schools.com</button>

<script>
function myFunction() {
  location.href = "user.php";
}
</script>
<?php
echo <<<END
<div id="videodisplay">
<ul>
END;
for($i=0;$i<3;$i++){
echo <<<END
<li><video width="320px" height="240px" autoplay muted>
<source src="test6.php" type="video/mp4">
</video></li>
END;
}
echo <<<END
</div>
</ul>
END;
?>
</body>
</html>
