<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form New Account</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label for="first-name">First Name: </label> <br><br>
        <input id="first-name" name="first-name" type="text"> <br><br>
        <label for="last-name">Last Name:</label> <br><br>
        <input type="text" id="last-name" name="last-name"> <br>
        <label for=""></label><br>
        <label for="gender">Gender:</label> <br><br>
        <input type="radio" name="gender" value="0">Male <br>
        <input type="radio" name="gender" value="1">Female <br>
        <input type="radio" name="gender" value="2">Other <br><br>
        <label for="nasionality">Nasionality:</label> <br><br>
        <select name="" id="">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select> <br><br>
        <label for="language">Language Spoken:</label> <br><br>
        <input type="checkbox" name="language" value="bahasa indonesia">Bahasa Indonesia <br>
        <input type="checkbox" name="language" value="english">English <br>
        <input type="checkbox" name="language" value="other">Other <br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea id="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
