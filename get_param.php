<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="includes/style.css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <title> shani levi</title>
    </head>

    <body>
        <section>
            wellcom
            <?php
                $user = $_GET["username"];
                $pass = $_GET["password"];

                
                if ($user == "shani" && $pass == "111" ) {
                    echo "<h1 class='server'>HELLO  " . $user . "</h1>";
                    echo "<p class='server'> You are beautiful ! </p>";

                } 
                else {
                    echo "<h1 class='server'>User Unknown </h1>"; 
                    echo "<p class='server'> Try agin </p>";
                }
            ?>
        </section>
    </body>

</html>