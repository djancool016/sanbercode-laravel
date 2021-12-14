<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanbercode Day 01</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <!-- BEGIN FORM -->
    <form action="welcome" method="post">
        @csrf
        <p>First name:</p>
        <input type="text" name="firstname" id="first">
        <p>Last name:</p>
        <input type="text" name="lastname" id="last">
        <p>Gender:</p>
        <input type="radio" name="gender" id="gender1" value="male"><label for="gender1">Male</label><br>
        <input type="radio" name="gender" id="gender2" value="female"><label for="gender2">Female</label><br>
        <input type="radio" name="gender" id="gender3" value="other"><label for="gender3">Other</label>
        <p>Nationality</p>
        <select name="nationlist" id="nation">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapura">Singapura</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Australia">Australia</option>
        </select>
        <p>Language Spoken</p>
        <input type="checkbox" name="language" id="language1" value="Bahasa Indonesia"><label for="language1">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" id="language2" value="English"><label for="language2">English</label><br>
        <input type="checkbox" name="language" id="language3" value="Other"><label for="language3">Other</label>
        <p>Bio:</p>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit">
    </form>
    <!-- END FORM -->
</body>
</html>