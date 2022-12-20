<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
<head>
    <title>Đăng Ký Thêm</title>
    <meta charset="utf-8">
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        body {
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }
        label {
            border: 1px solid #8fb7e4;
            width: 120px;
            display: inline-block;
            text-align: center;
            font-size: 1.1rem;
            font-family: 'Times New Roman';
            background: #87cefa;
            margin-right: 20px;
            padding: 9px;
        }

        .labelOut {
            border: 1px solid #ffffff;
            width: 200px;
            display: inline-block;
            text-align: left;
            font-size: 1.1rem;
            font-family: 'Times New Roman';
            background: #ffffff;
            margin-right: 20px;
            padding: 9px;
        }


        form {
            margin: 25px auto;
            padding: 10px;
            border: 2px solid #8fb7e4;
            width: 520px;
        }

        input {
            border: 1px solid #8fb7e4;
            font-size: 0.8rem;
            font-weight: 100;
            font-family: 'Times New Roman';
            padding: 6px;
            width: 200px;
        }

        .input1 {
            width: 120px;
            height: 39px;
            font-size: 1.3rem;
            background: #87cefa;
            border: 2px solid #8fb7e4;
            margin: 20px 0px 20px 0px;
            border-radius: 5px;
        }

        .input2 {
            width: 80px;
            height: 30px;
            font-size: 1.2rem;
            background: #87cefa;
            border: 2px solid #8fb7e4;
            border-radius: 5px;
            margin-right: -300px;
        }

        .button1 {
            width: 214px;
            padding: 8px;
            font-size: 1rem;
            font-family: 'Times New Roman';
            font-weight: 1;
            background: #ffffff;
            border-radius: 5px;
            border: 1px solid #8fb7e4;
        }

        .css  {
            margin: 20px 0;
        }

        .count_student {
            text-align: left;
        }

        th, td {
            text-align: left;
            padding: 10px;
        }

        .btn_action {
            height: 30px;
            width: 60px;
            border: 1px solid #ffffff;
            border-radius: 5px;
            background-color: #8fb7e4;
        }

        
    </style>
</head>
<body>
    <form action="regist_student.php" method="POST">    
        <div class="css">
            <label class="text">Khoa</label>
            <select class="button1" name="phankhoa">
                <?php
                    $kName = array("", "Khoa học máy tính", "Khoa học vật liệu");
                    $kValue = array("", "MAT", "KDL");
                    foreach ($kName as $k1) {
                        echo '<option>' . $k1 . '</option>';
                    }
                ?>
            </select>
        </div>
        <div class="css">
            <label class="text">Từ khóa</label>
            <input class="input" type="text" name="tukhoa">
        </div>
        <input type="submit" name="btn_timkiem" value="Tìm kiếm" class="input1">
        <div class="count_student">
            Số sinh viên tìm thấy:  XXX
        </div>
        <div class="add_student">
            <input type="submit" name="btn_them" value="Thêm" class="input2">
        </div>
        <div>
            <table>
                <tr>
                    <th>No</th>
                    <th>Tên sinh viên</th>
                    <th>Khoa</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Nguyễn Văn A</td>
                    <td>Khoa học máy tính</td>
                    <td>
                        <input type="submit" name="btn_xoa" class="btn_action" value="Xóa">
                        <input type="submit" name="btn_sua" class="btn_action" value="Sửa">
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Trần Thị B</td>
                    <td>Khoa học máy tính</td>
                    <td>
                        <input type="submit" name="btn_xoa" class="btn_action" value="Xóa">
                        <input type="submit" name="btn_sua" class="btn_action" value="Sửa">
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nguyễn Hoàng C</td>
                    <td>Khoa học vật liệu</td>
                    <td>
                        <input type="submit" name="btn_xoa" class="btn_action" value="Xóa">
                        <input type="submit" name="btn_sua" class="btn_action" value="Sửa">
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Đinh Quang D</td>
                    <td>Khoa học vật liệu</td>
                    <td>
                        <input type="submit" name="btn_xoa" class="btn_action" value="Xóa">
                        <input type="submit" name="btn_sua" class="btn_action" value="Sửa">
                    </td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>