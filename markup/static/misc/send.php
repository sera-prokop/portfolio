<?
if ($_POST['check'] != 'secretcode') exit('Spam decected');
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['mail'])&&$_POST['mail']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
  $to = 'sera.prokop@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
  $subject = 'Обратная связь'; //Загаловок сообщения
  $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name'].'</p>
                        <p>E-mail: '.$_POST['mail'].'</p>
                        <p>Комментарий: '.$_POST['comment'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
  $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
  $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
  mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
