<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fecha = $_POST['fecha'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$quantity = $_POST['quantity'];
$comuna = $_POST['comuna'];
$sintoma = $_POST['sintoma'];
$enfermedad = $_POST['enfermedad'];

if ($nombres == "" or $apellidos == "" or $fecha == "" or $phone == "" or $email == "" or $gender == "" or $quantity == ""
or $comuna == "" or $sintoma == "" or $enfermedad == "" ) {
    echo "Por favor complete todos los campos requeridos.";
} else {
    echo 'nombres: ' . $nombres;
    echo '<br>apellidos: ' . $apellidos;
    echo '<br>fecha: ' . $fecha;
    echo '<br>phone: ' . $phone;
    echo '<br>email: ' . $email;
    echo '<br>gender: ' . $gender;
    echo '<br>quantity: ' . $quantity;
    echo '<br>comuna: ' . $comuna;
    echo '<br>sintoma: ' . $sintoma;
    echo '<br>enfermedad: ' . $enfermedad;

}
?>