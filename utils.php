<?php
function getMyDonuts($file)
{
    $json = file_get_contents($file);
    return json_decode($json, true);
}

function displayMyDonuts($donuts)
{
    foreach ($donuts as $donut) {
        echo '<div class="col-md-4 text-center">
        <img src="' . $donut['image'] . '" style="height:200px"/>
        <h1>' . $donut['name'] . '</h1>
        <h2 class="text-success">&pound;' . $donut['price'] . '</h2>
        <button type="button" class="btn btn-success btn-lg">
            Add to cart <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </button>
    </div>';
    }
}