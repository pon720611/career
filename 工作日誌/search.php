<?php
include "header.php";
require "dbconfig.php";
if (isset($_GET["search-btn"])) {
    $searchTarge = $_GET["search-target"];
    $sql = "SELECT * FROM countries 
            WHERE binary countryName = :search
            OR binary continent = :search
            OR binary capital = :search";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":search", $searchTarge);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    unset($pdo);
}
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
                    <?php if ($stmt->rowCount() > 0) : ?>
                        <?php foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $row["countryName"] ?></td>
                                <td><?= $row["continent"] ?></td>
                                <td><?= $row["capital"] ?></td>
                                <td><a href="dbfunction.php?action=delete&id=<?= $row['id'] ?>"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                            <tr>
                                <td colspan='4'>查無資料</td>
                            </tr>
                    <?php endif; ?>
                </tbody>
                </table>
                <a href="index.php" class="btn btn-primary">回首頁</a>
            </div>
        </div>
    </div>
    
</body>
</html>
