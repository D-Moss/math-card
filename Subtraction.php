
<html>
	<head>
		<title>Math Flashcards</title>
	</head>
	<body>
		<center>
		<a href="index.php">Addition</a> | <a href="Subtraction.php">Subtraction</a>
		<br/><br/>
	<h1>Addition</h1>

	<h1>
		<?php
			$num1 = rand(1,5);
			$num2 = rand(5,10);

			echo $num1 . " + " . $num2;

		?>
	</h1>
	<br/><br/>
	<?php
	if (!$_POST['answer']) {} else {
		$correct_answer = $_POST['num1'] + $_POST['num2'];

			if ($correct_answer == $_POST['answer']) {
				echo "Correct! " . $_POST['num1'] . " + " . $_POST['num2'] . " = " . $_POST['answer'];} else {
					echo "Wrong! " . $_POST['num1'] . " + " . $_POST['num2'] . " = " . $correct_answer . ", not " . $_POST['answer'];
				}




	}
	?>

	<br/><br/><br/><br/>

	<form method="post" action="/">
				<input name="num1" type="hidden" value="<?php echo $num1 ?>">
				<input name="num2" type="hidden" value="<?php echo $num2 ?>">
		Answer: <input name="answer"> <button>Submit</button> <button>New Card</button>
	</form>

	</center>
	</body>
</html>
