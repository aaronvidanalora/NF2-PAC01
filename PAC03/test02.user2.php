<?php

require("class.user.select.php");
require("class.pdofactory.php");

$strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
$objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres", array());
$objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$Usuarios = 3;

for ($i = 1; $i <= $Usuarios; $i++) {

    $objUser = new User($objPDO, $i);

    print "ID: " . $objUser->getID() . "<br />";
    print "El nombre es " . $objUser->getFirstName() . "<br />";
    print "El apellido es " . $objUser->getLastName() . "<br />";
    print "El nombre de usuario es " . $objUser->getUsername() . "<br />";
    print "La contraseña MD5 es " . $objUser->getPassword() . "<br />";
    print "La dirección de correo electrónico es " . $objUser->getEmailAddress() . "<br />";
    print "La fecha del último inicio de sesión es " . $objUser->getDateLastLogin() . "<br />";
    print "La hora del último inicio de sesión es " . $objUser->getTimeLastLogin() . "<br />";
    print "La fecha de creación de la cuenta es " . $objUser->getDateAccountCreated() . "<br />";
    print "La hora de creación de la cuenta es " . $objUser->getTimeAccountCreated() . "<br />";
    print "<br/>";
}
?>
