<?php
require("../Arithmetic.php");

if (isset($_POST["opr"])) {
    $arithmetic = new Arithmetic(intval($_POST['a']), intval($_POST["b"]), $_POST["opr"]);
} else {
    $arithmetic = new Arithmetic();
}
?>
<html>

<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <h1 align="center">Arithmetic Program</h1>
    <hr>
    <form action="" method="post">
        <table border="1" cellpadding="5" cellspacing="5" width="600" align="center">
            <tr align="center">
                <td>First number</td>
                <td>Second Number</td>
                <td>Answer</td>
            </tr>
            <tr align="center">
                <td><input name="a" type="text" id="a" value="<?php echo $arithmetic->getA(); ?>" /></td>
                <td><input name="b" type="text" id="b" value="<?php echo $arithmetic->getB(); ?>" /></td>
                <td><input type="text" id="answer" value="<?php echo $arithmetic->getAnswer(); ?>" readonly></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="opr" value="+">+</button>
                    <button type="submit" name="opr" value="-">-</button>
                    <button type="submit" name="opr" value="*">*</button>
                    <button type="submit" name="opr" value="/">/</button>
                    <button type="submit" name="opr" value="%">%</button>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>