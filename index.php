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
    <source src="images/bgVideo0.mp4"/>
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
            function getFORMData()
            {
                if (isset($_POST["submit"])) {
                    if (empty($_POST["id"])) {
                        echo "Enter Id";
                    } else if (empty($_POST["brand"])) {
                        echo "Enter Brand";
                    } else if (empty($_POST["model"])) {
                        echo "Enter Model";
                    } else if (empty($_POST["price"])) {
                        echo "enter Price";
                    } else {
                        $postThis = array(
                            'id' => (int)$_POST["id"],
                            'brand' => $_POST["brand"],
                            'model' => $_POST["model"],
                            'price' => (int)$_POST["price"],
                        );

                        $postThis = json_encode($postThis);
                        sendFORMData($postThis);
                    }
                }
            }
            function sendFORMData($postThis){
                $ch = curl_init('http://lcase.ottofredriksson.se/carmodels');
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postThis);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json')
                );

                echo $result = curl_exec($ch);
            }


            ?>
        </p>


    </div>
</div>

</body>
</html>