<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <!-- File demo là file nhập, nhập xong bấm submit thì nhảy qua file welcom.php -->
    <form action="welcome.php" method="post">
    Name: <input type="text" name = "name"> <br>
    <br>
    Email: <input type="email" name="email" id="idEmail"> <br>
    <br>
    Select a Song:
    <select name="select" id="idSelect">
        <option value=""></option>
        <option value="Song 1">Song 1</option>
        <option value="Song 2">Song 2</option>
    </select>
    <br>
    <input type="submit">
    </form>
</body>
</html>