<?php

require_once 'db_conn.php';

if (isset($_POST['save']))      //When the button name 'save' is click on
{
    $name = $_POST['name'];     //gets data from the input name 'name'
    $link = $_POST['link'];     //gets data from the input name 'link'

    $sql_query = "INSERT INTO objectslist (name, link)
    VALUES ('$name', '$link')";           //This is where all the data we collected are stored into MySql database

    //If statements to make sure that the connection and our inputs are successfully inserted into the database
    if (mysqli_query($conn, $sql_query))
    {
        echo "New object entry inserted successfully!";
    }
    else
    {
        echo "Error" . mysqli_error($conn);
    }
    
    mysqli_close($conn);        //making sure to close the connection with MySql

    header("Location: Home2.php");   //Sending the user back to the login screen
    die();

}
?>
