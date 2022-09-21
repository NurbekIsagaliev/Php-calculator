<?php

if (!(empty($_POST["first"]) || empty($_POST["second"]))) {

    $result =

        match ($_POST["operation"]) {


            "+" => $_POST["first"] + $_POST["second"],
            "-" => $_POST["first"] - $_POST["second"],
            "*" => $_POST["first"] * $_POST["second"],
            "/" => $_POST["first"] / $_POST["second"],
            "^" => pow($_POST["first"], $_POST["second"]),
        };

    echo ('Результат вычисления:' . $result);
} else {
    echo ("Не заполнено  первое  или второе  число или оба  числа!");
}
