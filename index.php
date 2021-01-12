<?php 
	
	$studentList =[
		['name'=>'jaan', 'section'=>'rose', 'gradeLevel'=>'7'],
		['name'=>'jean', 'section'=>'rosal', 'gradeLevel'=>'8'],
		['name'=>'jian', 'section'=>'lily', 'gradeLevel'=>'9' ],
	];
	$name ='Jian';

	function greetings($name = 'Jaan'){
		global $name;
		$name='Joan';
		echo 'How are you, '.$name;
	}
	
	greetings();
	//include ('add.php');
	//require 'add.php';

	
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loops</title>
</head>
<body>
	<h1> Student Roster</h1>
	<ul>
		<?php foreach ($studentList as $indivStud){?>
			<h3><?php echo $indivStud['name']; ?> </h3>
			<p><?php echo $indivStud['section']; ?></p>
			
		<?php }		?>

		<?php foreach ($studentList as $student){
		if ($student['gradeLevel'] == '9'){
			echo $student['name'] . ' is a Grade ' .$student['gradeLevel'].' student '.'<br/>';
		}
	}?>

	
	<?php foreach($studentList as $student){
		if($student['name'] === 'jean'){
			break;
		}
		echo $student['name']. '<br/>';
		
		}?>
	<?php foreach($studentList as $student){
		if($student['name'] === 'jean'){
			continue;
		}
		echo $student['name']. '<br/>';
		
		}?>

	</ul>
	
</body>
</html>

