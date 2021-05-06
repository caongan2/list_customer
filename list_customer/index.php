<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid red;
        }
    </style>
</head>
<body>
<table>
    <caption><h1>Danh sách khách hàng</h1></caption>
    <thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php
    $customerList = [
        "1" => [
            "ten" => "Ninh Lan Ngoc",
            "ngaysinh" => "1983-08-20",
            "diachi" => 'Ha Noi',
            "anh" => "images/img1.jpg"
        ],
        "2" => [
            "ten" => "Duong Lan Ngoc",
            "ngaysinh" => "1983-08-20",
            "diachi" => 'Ha Noi',
            "anh" => "images/img2.jpg"
        ],
        "3" => [
            "ten" => "Ninh Van Duong",
            "ngaysinh" => "1983-08-20",
            "diachi" => 'Ha Noi',
            "anh" => "images/img3.jpg"
        ]

    ];
    ?>


    <tbody>
    <?php foreach ($customerList as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['ten'] ?></td>
            <td><?php echo $value['ngaysinh'] ?></td>
            <td><?php echo $value['diachi'] ?></td>
            <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"</td>
        </tr>
    <?php endforeach; ?>
    </tbody>
    </thead>
</table>
</body>
</html>


