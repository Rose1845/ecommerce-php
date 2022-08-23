<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>admin page</title>
</head>
<body>
 <?php include 'header.php'
 ?>   
<div class="container">
    <form action="" class="add-product-form"encyte="multipart/form-data" method="post">
        <h3>Add a new product</h3>
        <input type="text"name="p_name" placeholder="enter the product name"class="box"required>
        <input type="number"name="p_price" min="0"placeholder="enter the product price"class="box"required>
        <input type="file"name="p_image"accept="image/png,image/jpg,image/jpeg"class="box"required>
        <input type="submit"value="add the product" name="add_product"class="btn">
    </form>
</div>
<script src="./script.js"></script>
</body>
</html>