<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Create task</title>

</head>

<body>
<h1> Create a task </h1>


<form action="save-task.php" method="post">
<fieldset>
        <label for="to-do">To-Do:</label>
        <input name="to-do" id="to-do" />
    </fieldset>
<!-- Record Label: <input type="text" name="recordLabel"><br> -->
<fieldset>
        <label for="time">Time required:</label>
        <input name="time" id="time"/>
        <!-- <p>Please select your gender:</p> -->
            <input type="radio" name="time" value="15min"> 15min <br>
            <input type="radio" name="time" value="1h"> 1h<br>
            <input type="radio" name="time" value="3h"> 3h
    </fieldset>

<fieldset>
        <label for="urgency">Urgency:</label>
        <input name="urgency" id="urgency" />
 </fieldset>
 <!-- //drop-down -->

<fieldset>
        <label for="other">Involved others people:</label>
        <input name="other" id="other" type="checkbox" />


 <button> Save </button>
 
</form>

</body>
</html>
