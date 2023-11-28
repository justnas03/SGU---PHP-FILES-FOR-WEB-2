<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?> <br>
<?php
    $s = "Chua chon bai hat";
    switch($_POST["select"]){
        case 'Song 1': ?>
            NEVA GONNA GIB U UP ! NEVER GUNNA LET YOU DOWN : <br>
            <iframe width="1479" height="546" src="https://www.youtube.com/embed/fqqjeE-tnTg" title="Lần Đầu Tiên Nhóm Diễn Hài Sân Khấu | Vlog Thầy Phong" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <iframe width="300" height="300" src="https://www.youtube.com/embed/DLzxrzFCyOs" title="Rick Astley - Never Gonna Give You Up [HQ]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <?php 
            break;
        case 'Song 2':?>
            Con yeu ba chau yeu ba lam.
        <?php    
            break;
        default:
            echo $s;
            break; 
    }

?>
</body>
</html>