<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Musicians</title>

</head>

<body>
<h1> Musicians List</h1>

<?php 

// 1. Connect to the AWS db, using the credentials you received via email:  Host – mysql7.loosefoot.com / Database – w20 / Username – comp1006 / Password – helpme20 

// $servername = "mysql7.loosefoot.com"; 
// $username = "comp1006"; 
// $password = "helpme20"; 

// $db = new PDO("mysql:host=$servername;dbname=w20", $username, $password); 

$db = new PDO('mysql:host=172.31.22.43; dbname=Maria200422061', 'Maria200422061', 'b5MnB8QPhD');
// 2. Write the SQL Query to read all the records from the persons table 

$sql = "SELECT * FROM musicians"; 

// 3. Create a Command variable $cmd then use it to run the SQL Query 
$cmd = $db->prepare($sql); 
$cmd->execute(); 

// 4. Use the fetch() method of the PDO Command variable to store the data into a variable called $persons.  See https://www.php.net/manual/en/pdostatement.fetchall.php for details. 

$musicians = $cmd->fetchAll(); 

// create HTML table

echo '<table border ="1"><thead><th>Name</th><th>Record Label</th><th>Ranking</th><th>Solo</th><th>Photo</th><th>City</th></thead>';

// 5. Use a foreach loop to iterate (cycle) through all the values in the $persons variable.  Inside this loop, use an echo command to display the name of each person.  See https://www.php.net/manual/en/control-structures.foreach.php for details. 

foreach ($musicians as $value) { 

echo '<tr><td>' . $value['name'] .'</td><td>' .  $value['recordLabel'] . '</td><td>' . $value['ranking'] . '</td></tr>'  . $value['solo'] . '</td></tr>'  . $value['photo'] . '</td></tr>' . $value['city'] . '</td></tr>' ; 
} 
 
 echo '</table>';
// 6. Disconnect from the database 
$db = null; 

?> 
  
</body>
</html>
