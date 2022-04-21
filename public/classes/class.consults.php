<?php 
include 'class.config.php';
include 'class.functions.php';

$db = getDB();

if (isset($_GET['cAccion']) == 'doContact') {
	$email = $_POST['email'];
	$nombre = $_POST['nombre'];
	$razon = $_POST['razon'];
	$mensaje = $_POST['mensaje'];

	$token = doToken(20);

	$insert_contact = $db->prepare("INSERT INTO contact (Nombre, Email, Razon, Mensaje, send_date, token, reply) VALUES ('$nombre', '$email', '$razon', '$mensaje', CURRENT_TIMESTAMP, '$token', 0)");
	$insert_contact->execute();

	$reply = array(
		'reply' => 'Mensaje enviado con éxito.'
	);
	echo json_encode($reply);
}
?>