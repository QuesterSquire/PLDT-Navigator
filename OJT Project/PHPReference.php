<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>

	<?php  
		
		$characterName = "Tom";
		$characterAge = 69;

		echo "there was a man named $characterName . <br>";
		echo "He was $characterAge Years old.";

		$Varaible = "Quest Loyola";
		$Int = 69;
		$Double = 69.69;
		$Boolean = False; /* or true Depending on the Statement*/

		echo $Variable[0]; /* Displays 'Q'*/
		echo str_replace("Quest", "Quester", $Variable); /*Replaces Quest to Quester*/

		echo substr($Variable, 6); /*echoes starts with Loyola*/
		echo substr($Variable, 6, 3);  /*echoes only Loy*/

		$num = 10;
		$num += 4; /*Outputs 14*/
		$num -= 4; /*Outputs 6*/
		$num *= 4; /*Outputs 40*/
		$num /= 2; /*Outputs 5*/

		echo abs(-69); /*Outputs Positive Integer*/
		echo pow(2, 4); /*Outputs 2 raised to 4 which is 16*/
		echo sqrt(144); /*Outputs the Square Root which is 16*/

		echo max(6,9); /*Outputs Highest number which is 9 */
		echo min(6,9); /*Outputs lowest Number which is 6*/
		echo round(36.9) /*Outputs 37*/
		echo round(36.2) /*Outputs 36*/
		echo ceil(36.1) /*Outputs 37*/
		echo floor(36.9)/*Outputs 36*/
	?>

	<form action="PHPReference.php" method="POST">
		Username: <input type="text" name="uname">
		Password: <input type="Password" name="Password">
		<input type="submit" name="">
	</form>
	<br>
	Your Username is : <?php echo $_POST["uname"];?>
	<br>
	Your Password is : <?php echo $_POST ["Password"];?>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<form action="PHPReference.php" method="POST">
		Num1: <input type="number" name="Num1">
		Num2: <input type="number" name="Num2">
		<input type="submit">
	</form>
	<br>
	The Sum is: <?php  echo $_POST["Num1"] + $_POST["Num2"] ; ?>
	
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<form action="PHPReference.php" method="POST">
		First Child : <input type="text" name="child1">
		Second Child : <input type="text" name="child2">
		<input type="submit">
	</form>
	<br>
	
	<?php 
		$child1 = $_POST["child1"]
		$child2 = $_POST["child2"]
		echo "The name of the First Victim is $child1 <br>"
		echo "The name of the Second Victim is $child2 <br>"

		$Friends = array("Quest", "KD", "Carlos");
		echo $Friends[0]; /* Outputs Quest*/
		$Friends[1] = "Howard"; /* Changes KD to Howard */
		echo count($Friends); /* Outputs number of var in array*/
	 ?>
	
	<form action="PHPReference.php" method="POST">
		Sinigang: <input type="checkbox" name="puds[]" value = "sinigang">
		Siomai: <input type="checkbox" name="puds[]" value = "siomai">
		Siopao: <input type="checkbox" name="puds[]" value = "siopao">
		<input type="submit">
	</form>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<?php 
	$puds = $_POST["puds"];
	echo $puds[0]; /*Outputs Sinigang*/ 
	?>
	 <form action="PHPReference.php" method="POST">
	 	Student: <input type="text" name="Student">
	 	<input type="submit">
	 </form>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 <?php 
	 	$Grades = array("Quest" => "1.0 GWA" , "Howard" => "5.0 GWA" );
		$Grades["Quest"]; /*Outputs 1.0 GWA*/
		$Grades["Howard"] = "Di kasama sa Graduating List";
		echo $Grades[$_POST[Student]];
	  ?>

	  <?php 
	  	function HelloMyChild($ChildName)
	  	{
	  		echo "$ChildName is my child <br>";
	  	}
	  	echo HelloMyChild("Daisy");
	  	echo HelloMyChild("Amber");
	  	echo HelloMyChild("Lily")
	   ?>

		<?php  
			$HowardisMale = false;
			if ($HowardisMale) {
				echo "Kasinungalingan! <br>";
			}
			else{
				echo "Bading! <br>";
			}
		?>

		<?php  
			$QuestisCute = true;
			$QuestisGay = false;
			if ($QuestisCute && $QuestisGay) {
				echo "cute ka sana bading ka lang <br>"; 
			}
			elseif ($QuestisCute && !QuestisGay) {
				echo "Iyown! Chalap <br>";
			}
			elseif (!$QuestisCute && $QuestisGay) {
				echo "POTA <br>";
			}
			else{
				echo "Ano ka? <br>";
			}
		?>

		<form action="PHPReference.php" method="GET">
			<input type="text" name="isItAChild">
			<input type="submit">
		</form>
		<br>

		<?php 
			$isItAChild = $_POST["isItAChild"];
			switch ($isItAChild) {
				case 'Howard':
					echo "pota bading";
					break;
				
				default:
					echo "Hello My Child";
					break;
			}
		 ?>
<br>

		<?php 
			for ($i=0; $i < ; $i++) { 
				# code...
			}
		 ?>






</body>
</html>