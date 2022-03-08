<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container" style="margin-top: 50px">

        <?php

        if (isset($_POST['submit'])) {
            $num1 = $_POST['number1'];
            $num2 = $_POST['number2'];

            $looped = $num2;
            $i = 1;
            while ($looped <= $num1) {
                if ($looped >= $num1) {
                    break;
                }
                $looped += $num2;
                $i++;
                if ($looped > $num1) {
                    $i--;
                }
            }
            $total = $i;

            echo "<h3>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} hasilnya {$total}</h3>";
        }
        ?>

        <form method="post" action="3_operator_logic.php">
            <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />
            <select name="operation">
                <option value="dibagi">Bagi</option>
            </select>
            <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
            <input name="submit" type="submit" value="Hitung" class="btn btn-primary" />
        </form>

    </div>

</body>

</html>