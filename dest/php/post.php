<?php
$data = $_POST;

$address1 = "a@redstaragency.ru";
$address2 = "rodin@redstaragency.ru";
$message = '';
$error = 0;
if(isset($data['name'])){
    $message.='<p><b>Имя клиента:</b> '.$data['name'].'</p>';
}
if(isset($data['phone'])){
$message.='<p><b>Телефон клиента:</b> '.$data['phone'].'</p>';
}else{
$error = 1;
}

if(isset($data['email'])){
$message.='<p><b>Email:</b> '.$data['email'].'</p>';

}else{
$error = 1;
}
$message.="\n<hr>\n";

$sub='«Тестовое задание Белибов».';
$from='progtest@redstaragency.ru';
$headers  = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Тестовое задание <".$from."> \r\n";
$headers .= "Reply-To: ".$address2."\r\n";

if($error != 0){
echo '{"result":0,"msg":"Проверьте правильность заполнения полей!"}';
}elseif(mail ($address1,$sub,$message,$headers)) {
echo '{"result":1,"msg":"Заявка успешно отправлена! Ожидайте."}';
}else{
echo '{"result":0,"msg":"Возникла ошибка. Попробуйте позднее"}';
}