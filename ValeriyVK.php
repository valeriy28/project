<?php
$request = 'http://api.vk.com/method/users.get?uids=id160640085,';
$response = file_get_contents($request);//зачитываем файл
$info = array_shift(json_decode($response)->response);//Принимаем закодированную в JSONстроку

//var_dump($info->photo_200); // URL фотографии
//var_dump($info->status); // Статус
//var_dump($info->status);
echo $info->first_name."<br>"; 
echo $info->last_name; 