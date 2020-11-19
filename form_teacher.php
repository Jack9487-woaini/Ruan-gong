<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>貧困學生補助經費申請表</h1>
        <input name="student" value="申請人（學生）">
        <input name="id" value="學號"><hr>
    <h3>家庭狀況</h3>
    <p>父</p><input name="dad_name" value="姓名">
    <p>母</p><input name="mom_name" value="姓名">
    <hr>
    <label for="help_money"">申請補助種類</label>

    <select id="help_money">
        <option value="1">低收入戶 </option>
        <option value="2">中低收入戶</option>
        <option value="3">家庭突發因素</option>
    </select>
    <hr>
    <input name="teacher_hi_reason" value="導師訪視說明">
    <input name="teacher_sign" value="導師簽章"><hr>
</body>
</html>