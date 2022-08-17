<?php

$usuarios = [];

$usuarios[] = [
    "id" => 1,
    "nombre" => "Pablo",
    "usuario" => "admin",
    "clave" => password_hash("123", PASSWORD_DEFAULT),
];