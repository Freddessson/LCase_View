<?php
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