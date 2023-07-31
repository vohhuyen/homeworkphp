<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex4</title>
</head>
<body>
    <?php
    $dtb = "";
    $kq = "";
    $xl = "";
    $hk1 = "";
    $hk2 = "";
    if (isset($_POST['hk1']) && isset($_POST['hk2']) && $_POST['hk1'] != "" && $_POST['hk2'] != ""){
        $hk1 = $_POST['hk1'];
        $hk2 = $_POST['hk2'];
        $dtb = round(($hk1+$hk2*2)/3,2);
        if ($dtb>=5) $kq = "Được lên lớp"; else $kq = "Không đủ điều kiện lên lớp";
        if ($dtb>=8) $xl = "Giỏi"; 
        else if ($dtb>=6.5) $xl = "Khá"; 
        else if ($dtb>=5) $xl = "Trung bình";
        else $xl = "Yếu";
    }
    ?>
    <form action="ex4.php" method="POST">
        <table>
            <tr>
                <td colspan="2">KẾT QUẢ HỌC TẬP</td>
            </tr>
            <tr>
                <td>Điểm HK1:</td>
                <td>
                        <input type="text" id="hk1" name="hk1" value="<?php 
                                if (isset($_POST['hk1'])){ echo $hk1; }
                                else echo "";
                            ?>"
                        >
                </td>
            </tr>
            <tr>
                <td>Điểm HK2:</td>
                <td>
                    <input type="text" id="hk2" name="hk2" value="<?php
                        if (isset($_POST['hk2'])){ echo $hk2; }
                        else echo "";
                        ?>"
                    >
                </td>
            </tr>
            <tr>
                <td>Điểm trung bình:</td>
                <td>
                    <input readonly="true" type="text" id="dtb" name="dtb" value="<?php echo $dtb; ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả:</td>
                <td>
                    <input readonly="true" type="text" id="kq" name="kq" value="<?php echo $kq;?>">
                </td>
            </tr>
            <tr>
                <td>Xếp loại học lực:</td>
                <td>
                    <input type="text" id="type" name="type" readonly="true" value="<?php echo $xl;?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Submit" value="Xem kết quả">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>