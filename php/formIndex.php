<?php
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
    header('Location: '.'/');
}
define('SHOW_PAGE', true);
require_once $_SERVER['DOCUMENT_ROOT'].'/include/prolog_before.php';

$responce = [
    'status' => 'error',
    'message' => 'Что то пошло не так',
    'errors' => [],
];

$formName = strip_tags($_POST['form-name']);
$formName = $formName ? : 'Заявка с лендинга «Chalbar»';
$form = $_POST['form'];
$arErrors = [];

if (!empty($form)){

    $name = strip_tags($form['name']);
    if (empty($name)){
        $arErrors['name'] = 'Имя указано не верно';
    }

    $city = strip_tags($form['city']);
    if (empty($city)){
        $arErrors['city'] = 'Город указан не верно';
    }

    $phone = clearPhone($form['phone']);
    $phone = checkPhone($phone) ? $phone : '';
    if (empty($phone)){
        $arErrors['phone'] = 'Телефон указан не верно';
    }

    $email = $form['email'];
    $email = filter_var($email, FILTER_VALIDATE_EMAIL) ? $email : '';
    if (empty($email)){
        $arErrors['email'] = 'E-mail указан не верно';
    }

    $politic = $form['politic'];
    $politic = ($politic === 'on') ? $politic : '';
    if (empty($politic)){
        $arErrors['politic'] = 'Не принято согласие на обработку персональных данных';
    }
}

if (empty($arErrors)){

    // Create mail data
    $headers  = 'From: mysite <info@chalbar.ru>'. "\r\n";
    $headers .= 'Reply-To: info@chalbar.ru'. "\r\n";
    $headers .= 'MIME-Version: 1.0'. "\r\n";
    $headers .= 'Content-Type: text/html;charset=utf-8;'. "\r\n";
    $headers .= 'X-Priority: 3'. "\r\n";
    $headers .= 'X-Mailer: PHP'.PHP_VERSION. "\r\n";

    $sendto = 'chalbar.ru@gmail.com'; //chalbar.info@gmail.com

    $subject = $formName;

    $nameOrCity = '';
    $htmlBody  = '<html><body style="font-family:Arial,sans-serif;">';
    $htmlBody .= '<h2 style="font-weight:bold;border-bottom:1px dotted #ccc;">'.$formName.'</h2>';
    foreach ($form as $key => $val) {
        $htmlBody.='<p><strong>'.$key.':</strong> '.$val.'</p>';
    }
    $htmlBody .= '</body></html>';

    if (mail($sendto, $subject, $htmlBody, $headers)) {
        $responce = ['status' => 'success'];
    }

}else{
    $responce['message'] = 'Ваши данные не прошли валидацию';
    $responce['errors'] = $arErrors;
}

echo json_encode($responce);