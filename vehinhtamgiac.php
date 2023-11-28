<?php
    $n = $_POST["nInput"];
    // echo $n;

    $loai = $_POST["input"];
    //echo $loai;

     if ($loai == "TamGiacVuong") {
        $s ="";
        $index = 0;
        $sum_height = 0;
        $sum_left = 0;
        $bottom_edge = 0;
        $num = 0;
        $s .= "<center>";
        $s .= "<table border = 1>";
            for ($i = 1; $i <= $n; $i++){
                $s .=  "<tr>";
                    for ($j = 0; $j < $i; $j++) {
                        if ($i % 2 != 0) {
                            $s .= '<td style="background-color:red">'. $num .'</td>';
                        } else {
                            $s .= '<td style="background-color:yellow">'. $num . '</td>';
                        }
                       
                        if ($j == $i-1) {
                            $sum_left += $num;
                        }

                        if ($j == 0) {
                            $sum_height += $num;
                        }

                        if ($i == $n) {
                            $bottom_edge += $num;
                        }
                        $num++;
                    }   
                $s .= "</tr>";
            }
        $s .= "</table>";
        $s .= "<center>";
       
        $tinh = "<center><p>Tổng chiều cao : " . $sum_height . "</p><p>Tổng đường chéo : " . $sum_left . "</p> <p>Tổng cạnh đáy : " . $bottom_edge . "</p><center>";
        echo $s;
        echo $tinh;
     } else {
        $s = "";
        $index = 0;
        $sum_left = 0;
        $sum_right = 0;
        $bottom_edge = 0;
        $sum_height = 0;
        $s .= "<center>";
            $s .= "<table border='1'>";
                for ( $i = 1; $i <= $n; $i++){
                    $s .= "<tr>";
                    $start = $n - $i;
                    $width = ($n*2) - 1;
                    $count = 0;
                    $countTamGiac = 0;
                    do {
                        if ($count >= $start && $countTamGiac < (($i*2)-1)){
                            if ($count == $n-1) $sum_height += $index;
                            if ($count == $start) $sum_left += $index;
                            if ($count - $start == ($i*2)-2) $sum_right += $index;
                            if ($i == $n) $bottom_edge += $index;
                            if ($i % 2 == 0) {
                                $s .='<td style="background-color:yellow ">'. $index .'</td>';
                            } else {
                                $s .='<td style="background-color:red">'. $index .'</td>';
                            }
                            $index++;
                            $countTamGiac++;
                        }else {
                            $s .= "<td></td>";
                        }
                        $count++;
                    } while ($count < $width);
                    $s .= "</tr>";
                }
            $s .= "<table>";
        $s .= "</center>";    
        $tinh = "<center><p>Tổng chiều cao : " . $sum_height . "</p><p>Tổng đường chéo trai :" . $sum_left . "</p> <p>Tổng duong cheo phai :" . $sum_right . "</p>"."<p>Tong canh day: ". $bottom_edge ."</p>"."<center>" ;
        echo $s;
        echo $tinh;
     }

?>









