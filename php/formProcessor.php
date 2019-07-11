<?php
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
   die("error");
}
function fileContentsToVar($file,$customerGreatings){
    ob_start();
    require($file);
    return ob_get_clean();
}

// Structure of array: $arr["NAME_OF_FORM_FIELD"] = array(0..1=>"Field name translations",2=>"Field value")
$fields = array(
	"name"	=>	["Имя","Name",false],
	"phone"	=>	["Телефон","Phone",false],
	"email"	=>	["Email","Email",false],
	"city"	=>	["Город","City",false],
	"age"	=>	["Возраст","Age",false],
	"hasbusiness"	=>	["Бизнес","Business",false],
	"investammount"	=>	["Объем инвестиций","Investicii",false],
);
$thankYouPage = false;
foreach ($_REQUEST as $reqFieldName => $value) {
	if ($reqFieldName == "thank_you")
	{
		$thankYouPage = true;
		continue;
	}
	if (isset($fields[$reqFieldName]))
		$fields[$reqFieldName][2] = strip_tags($value);
}

// Create mail data
$headers  = "From: mysite <info@chalbar.ru>" . "\r\n";
$headers .= "Reply-To: info@chalbar.ru". "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8;\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

$sendto = "chalbar.ru@gmail.com"; //chalbar.info@gmail.com

$subject = "Заявка с лендинга «Chalbar»";

$phone = "";
$nameOrCity = "";
$htmlBody  = "<html><body style='font-family:Arial,sans-serif;'5>";
$htmlBody .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка с лендинга «Chalbar»</h2>\r\n";
foreach ($fields as $key => $val) {
	if (!$val[2] || empty($val[2])) continue;
	$htmlBody.='<p><strong>'.$val[0].":</strong> ".trim($val[2])."</p>\r\n";
}
$htmlBody .= "</body></html>";

$goodStatus = ($thankYouPage) ? 2 : 1;

if (mail($sendto, $subject, $htmlBody, $headers))
{
	if (file_exists("customerEmailTPL.php") && $goodStatus == 1 && !empty($fields["email"][2]))
	{
		// Можно назначить произвольный заголовок для письма клиенту
		$customerSubject  = "Вы подали заявку на лендинге «Chalbar»";
		$customerGreatings = (!empty($fields["name"][2])) ? "Добрый день, ".$fields["name"][2]."." : "Добрый день!";
		$customerBody = fileContentsToVar("customerEmailTPL.php",$customerGreatings);
		mail($fields["email"][2], $customerSubject, $customerBody, $headers);
	}
	echo $goodStatus;
}
else{
	echo 1;
}
