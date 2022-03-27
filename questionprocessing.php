<?php
echo 'Your answer was ';
echo $_POST['question1'];

if(isset($_POST['question1']) && $_POST['question1'] == "Correct")
{
	echo '<br><br>The answer was recieved.';
	header("Location: correct.html");
}
else if ($_POST['question1'] == "Wrong")
{
	header("Location: incorrect.html");
}


if(isset($_POST['question2']) && $_POST['question2'] == "Correct")
{
	echo '<br><br>The answer was recieved.';
	header("Location: correct.html");
}
else if ($_POST['question2'] == "Wrong")
{
	header("Location: incorrect.html");
}

?>
