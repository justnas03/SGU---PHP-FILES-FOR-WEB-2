<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ve Hinh Tam Giac</title>
</head>
<body>
    <center>
    <form action="vehinhtamgiac.php" method="post">
        <h1>Vẽ hình tam giác bằng PHP</h1>
        N = <input type="text" name ="nInput"> <br>
        Tam Giac Vuong: <input type="radio" value = "TamGiacVuong" name="input" id="idTamGiacVuong">
        Tam Giac Can: <input type="radio" value = "TamGiacCan" name="input" id="idTamGiacCan">
        <button type="submit"> Ve </button>
    </form>
    <i><b>Lưu ý:</b> Chiều cao N là số nguyên dương</i>
    </center>
</body>
</html>