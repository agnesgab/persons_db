<?php
session_start();
 ?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="container">
<div class="text-container">
    <h1>Register of Persons</h1>
    <p>Building dummie DB</p>
</div>


        <form method="post" action="includes/register_inc.php">
            <input type="text" name="name" placeholder="Name" required="required">
            <input type="text" name="surname" placeholder="Surname" required="required">
            <input name="id-number" placeholder="ID number" required="required" maxlength="11">
            <button type="submit" name="submit">Sign Up</button>
        </form>

</div>

</html>
