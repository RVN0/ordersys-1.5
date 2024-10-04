<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order System</title>
</head>
<body>
    <h1>Welcome to the canteen! Here are the prices</h1>
    <ul>
        <li>Fishball - 30 PHP</li>
        <li>Kikiam - 40 PHP</li>
        <li>Corndog - 50 PHP</li>
    </ul>
    <form action="handleForm.php" method="post">
        <label for="order">Choose your order:</label>
        <select name="order" id="order">
            <option value="Fishball">Fishball</option>
            <option value="Kikiam">Kikiam</option>
            <option value="Corndog">Corndog</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" id="quantity"><br><br>
        <label for="cash">Cash:</label>
        <input type="text" name="cash" id="cash"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
