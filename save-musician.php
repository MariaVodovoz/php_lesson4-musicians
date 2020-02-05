<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Save-Musician</title>
</head>
<body>
   <?php
   // store the form inputs in variables
   $name = $_POST['name'];
   $recordLabel = $_POST['recordLabel'];
   $ranking = $_POST['ranking'];
   $photo = $_POST['photo'];
   $city = $_POST['city'];
   $solo =false;
    if(!empty($_POST['solo'])){
        $solo=true;
    }

   // display the inputs back to screen
   //echo 'Name: . $name .<br/>Record Label: .$recordLabel .<br/>Ranking: .$ranking .<br/>Solo: .$solo ..<br/>Photo: .$photo .<br/>City: .$city .' ;
//    echo '<h4 class=someclass>Name: ' . $name . '</h4><h4> class="someclass"> Record Label: ' . $recordLabel. ' </h4><h4> class="someclass">Ranking: ' . $ranking. ' </h4><h4> class="someclass">Solo: ' . $solo. ' </h4><h4> class="someclass">Photo: ' . $photo. ' </h4><h4> class="someclass">City: ' . $city. ' </h4>' ;

   // connect to the db
   $db = new PDO('mysql:host=172.31.22.43; dbname=Rich100', 'Rich100', 'Vda787-KJ_');

   // set up SQL INSERT with placeholders
   $sql = "INSERT INTO musicians (name, recordLabel, ranking, solo, photo, city) VALUES (:name, :recordLabel,:ranking, :solo, :photo, :city );

    -- create a command variable to parameters value
   $cmd = $db->prepare($sql);
   $cmd->bindParam (':name', $name, PDO::PARAM_STR, 100);
   $cmd->bindParam (':recordLabel', $recordLabel, PDO::PARAM_STR, 50);
   $cmd->bindParam (':ranking', $ranking, PDO::PARAM_INT);
   $cmd->bindParam (':solo', $solo, PDO::PARAM_BOOL);
   $cmd->bindParam (':photo', $photo, PDO::PARAM_STR, 50);
   $cmd->bindParam (':city', $city, PDO::PARAM_STR, 50);

--    // execute the save method
   $cmd->execute();

--    // disconnect
   $conn = null;

 echo 'Musician Saved';

   ?>

</body>
</html>