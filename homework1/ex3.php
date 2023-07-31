<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3.PHP</title>
</head>
<body>
    <?php
    if (isset($_POST['dai']) && isset($_POST['rong']) && $_POST['dai'] != "" && $_POST['rong'] != ""){
        $dai = $_POST['dai'];
        $rong = $_POST['rong'];
        $dt = $dai*$rong;
    }
    ?>
    <form action="ex3.php" method="POST">
        <table>
            <tr>
                <td colspan="2">DIỆN TÍCH HÌNH CHỮ NHẬT</td>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td>
                    <input type="text" id="dai" name="dai" value="<?php 
                            if (isset($_POST['dai'])){ echo $_POST["dai"]; }
                            else echo "";
                        ?>"
                    >
                </td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td>
                    <input type="text" id="rong" name="rong" value="<?php
                            if (isset($_POST['rong'])){ echo $_POST["rong"]; }
                            else echo "";
                        ?>"
                    >
                </td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td>
                    <input type="text" id="dt" name="dt" value="<?php 
                            if (isset($dt)){ echo $dt; }
                            else echo "";
                        ?>"
                    >
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Submit" value="Tính">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>