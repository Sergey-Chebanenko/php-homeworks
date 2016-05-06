<?php
$age = rand(1,99);
echo "Ваш возможный возраст:  $age. Я угадал?";
?>
<p>Нет? Тогда, введите ваш возраст и получите совет:</p>
<form action="" method="post">
    <input type="text" name="age" placeholder="Возраст" >

    <p>
        <input type="submit" name="submit" value="Calc">
    </p>
</form>
<?php
if(isset($_REQUEST['submit']))
{
    $age=$_REQUEST['age']; //Возраст
    $x = null;
    if ($age >= 18 and $age < 60) {
        $x = "Вам ещё работать и работать";
    } elseif ($age >= 1 and $age < 18) {
        $x = "Вам ещё рано работать";
    } elseif ($age >= 60) {
        $x = "Вам пора на пенсию";
    } else {
        $x = "Неизвестный возраст";
    }
    echo $x;
}
?>
