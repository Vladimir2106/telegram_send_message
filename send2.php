<?php 
$name=$_POST['name1'];
$tel=$_POST['tel1'];
$token="6040500838:AAEtQ9BsgCU3tMo9uubkbAM8CIa_nQoez1E";
$chat_id="-798017949";

// https://api.telegram.org/bot6040500838:AAEtQ9BsgCU3tMo9uubkbAM8CIa_nQoez1E/getUpdates это ссылка по которой отслеживаются все изменения боте

//это масив в которые помещается информация с переменных выше
$info=array(
    'Имя клиента - ' => $name,
    '    Телефон клиента - ' => $tel,
);

// с помощью цикла перебирается масив
foreach($info as $key => $value){
    $txt.= $key.$value;
};

//функция отправки в телеграм сообщения
$senttelega = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$txt}","r");
//$senttelega = fopen ("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$txt}","r");


if ($senttelega){
    header('location: <?php echo get_template_directory_uri(); ?>/index.php');
}
else {
    echo ('Сообщение не отправлено');
}

?>





