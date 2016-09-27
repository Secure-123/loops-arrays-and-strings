<!DOCTYPE HTML>
<html>
<head>
<title>Loops, Arrays and Strings</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

/*
Q1) Loops
a) Modify the following code so that the loop outputs the numbers 5-15
b) Re-write the loop as a while loop
*/

//a
for($i=5;$i<=15;$i++)
{
    echo $i."<br/>";
}

//b
$i=5;
while($i<=15)
{
    echo $i."<br/>";
    $i++;
}

/*
Q2) Arrays
a) Output the entire contents of the array using a print_r() statement
b) Using the array, write an echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia'
c) Output the entire contents of the array as an HTML list using a foreach loop
d) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net 
http://php.net/manual/en/function.array-merge.php. Output the joined array using a print_r() statement.
e) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.
*/

$moreCountries=array("Nigeria","Bangladesh","Russia","Japan");
$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];
print_r($countries);
echo "<p>".$countries[0].", ".$countries[1].", ".$countries[3]." and ".$countries[5]." are all in Asia</p>";

foreach($countries as $country)
{
	echo $country."<br>";
}

$mergedArr = array_merge($countries, $moreCountries);
print_r($mergedArr);

rsort($mergedArr);
echo "<ul>";
foreach($mergedArr as $country)
{
	echo "<li>".$country."</li>";
}
echo "</ul>";
/*
Q3) Associative Arrays
a) Using this array, write an echo statement that outputs 'The Wu-Tang Clan were formed in 1992'
b) Add another band to the array, using an echo statement, output some of new the band's details
c) Using a foreach loop display the details for all the bands
d) Output the data from (c) this using an HTML table. 
*/

$bands=[
    ["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London","genre"=>"Rock"],
    ["name"=>"The Beatles", "formed"=>1960, "location"=>"Liverpool","genre"=>"Rock"],
    ["name"=>"The Wu-Tang Clan", "formed"=>1992, "location"=>"New York","genre"=>"Hip-hop"],
    ["name"=>"Busted", "formed"=>2000, "location"=>"Southend-on-Sea","genre"=>"Pop"],
];

echo "<p>".$bands[2]["name"]." were formed in ".$bands[2]["formed"]."</p>";
echo "<p>".$bands[3]["name"]." are from ".$bands[3]["location"]."</p>";

echo "<table>";
echo "<tr><th>Name</th><th>Formed</th><tr>";
foreach($bands as $band)
{
	echo "<tr><td>".$band["name"]."</td><td>".$band["formed"]."</td></tr>";
}
echo "</table>";
/*
Q4) Strings
a) Using the following string, write an echo statement that outputs, the fifth character in the string
b) Use the strlen() function to output the length of the string
c) Convert the string to lowercase and output it.
d) Use the substr() function to output the word 'Web'
*/

$moduleStr="CIT2318 Web Design and Programming";
echo "<p>".$moduleStr[4]."</p>";
echo "<p>String length = ".strlen($moduleStr)."</p>";
echo "<p>".strtolower($moduleStr)."</p>";
echo "<p>".substr($moduleStr,8,3)."</p>";
?>
</body>
</html>