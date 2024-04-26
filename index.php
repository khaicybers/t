<?php
//    $arr = [
//        1 => 2,
//        2 => 3,
//        3 => 5,
//        4 => 9,
//        5 => 8
//    ];
//    foreach ($arr as $key => $value){
//        echo $key . " " . $value ."<br>";
//    }
?>

<!--<table>-->
<!--    <tr>-->
<!--        <td>-->
<!--            <ul style="background-image: url('./img/Hinh - BT2.jpg')">-->
<!--                --><?php
////                    for($i=1;$i<=10;$i++){
//////                        echo "<li>Vòng lặp thứ".$i."</li>";
////                        echo "<li>Vòng lặp thứ{$i}</li>";
////                    }
////                ?>
<!---->
<!--                --><?php
////                for($i=1;$i<=10;$i++){ ?>
<!--                        <li style="color: #fff; background-color: red">Vòng lặp thứ--><?php ////echo $i; ?><!--</li>-->
<!--                --><?php
////                }
////                ?>
<!---->
<!--                --><?php
//                $i = 1;
//                while ($i<=10){ ?>
<!--                    <li style="color: #fff; background-color: red">Vòng lặp thứ--><?php //echo $i; ?><!--</li>-->
<!--                --><?php
//                    $i++;
//                }
//                ?>
<!--            </ul>-->
<!--        </td>-->
<!--    </tr>-->
<!--</table>-->

<?php
//    for($i=1;$i<=2;$i++){ ?>
<!--        <img style="width: 50%; height: 50%" src="img/--><?php //echo $i ?><!--.jpg">-->
<?php
//    }
//?>

<!--<table border="1px" bordercolor="red" style="border-collapse: collapse;">-->
<!--    <thead>-->
<!--        <tr>-->
<!--            <th>STT</th>-->
<!--            <th>Ảnh</th>-->
<!--            <th>Tên</th>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        --><?php //for($i=1;$i<3;$i++){ ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $i ?><!--</td>-->
<!--            <td><img style="width: 10%; height: 10%" src="img/--><?php //echo $i ?><!--.jpg"></td>-->
<!--            <td>Hình ảnh --><?php //echo $i ?><!--</td>-->
<!--        </tr>-->
<!--        --><?php //} ?>
<!--    </tbody>-->
<!--</table>-->

<?php
//    $mang = str_split("ABD");
//    foreach ($mang as $key => $value){
//        echo $value;
//}
    $mang = [1,3,6]; // 0 => 1, 1 => 3, 2 => 6
//    echo count($mang); //3
//    asort($mang); // sap xep tang dan
//    print_r($mang);
//    arsort($mang); // sap xep tang dan
//    print_r($mang);
//    ksort($mang);
//    print_r($mang);
//    krsort($mang); // sap xep theo key giam dan
//    print_r($mang) // 2 => 6, 1 => 3, 0 => 1
//    implode(",", $mang); // noi cac phan tu trong mang bang ky tu noi => string
//    print_r($mang);
//    $str = implode(",", $mang); // string
//    print_r($str);
//    $new_str = explode(",", $str); // array
//    print_r($new_str);
//    if(in_array(5, $mang)){
//        echo "ton tai";
//    }
//    else{
//        echo "khong ton tai";
//    }
//    if(array_key_exists(2, $mang)){
//        echo "ton tai";
//    }
//    else{
//        echo "khong ton tai";
//    }
//    $mang = [3,2,8];
//    array_shift($mang); // xoa dau
//    array_pop($mang); // xoa cuoi
//    array_unshift($mang, 9); // them dau
//    array_push($mang, 5); // them cuoi
//    print_r($mang); // 0 => 9, 1 => 2. 2 => 5
//    $a = 10.25;
//    echo round($a, 1); // 10.3
//    echo "<br>";
//    echo ceil($a); // 11
//    echo "<br>";
//    echo floor($a); // 10
//    $b = 1500000;
//    echo number_format($b);
//    $str = " abc de";
//    echo strlen($str); // 7
////    $new_str = str_replace(" ", "", $str);
//    $new_str = trim($str);
//    echo $new_str;
//    $dt = date("Y-m-d H:i:s"); //
//    echo $dt;
//    $dt = "1992-02-01";
//    $new_dt = date("d/m/Y", strtotime($dt));
//    echo $new_dt;

//    function swap(&$a, &$b){
//        $c = $a;
//        $a = $b;
//        $b = $c;
//    }
//    $a = 2;
//    $b = 3;
//    echo "Before:<br>";
//    echo "a={$a}<br>";
//    echo "b={$b}<br>";
//    swap($a,$b);
//    echo "After<br>";
//    echo "a={$a}<br>";
//    echo "b={$b}";

?>


<!--        <h1 class="bg-primary">Lorem ipsum</h1>-->
<!--        <table class="table table-bordered table-hover">-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>Key</th>-->
<!--                    <th>Value</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                --><?php
//                    $mang = [4,6,8,9,11];
//                    for($i=0;$i<count($mang);$i++){
//                ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $i; ?><!--</td>-->
<!--                    <td>--><?php //echo $mang[$i]; ?><!--</td>-->
<!--                </tr>-->
<!--                --><?php //} ?>
<!--            </tbody>-->
<!--            <tfoot>-->
<!--                <tr>-->
<!--                    <td><b>Total:</b></td>-->
<!--                    <td>--><?php //echo array_sum($mang); ?><!--</td>-->
<!--                </tr>-->
<!--            </tfoot>-->
<!--        </table>-->
<!--        <table class="table table-bordered table-hover">-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>Name</th>-->
<!--                    <th>Email</th>-->
<!--                    <th>Phone</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--                --><?php
//                    $mang = [
//                        ["Name" => "Nguyễn Huy Hoàng", "Email" => "hoangnh@gmail.com", "Phone" => "098..."],
//                        ["Name" => "...", "Email" => "...", "Phone" => "..."],
//                        ["Name" => "...", "Email" => "...", "Phone" => "..."],
//                        ["Name" => "...", "Email" => "...", "Phone" => "..."],
//                        ["Name" => "...", "Email" => "...", "Phone" => "..."],
//                        ["Name" => "...", "Email" => "...", "Phone" => "..."],
//                        ["Name" => "...", "Email" => "...", "Phone" => "..."],
//                        ["Name" => "Trần Tiến Đạt", "Email" => "datnt@gmail.com", "Phone" => "094..."],
//                    ];
//                    foreach($mang as $value){
//                ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $value["Name"]; ?><!--</td>-->
<!--                    <td>--><?php //echo $value["Email"]; ?><!--</td>-->
<!--                    <td>--><?php //echo $value["Phone"]; ?><!--</td>-->
<!--                </tr>-->
<!--                --><?php //} ?>
<!--            </tbody>-->
<!--        </table>-->
<!--        <table class="table table-bordered table-hover">-->
<!--            <tbody>-->
<!--                --><?php
//                    function _cuu_chuong($number=5){ // tham so mac dinh
//                        for($i=1;$i<=10;$i++){
//                            echo "<tr>";
//                                for($j=1;$j<=$number;$j++){
//                                    echo "<td>";
//                                    echo $j." x ".$i." = ".$i*$j;
//                                    echo "</td>";
//                                }
//                            echo "</tr>";
//                        }
//                    }
//                    _cuu_chuong(10);
//                ?>
<!--            </tbody>-->
<!--        </table>-->
<!--        --><?php
//            function _print($string, $in_hoa = false){
//                if($in_hoa == true){
////                    echo strtoupper($string);
////                    echo mb_strtoupper($string, "utf-8");
//                    return mb_strtoupper($string, "utf-8");
//                }
//                else{
////                    echo strtolower($string);
//                    return strtolower($string);
//                }
//            }
////            _print("Hoàng Văn Bảo");
//            echo _print("Hoàng Văn Bảo");
////            _print("Hoàng Văn Bảo", false);
////            _print("Hoàng Văn Bảo", true);
//            echo _print("Hoàng Văn Bảo", true);
//        ?>
<!--        --><?php //include "header.php" ?>
<!--        <h3>This is a homepage</h3>-->
<!--        --><?php //include_once "footer.php" ?>
<!--        --><?php //include_once "footer.php" ?>

<!--        --><?php //session_start(); ?>
<!--        --><?php //if($_SESSION["isLogin"] == 0){ ?>
<!--        <form action="login.php" method="get">-->
<!--            <label for="txtUserName">Username: </label>-->
<!--            <input class="form-control" id="txtUserName" name="txtUserName" type="text">-->
<!--            <br>-->
<!--            <label for="txtPassword">Password: </label>-->
<!--            <input class="form-control" id="txtPassword" name="txtPassword" type="password">-->
<!--            <button type="submit" class="btn btn-primary">Sign in</button>-->
<!--        </form>-->
<!--        --><?php //} else{ ?>
<!--        <h1>Bạn đã đăng nhập thành công</h1>-->
<!--        --><?php //} ?>
<!--        --><?php
//            echo $_REQUEST["txtUserName"];
//            echo $_REQUEST["txtPassword"];
//        ?>

<?php include "header.php"; # relative link ?>
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, index!</h1>
            <p>Contents ...</p>
            <p>
                <a class="btn btn-primary btn-lg">Learn more</a>
            </p>
        </div>
    </div></div>
<?php include "footer.php"; ?>

