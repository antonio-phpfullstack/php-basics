<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Information</title>
</head>
<body>

<form method="post" action="http://localhost:8000/11-receive-php-information.php">
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required>

    <button type="submit">Submit</button>
</form>
</body>
</html>