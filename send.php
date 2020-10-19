<?php
    $to = 'busforward@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $message = '
    <html>
        <head>
            <title>' . $subject . '</title>
        </head>
        <body>
            <h2>' . $subject . '</h2>
            <p>Контактное лицо: ' . $name . '</p>
            <p>E-mail: ' . $_POST['email'] . '</p>
            <p>Телефон: ' . $_POST['tel'] . '</p>
        </body>
    </html>';
    $headers = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: ATM <info>\r\n"; //Наименование и почта отправителя
    if (mail($to, $subject, $message, $headers)) {
        // include 'thanks.html';
    } else {
        // require 'thanks.html';
        echo "error";
    }
?>
