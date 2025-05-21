<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user input</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form action="gradeCalc.php" method="POST">
        <label for="">Name</label>
        <input type="text" name="myname"> <br><br>
        <label for="">Physics</label>
        <input type="number" name="mark[phy]" > <br><br>
        <label for="">Chemistry</label>
        <input type="number" name="mark[chem]" > <br><br>
        <label for="">Math</label>
        <input type="number" name="mark[math]" > <br><br>
        <label for="">Biology</label>
        <input type="number" name="mark[bio]" > <br><br>
        <label for="">English</label>
        <input type="number" name="mark[eng]" > <br><br>
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

