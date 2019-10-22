<?php
$recepient = "name671@inbox.ru";
$sitename = "beldgu";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$address = trim($_POST["address"]);
$problem = trim($_POST["problem"]);

$thm  = 'Заказ звонка';
$thm  = "=?utf-8?b?". base64_encode($thm) ."?=";

$headers = "Content-Type: text/html; charset=utf-8\r\n";
$headers .= "From: <beldgu.by>\r\n"; 
$headers .= "Reply-To: beldgu.by\r\n";

$message = "<table>
               <tr>
                <td>Имя: $name</td>
               </tr>
               <tr>
                <td>Телефон: $phone</td>
              </tr>
              <tr>
                <td>Адрес: $address</td>
              </tr>
              <tr>
                <td>Проблема: $problem</td>
              </tr>
             </table>";
             
$pagetitle = "Новая заявка с сайта \"$sitename\"";


if(mail($recepient, $thm, $message, $headers, '-fbeldguby@beldgu.by')){
  echo $response = 'Сообщение отправлено';
}else
  echo $response = 'Ошибка при отправке';
