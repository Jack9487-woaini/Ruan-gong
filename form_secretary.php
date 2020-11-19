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
    申請補助種類: <br><input name="support_type"><br>1.低收入戶 <br>2.中低收入戶 <br>3.家庭突發因素
    <hr>
    導師訪視說明: <input name="teacher_hi_reason"><br>
    導師簽章: <input name="teacher_sign">
    <hr>
    <h3>秘書審核</h3>
    審核結果:<br><input type ="checkbox" value="1" name="support">准予補助<input name="money">元<br>
            <input type ="checkbox" value="2" name="no_support">未符合補助條件
    <hr>
    審查意見: <input name="secretary_verify_comment value" ><br>
    秘書簽章: <input name="secretary_sign">
    <hr>
    <br>
    <input type="submit" name="Submit" value="送出"/>
</body>
</html>