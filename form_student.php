<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>貧困學生補助經費申請表</h1>
        申請人（學生）: <input name="student">
        學號: <input name="id"><hr>
    <h3>家庭狀況</h3>
    <p>父</p>姓名: <input name="dad_name">
    <p>母</p>姓名: <input name="mom_name">
    <hr>
    <label for="help_money"">申請補助種類</label>
    <select id="help_money">
        <option value="1">低收入戶</option>
        <option value="2">中低收入戶</option>
        <option value="3">家庭突發因素</option>
    </select>
    <br>
    <input type="submit" name="Submit" value="送出"/>
</body>
</html>