<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<h1>Forms with PHP</h1>
<form action="020-receive-form.php" method="post">
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>

    <fieldset>
        <legend>Area of Interest</legend>
        <input type="checkbox" name="interest[]" value="sport"> Sport <br>
        <input type="checkbox" name="interest[]" value="music"> Music <br>
        <input type="checkbox" name="interest[]" value="movies"> Movies <br>
        <input type="checkbox" name="interest[]" value="books"> Books <br>
        <input type="checkbox" name="interest[]" value="other"> Other
    </fieldset>
    <br>
    <label for="source-of-referral">How did you find us?</label>
    <select id="source-of-referral" name="source-of-referral">
        <option value="internet">Internet</option>
        <option value="friend">Friend</option>
        <option value="advertisement">Advertisement</option>
        <option value="social_media">Social Media</option>
        <option value="other">Other</option>
    </select>
    <br>
    <fieldset>
        <legend>Gender</legend>
        <input type="radio" name="gender" value="male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>
    </fieldset>
    <label for="message">Message</label><br>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Send">
</form>
</body>
</html>