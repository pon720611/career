<?php
require "dbconfig.php";
    //刪除資料
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        $id = $_GET["id"];
        $sql = "DELETE FROM countries WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        unset($pdo);
        echo "<script>
                alert('刪除成功');
                window.location = 'index.php';
                </script>";
    }
}

    //新增資料
if (isset($_POST["create-btn"])) {
    $countryName = $_POST["country-name"];
    $username = $_POST["username"];
    $countryName02 = $_POST["country-name02"];
    $continent = $_POST["continent"];
    $continent01 = $_POST["continent01"];
    $continent02 = $_POST["continent02"];
    $continent03 = $_POST["continent03"];
    $continent03 = $_POST["continent04"];
    $continent03 = $_POST["continent05"];
    $people = $_POST["people"];
    $time = $_POST["time"];
        //sql指令模板
    $sql = "INSERT INTO countries (countryName, username, countryName02,continent,continent01,continent02,continent03,people,time)
                    VALUE (:countryName,:username,:countryName02,:continent,:continent01,:continent02,:continent03,:people,:time)";
    $stmt = $pdo->prepare($sql);
        //將值傳進去模板
    $stmt->bindParam(":countryName", $countryName);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":countryName02", $countryName02);
    $stmt->bindParam(":continent", $continent);
    $stmt->bindParam(":continent01", $continent01);
    $stmt->bindParam(":continent02", $continent02);
    $stmt->bindParam(":continent03", $continent03);
    $stmt->bindParam(":continent04", $continent04);
    $stmt->bindParam(":continent05", $continent05);
    $stmt->bindParam(":people", $people);
    $stmt->bindParam(":time", $time);
        //執行
    $stmt->execute();
    unset($pdo);
    echo "<script>
                alert('新增成功');
                window.location = 'index.php';
                </script>";


}
?>