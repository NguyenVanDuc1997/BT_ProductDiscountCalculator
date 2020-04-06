<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Product Discount Calculator</h1>
        <form action="display_discount.php" method="post">
            <div>
                <lable>Product Description:</lable>
                <input type="text" name="description"><br><br>

                <lable>List Price:</lable>
                <input type="text" name="price"><br><br>

                <lable>Discount Percent:</lable>
                <input type="text" name="discount">%<br><br>
            </div>
            <div>

                <input type="submit" value="Calculate Discount">
            </div>

        </form>
    </div>
</body>
</html>