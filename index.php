<?php
    require_once "vehiculo.php";
    require_once "coche.php";
    require_once "moto.php";

    $coche1=new Coche("Opel","Rojo",105000,4);
    $moto1=new Moto("Tamaha","Negro",65000,125);
    $coche2=new Coche("Audi","Blanco",150000,4);

    echo "Datos coche1: Marca: ".$coche1->__get("marca");
    $coche1->__set("kilometros",1040000);
    echo "Marca: ".$coche1->__get("marca");

    echo "Numero de instancias de vehiculo: ".Vehiculo::getTotalVehiculos();
?>