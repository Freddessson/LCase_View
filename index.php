<?php
include 'includes/getFORMData.php';
include 'includes/sendFORMData.php';
    ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <!-- Connecting the HTML to the style.css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <title>LCase View</title>
</head>
<body>
<video autoplay muted loop id="bgVideo">
    <!-- Source https://pixabay.com/sv/videos/bakgrund-moln-skog-9584/ -->
    <source src="media/bgVideo0.mp4"/>
</video>


<div class="wrapper">
    <div class="contentBox whiteBgTransperant">

        <h1 class="centerTxt">Welcome</h1>
        <p class="centerTxt">
            Create new carmodel
        </p>
        <form class="carmodel" method="post">
            <input class="inputField boxSizing" name="id" placeholder="Id" type="number"/>
            <br/>
            <input class="inputField boxSizing" name="brand" placeholder="Brand" type="text"/>
            <br/>
            <input class="inputField boxSizing" name="model" placeholder="Model" type="text"/>
            <br/>
            <input class="inputField boxSizing" name="price" placeholder="Price" type="number"/>
            <br/>
            <input class="formBtn boxSizing marginLeft25 greenBgTransperant" type="submit" name="submit"
                   value="New carmodel">
        </form>
        <p class="centerTxt">
            <?php
            getFORMData();
            ?>
        </p>


    </div>
</div>

</body>
</html>