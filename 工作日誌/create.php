<?php
include "header.php";
?>

<div class="container mt-10">
    <div class="row justify-content-center">
            <div class="col-8">
            <form action="dbfunction.php" method="post">
            <div class="form-group">
                <label class="col-form-label" for="country-name">日期</label>
                <input type="date" class="form-control" name="country-name">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="username">工單號碼</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="country-name02">使用機台</label>
                <input type="text" class="form-control" name="country-name02">
            </div>
            <div class="form-group">
                <label class="col-form-label" for="continent">作業數量</label>
                <!-- <input type="text" class="form-control" name="selc"> -->
                <select name="continent" id="">
            <option value="500">500</option>
            <option value="250">250</option>
            <option value="單張">單張</option>
            </select>
            </div>
            <div class="form-group">
                <label class="col-form-label" for="continent01">製程參數</label>
                <input type="text" class="form-control" name="continent01">
            </div>
        
            <div class="form-group">
                <label class="col-form-label" for="continent02">進站時間</label>
                <input type="text" class="form-control" name="continent02">
            </div>
        <div class="form-group">
                <label class="col-form-label" for="continent03">出站時間</label>
                <input type="text" class="form-control" name="continent03">
            </div>
             <div class="form-group">
                <label class="col-form-label" for="continent03">目前狀況</label>
                <input type="text" class="form-control" name="continent04">
            </div>
             <div class="form-group">
                <label class="col-form-label" for="continent03">目前位置</label>
                <input type="text" class="form-control" name="continent05">
            </div>
                <div class="form-group">
                <label class="col-form-select" for="people">維護人員</label>
            <select name="people" id="">
            <option value="彭旭成">彭旭成</option>
            <option value="陳隆昇">陳隆昇</option>
            <option value="張書瑋">張書瑋</option>
            <option value="錢美華">錢美華</option>
            <option value="陳忠志">陳忠志</option></select>
            </div>

                <div class="form-group">
                <label class="col-form-label" for="time">維護時間</label>
                <input type="time" class="form-control" name="time">
                <!-- <select size="1" id="people" name="people"> -->
            </div>
            <!-- <div>
            <span style="font-size:12pt;color:#FF0000">西元年</span>
            <input type="text" id="people" name="people" size="5" maxlenght="4">
            <select size彭旭成"1" id="people" name="people">
            </div> -->



            <button type="submit" class="btn btn-warning" name="create-btn">新增</button>
            <a href="index.php" class="btn btn-outline-warning">取消</a>
            </form>
        </div>
    </div>
</div>