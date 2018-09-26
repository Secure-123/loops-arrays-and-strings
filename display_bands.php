<?php
$location;
$genre;
$errors=false;
$errMsg="";
$results=[];
$bands=[
    ["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London","genre"=>"Rock"],
    ["name"=>"The Beatles", "formed"=>1960, "location"=>"Liverpool","genre"=>"Rock"],
    ["name"=>"The Wu-Tang Clan", "formed"=>1992, "location"=>"New York","genre"=>"Hip-hop"],
    ["name"=>"Busted", "formed"=>2000, "location"=>"Southend-on-Sea","genre"=>"Pop"],
];
if(isset($_POST["submitBtn"])){
	$location=trim($_POST["location"]);
	$genre=$_POST["genre"];
	if($location===""){
		$errors=true;
	    $errMsg.="<p>You need to enter a location</p>";
	}
}else{
	$errors=true;
	$errMsg.="You shouldn't have got to this page";
}
if(!$errors){
    foreach($bands as $band){
        if(strpos($band["location"],$location)!==false && $band["genre"]===$genre)
        {
        	array_push($results,$band);
       }
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Search Results</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
if($errors){
	echo $errMsg;
}else{
	if(count($results)>0)
	{
		foreach($results as $band){
			echo "<p>{$band["name"]}</p>";
		}
	}else{
		echo "<p>Sorry no results</p>";
	}
}
?>
</body>
</html>
