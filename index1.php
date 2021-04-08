<?php
    require("new-connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Validation</title>

        <link rel="stylesheet" href="style0.less">
    </head>
    <body>
        <div class="container">
    <?php  
            if(isset($_SESSION['message']) and ($_SESSION['valid'] == 'no'))
            {
                echo "<div class='error'>" . $_SESSION['message'] . "</div>";
                unset($_SESSION['message']);
            }
    ?>
            <h3 class='text'>Please enter your email address:</h3>
            <img src='v8.jpg' alt='v88'/>
            <form action="processs.php" method="post">
                <input type="text" name="email" placeholder="email address">
                <input type="submit" name="email-submit" class='submit'>
            </form>
        </div>
    </body>
</html>
<?php
session_destroy();
?>