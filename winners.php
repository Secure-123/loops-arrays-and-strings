<?php
$correct_answers=["Brazil","Argentina","England","Uruguay"];
$winners;
$errors=false;
$msg="";
if(isset($_POST["submit_btn"])){
    if(isset($_POST["winners"])){
    	$winners=$_POST["winners"];
    	sort($winners);
		sort($correct_answers);
		if($winners===$correct_answers){
			$msg.="<p>Well done. You are correct.</p>";
		}else{
			$msg.="<p>Wrong answer.</p>";
		}
    }else{
    	$errors=true;
		$msg.="<p>You didn't select any teams.</p>";
    }
}else{
	$errors=true;
	$msg.="<p>You shouldn't have got to this page</p>";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP and Checkboxes</title>
</head>
<body>
<h1>World Cup Winners</h1>
<?php
if($errors){
	echo $msg;
}else{
	echo $msg;
	echo "<p>You answered</p>";
	echo "<ul>";
	foreach($winners as $winner)
	{
		echo "<li>".$winner."</li>";
	}
	echo "</ul>";
}
?>

</body>
</html>
