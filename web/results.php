<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$places = $_POST["places"];
$comments = htmlspecialchars($_POST["comments"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Results</title>
</head>
<body>
<h1>Submission Results</h1>

<p>Your name is: <?=$name ?></p>
<p>Your email is: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
<p>Your major is: <?=$major ?></p>
<p>You have been to the following places:</p>
<ul>

<?
foreach ($places as $place)
{
$place_clean = htmlspecialchars($place);
echo "<li><p>$place_clean</p></li>";
}
?>		

</ul>

<p>Comments: <?=$comments?></p>

</body>
</html>