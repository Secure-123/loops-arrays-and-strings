# PHP Loops, Arrays and Strings

## Loops
These work in a similar way to many other programming languages - java, JavaScript etc.

Here's a while loop:
```php
<?php
$counter=10;
while ($counter<20)
{
    echo "{$counter}<br>";
    $counter++;
}
?>
```
This will output the numbers 10,11,12,13,14,15,16,17,18,19

Here's a for loop:
```php
<?php
for($i=1;$i<=10;$i++){
    echo "{$i}<br>";
}
?>
```

This will output the numbers 1,2,3,4,5,6,7,8,9,10

## Arrays
* Arrays in PHP can store any type of data
* Arrays are  dynamic, we can and remove elements as we wish.

### Creating arrays
We can create arrays by using the array keyword:
```php
<?php
$nameOfArray=array('value1','value2','value3','value4');
?>
```
Since PHP 5.4, arrays can also be created simply by using square brackets:
```php
<?php
$nameOfArray=['value1','value2','value3','value4'];
?>

```
Here are some specific examples:
```php
<?php
$shopping=array("tea", "bread", "milk", "sugar");
$testScores=array(34, 32, 21, 8, 56, 45);
$countries= ['England', 'Scotland', 'Wales', 'N.Ireland'];
?>
```

### Debugging arrays
Often we want to know the entire contents of an array. The *print_r()* function is really useful when debugging arrays (*var_dump()* is also useful).

```php
<?php
$shopping=["tea","bread","milk","sugar"];
print_r($shopping); //Array ( [0] => tea [1] => bread [2] => milk [3] => sugar )
?>
```

### Working with arrays
We can think of the array as being a list of data
* Each item (element) in the list has a number
* The numbering starts at zero
* The number is known as the index number

```php
<?php
$shopping=["tea","bread","milk","sugar"];
?>
```

| Index no.   |       value       |       
|:--:|:-------------:|
|0|"tea"|
|1|"bread"|
|2|"milk"|
|3|"sugar"|

To access a specific element we write the name of the array and the index number in square brackets
```php
<?php
echo $shopping[2]; //milk
?>
```
We can add new items by specifying an index number
```php
<?php
$shopping[5]="butter"; //adds a new item
?>
```
If we don’t specify an index the new data is simply added to the end of the array
```php
<?php
$shopping[]="biscuits"; //add a new item
?>
```
We can concatenate using elements in an array

```php
<?php
echo "Do you like {$shopping[2]} in your {$shopping[0]}?";
?>
```

## Arrays and loops
Often a loop is used to efficiently display the contents of an array

```php
<?php
$shopping=["tea","bread","milk","sugar"];

for($i=0;$i<count($shopping);$i++){
    echo "{$shopping[$i]}<br>"; //outputs tea bread milk sugar with each cycle of the loop
}
?>
```
* The *count()* function is used to count the number of items in the array. There is a better way.....

### The foreach loop
```php
<?php
$shopping=["tea","bread","milk","sugar"];

foreach($shopping as $shopItem)
{
    echo "<p>{$shopItem}</p>"; //outputs tea bread milk sugar each on a separate line
}
?>
```
The *foreach* loop provides an easy way to loop over the contents of an array.

### Associative arrays
Associative array elements aren’t numbered, instead they are labelled. The label is known as a key

| Key   |       value       |       
|:--:|:-------------:|
|"name"|"The Rolling Stones"|
|"formed"|"1962"|
|"location"|"London"|

To create an associative array:

```php
<?php
$nameOfArray=["key"=>"value", "key"=>"value", "key"=>"value"];
?>
```
Here's a specific example:
```php
<?php
$band=["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London"];
?>
```

We access elements using the key instead of an index number
```php
<?php
$band=["name"=>"The Rolling Stones", "formed"=>1962, "location"=>"London"];
echo "<p>{$band['location']}</p>"; // outputs London
$band["genre"]="Rock"; // adds another element
?>
```

### Multi-dimensional arrays
* Arrays can store many different data types, including other arrays
```php
<?php
$countries=[
    ["name"=>"Germany", "capital"=>"Berlin", "population"=>81000000],
    ["name"=>"France", "capital"=>"Paris", "population"=>66000000],
    ["name"=>"Italy", "capital"=>"Rome", "population"=>60000000]
];
echo $countries[1]["population"]; //outputs  66000000
?>

```
We can use a loop to output the values
```php
<?php
foreach($countries as $country)
{

    echo "<p>{$country['name']} has a population of {$country['population']}</p>";
}
?>
```
This would output:
```
Germany has a population of 81000000
France has a population of 66000000
Italy has a population of 60000000

```

### Outputting as a table
We can output the data as an HTML table (or any other HTML structure):
```php
<?php
echo "<table>";
echo "<tr><th>Name</th><th>Population</th><tr>";
foreach($countries as $country)
{

    echo "<tr>";
    echo "<td>{$country['name']}</td>";
    echo "<td>{$country['population']}</td>";
    echo "</tr>";
}
echo "</table>";
?>
```
We would get something like the following (if we add some CSS)
| Name   |       Population       |       
|:--:|:-------------:|
|Germany|81000000|
|France|66000000|
|Italy|60000000|

### Databases and associative arrays
The above example of multi-dimensional arrays is an important one to understand. When we retrive data from a database using PHP, we will receive this data in the form of a multi-dimensional array, with data from each row of the database table stored in a separate associative array.

### Array functions
There are lots of functions that can help us work with arrays e.g. are some examples:
* *count()* Tells us the number of items in an array
* *in_array()* Tells is a value exists in an array
* *array_unshift()* Inserts items at the start of an array
* *sort()* Sorts an array alphabetically or numerically

Look at the recommended reading or php.net for more info. Here are some examples

The function *in_array()* tells us whether an item can be found in an array

```php
<?php
$shopping=array("tea","bread","milk","sugar");
if(in_array("bread", $shopping))
{
    echo "There's bread on the shopping list";
}
?>
```

The function *array_push()* adds an item to an array

```php
<?php
$countries=[
    ["name"=>"Germany", "capital"=>"Berlin", "population"=>81000000],
    ["name"=>"France", "capital"=>"Paris", "population"=>66000000],
    ["name"=>"Italy", "capital"=>"Rome", "population"=>60000000]
];

$countriesVisited=[];
foreach($countries as $country)
{
    if($country["name"]==="France" || $country["name"]==="Italy")
    {
        array_push($countriesVisited,$country);
    }
}
print_r($countriesVisited); //Array ( [0] => France [1] => Italy )
?>
```
### Form processing - checkboxes
One type of form control we haven't looked at so far is the checkbox. Checkboxes allow users to select multiple options from a list. Here's an example of an HTML form that uses checkboxes:

```html
<form action="process-chkboxes.php" method="post">
<fieldset>
	<legend>Which of the following languages have you used?</legend>
	<label for="html">HTML</label>
	<input type="checkbox" name="languages[]" value="html" id="html">
	<label for="css">CSS</label>
	<input type="checkbox" name="languages[]" value="css" id="css">
	<label for="js">JavaScript</label>
	<input type="checkbox" name="languages[]" value="js" id="js">
	<label for="python">Python</label>
	<input type="checkbox" name="languages[]" value="python" id="python">
	<label for="java">Java</label>
	<input type="checkbox" name="languages[]" value="java" id="java">
</fieldset>
<input type="submit" name="submit_btn" value="answer">
</form>
```
This form allows users to select from a list of programming languages. Note that each of the checkboxes has the same value for the name attribute, ```name="languages[]"```. The name is followed by square brackets. This tells the browser to send the selected items as a single 'array like value' to the server.
Here's how we can process this data.

```php
<?php
//process-chkboxes.php
$languages = $_POST["languages"];

foreach($languages as $language)
{
	echo "<p>{$language}</p>";
}
?>
```
## PHP strings
PHP string work a bit like arrays, starting at zero each character in the string is numbered:

```php
<?php
$modStr="CIT2318 Web Design and Programming";
echo "<p>The first character is {$modStr[0]}</p>"; //The first character is C
echo "<p>The tenth character is {$modStr[9]}</p>"; //The tenth character is e
?>
```
PHP features lots of useful string functions
Again see php.net for complete info. Here are some examples:
* *strnlen()* Tells us the number of characters in a string
* *str_word_count()* Tells us the number of words in a string
* *substr()* Cuts out part of a string
* *strpos()* Finds the position of a word within a string
* *trim()* Removes whitespace from the ends of a string

This example use the *str_replace()* function to search through a string and then replace part of it.

```php
<?php
$modStr="CIT2318 Web Design and Programming";
$msg="CII2345 DISP is my favourite module";
echo "<p>{$msg}</p>"; //CII2345 DISP is my favourite module
$msg=str_replace("CII2345 DISP",$modStr,$msg);
echo "<p>{$msg}</p>"; //CIT2318 Web Design and Programming is my favourite module
?>
```
## More info
PHP Arrays : Single, Multi-dimensional, Associative and Object Arrays in PHP 7 by Steve Prettyma
