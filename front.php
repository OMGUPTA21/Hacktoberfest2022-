<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRONT PAGE</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="post">
            <select name="category" id="category">
                <option value="chose">option</option>
                <option value="1">ADMIN</option>
                <option value="2">TEACHER</option>
                <option value="3">STUDENT</option>
            </select>
            <input type="text"  name="user" id="user" placeholder="Enter your your Username :">
            <input type="password" name="pass" id="pass" placeholder="Enter your your Password :"> 
            <input type="submit" value="LOGIN">
        </form>

    </div>
</body>
</html>
