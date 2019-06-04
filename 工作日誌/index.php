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
            <div class="col-249">
                <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                    <th scope="col">日期</th>
                    <th scope="col">工單號馬</th>
                    <th scope="col">使用機台</th>
                    <th scope="col">作業數量</th>
                    <th scope="col">製程參數</th>
                    <th scope="col">進站時間</th>
                    <th scope="col">出站時間</th>
                    <th scope="col">目前狀況</th>
                    <th scope="col">目前位置</th>
                     <th scope="col">維護人員</th>
                      <th scope="col">維護時間</th>
                    <th scope="col">刪除</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row["countryName"] ?></td>
                            <td><?= $row["username"] ?></td>
                            <td><?= $row["countryName02"] ?></td>
                            <td><?= $row["continent"] ?></td>
                            <td><?= $row["continent01"] ?></td>
                            <td><?= $row["continent02"] ?></td>
                            <td><?= $row["continent03"] ?></td>
                            <td><?= $row["continent04"] ?></td>
                             <td><?= $row["continent05"] ?></td>
                             <td><?= $row["people"] ?></td>
                              <td><?= $row["time"] ?></td>
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