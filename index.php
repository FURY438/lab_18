<?php
echo '<h3>Москалик Василь, СП-41 (11.11.2022)</h3>';
echo '<br>';
echo '<img src="Screenshot_1.png"/>';
echo '<form action="action.php" method="post">
<label> Логін
    <input type="text" name="login" placeholder="Введіть логін:" >
    </label>
    <label> Колір
    <input type="color" name="color">
    </label>
    <input type="submit" name="task_2" value="Виконати">
    <label><p>Логін повинен містити  латинські букви, цифри, тире і нижнє тире.<br>Довжина має бути в межах від 2 до 20 символів!!!</label>
</from>';

?>
