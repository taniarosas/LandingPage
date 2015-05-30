<!DOCTYPE html>
<html>
<head>    
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href='http://fonts.googleapis.com/css?family=Allerta+Stencil' rel='stylesheet' type='text/css'>


</head>
<body class="form1">

<?php
    require_once(__DIR__ . "/./model/config.php");
 ?>
<div id="bar1"> 
<div id="contact">Contact Information</div>
<div id="la">
    <hr>
        <span>
    </hr>   
            <A id="la" HREF = "index.php">Home</A>
            <A id="la" HREF = "projects.php">Projects</A>
    <hr>        
        </span>
    </hr>
</div>


<!-- form takes in information and send it to the table -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <!-- label display in front of the text box -->
        <label for="first">First Name: </label>
        <!-- input box occupied only on one line -->
        <input type="text" name="first" />
    </div>
    <div>
        <!-- label display in front of the text box -->
        <label for="last">Last Name: </label>
        <!-- input box occupied only on one line -->
        <input type="text" name="last" />
    </div>
    <div>
        <!-- label display in front of the text box -->
        <label for="email">Email: </label>
        <!-- input box occupied only on one line -->
        <input type="text" name="email" />
    </div>
    
    <div>
        <!-- another box label post -->
        <label for="post">Post: </label>
        
        <!-- text area allows to type a lot a text and span many lines   -->
        <!-- text area can show on multiple lines and can be expanded -->
        <textarea name="post"></textarea>
    </div>
        
    <div>
        <!-- create a button called submit -->
        <button type="submit">Submit</button>
    </div>

</form>

</footer>
</div>
</body>
</html>