# PHP Beginners Course 1

Thank you to all that attended, below are some snippets to help you from the course.

## How to get json and read
```php
$json = file_get_contents('json/donuts.json');
$donuts = json_decode($json, true);
```

## How to loop an array
```php
function displayMyDonuts($donuts)
{
    foreach ($donuts as $donut) {
        echo '<div class="col-md-4 text-center">
        <img src="' . $donut['image'] . '" height="200px"/>
        <h1>' . $donut['name'] . '</h1>
        <h2 class="text-success">&pound;' . $donut['price'] . '</h2>
        <button type="button" class="btn btn-success btn-lg">
            Add to cart <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
        </button>
    </div>';
    }
}
```

## If else statements
```php
$a = true;
if ($a) {
  echo 'true';
} else {
  echo 'false';
}
```
