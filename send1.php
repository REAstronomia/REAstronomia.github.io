 <?php 

$name = $_POST['name'];
$last = $_POST['last']; 
$nivel = $_POST['nivel'];
$year = $_POST['year'];
$instituto = $_POST['instituto'];
$area = $_POST['area'];
$mail = $_POST['mail'];
$titulo = $_POST['titulo']; 
$resumen = $_POST['abstract'];
$aop = $_POST['aop'];
$poster = $_POST['poster'];
$primera = $_POST['primera'];
$apoyo = $_POST['apoyo'];
$Header = 'From: '.$mail ." \r\n";
$Header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$Header .= "Mime-Version: 1.0 \r\n";
$Header .= "Content-Type: text/plain";

$Mensaje .= "Nombre :" .$name." \r\n";
$Mensaje .= "Apellido :" .$last." \r\n";
$Mensaje .= "Nivel: " .$nivel. " \r\n";
$Mensaje .= "Año de inicio: ".$year." \r\n";
$Mensaje .= "Instituto: ".$instituto." \r\n";
$Mensaje .= "Área: ".$area." \r\n";
$Mensaje .= "Mail: ".$mail." \r\n";
$Mensaje .= "Titulo: ".$titulo." \r\n";
$Mensaje .= "Resumen: ".$resumen." \r\n";
$Mensaje .= "Estado: ".$aop." \r\n";
$Mensaje .= "Poster: ".$poster." \r\n";
$Mensaje .= "Novato: ".$primera." \r\n";
$Mensaje .= "Apoyo: ".$apoyo." \r\n";


$Mensaje .= "Enviado el ".date('d/m/Y', time());

$Para = 'reaastromx@gmail.com';
$Asunto = 'Inscripción';

mail($Para, $Asunto, utf8_decode($Mensaje), $Header);

echo "Mensaje enviado correctamente";


?> 