<?php
$count = 0; 
if(isset($_POST['question1']) && $_POST['question1'] == "Correct")
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct.html");
	#$count++;
	#$_POST['question1'] == NULL; 
}
else if (isset($_POST['question1']) && $_POST['question1'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question2']) && $_POST['question2'] == "Correct")# && $count == 1)
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct2.html");
	#$count++;
	#$_POST['question2'] == NULL; 
}
else if (isset($_POST['question2']) && $_POST['question2'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question3']) && $_POST['question3'] == "Correct")# && $count == 2)
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct3.html");
	#$count++;
	#$_POST['question3'] == NULL; 
}
else if (isset($_POST['question3']) && $_POST['question3'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question4']) && $_POST['question4'] == "Correct")# && $count == 3)
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct4.html");
	#$count++;
	#$_POST['question4'] == NULL; 
}
else if (isset($_POST['question4']) && $_POST['question4'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question5']) && $_POST['question5'] == "Correct")# && $count == 4)
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct5.html");
	#$count++;
	#$_POST['question5'] == NULL; 
}
else if (isset($_POST['question5']) && $_POST['question5'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question6']) && $_POST['question6'] == "Correct")# && $count == 5)
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct6.html");
	#$count++;
	#$_POST['question5'] == NULL; 
}
else if (isset($_POST['question6']) && $_POST['question6'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question7']) && $_POST['question7'] == "Correct")# && $count == 6)
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct7.html");
}
else if (isset($_POST['question7']) && $_POST['question7'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question8']) && $_POST['question8'] == "Correct")
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct8.html");
}
else if (isset($_POST['question8']) && $_POST['question8'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question9']) && $_POST['question9'] == "Correct")
{
	#echo '<br><br>The answer was recieved.';
	header("Location: correct9.html");
}
else if (isset($_POST['question9']) && $_POST['question9'] == "Wrong")
{
	header("Location: incorrect.html");
}
else if(isset($_POST['question10']) && $_POST['question10'] == "Correct")
{
	#echo '<br><br>The answer was recieved.';
	header("Location: youWIn.html");
}
else if (isset($_POST['question10']) && $_POST['question10'] == "Wrong")
{
	header("Location: incorrect.html");
}
?>