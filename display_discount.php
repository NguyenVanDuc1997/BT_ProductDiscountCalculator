<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $description=$_POST['description'];
    $price=$_POST['price'];
    $discountPercent=$_POST["discount"];
    $discountAmount= $price *($discountPercent*0.01);
    $discountPrice=$price-$discountAmount;
}
?>
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
        <label>Product Description: </label>
        <span><?php echo $description ?></span><br/>
        <label>Price: </label>
        <span>$<?php echo $price ?></span><br/>
        <label>Discount Percent: </label>
        <span><?php echo $discountPercent ?>%</span><br/>
        <label>Discount Amount: </label>
        <span>$<?php echo $discountAmount ?></span><br/>
        <label>Discount Price: </label>
        <span>$<?php echo $discountPrice ?></span><br/>
    </div>
</body>
</html>
