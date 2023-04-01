
<html>
	<head>
		<title>Math Flashcards</title>
	</head>
	<body>
		<center>
		<a href="index.php">Addition</a> | <a href="Subtraction.php">Subtraction</a> | <a href="Multiplication.php">Multiplication</a> | <a href="Division.php">Division</a>
		<br/><br/>
	<h1>Division</h1>

	<h1>
		<?php
			$num1 = rand(10,20);
			$num2 = rand(1,10);

			echo $num1 . " / " . $num2;

		?>
	</h1>
	<br/><br/>
	<?php
	if (!$_POST['answer']) {} else {
		$correct_answer = $_POST['num1'] / $_POST['num2'];

			if ($correct_answer == $_POST['answer']) {
				echo "Correct! " . $_POST['num1'] . " / " . $_POST['num2'] . " = " . $_POST['answer'];} else {
					echo "Wrong! " . $_POST['num1'] . " / " . $_POST['num2'] . " = " . $correct_answer . ", not " . $_POST['answer'];
				}




	}
	?>

	<br/><br/><br/><br/>

	<form method="post" action="Division.php">
				<input name="num1" type="hidden" value="<?php echo $num1 ?>">
				<input name="num2" type="hidden" value="<?php echo $num2 ?>">
		Answer: <input name="answer"> <button>Submit</button> <button>New Card</button>
	</form>

	</center>
	</body>
</html>
