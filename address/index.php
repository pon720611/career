<?php
include "header.php";
require "dbconfig.php";
    //sql指令
$sql = "SELECT * FROM countries";
    //將sql指令(模板)在伺服器做準備
$stmt = $pdo->prepare($sql);
    //執行指令
$stmt->execute();
    //拿到資料
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
unset($pdo);
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                    <th scope="col">工號</th>
                    <th scope="col">姓名</th>
                    <th scope="col">電話</th>
                    <th scope="col">刪除</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row["countryName"] ?></td>
                            <td><?= $row["continent"] ?></td>
                            <td><?= $row["capital"] ?></td>
                            <td><a href="dbfunction.php?action=delete&id=<?= $row['id'] ?>"><i class="far fa-trash-alt"></i></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>