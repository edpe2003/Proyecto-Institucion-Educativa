<?php
session_start();
include('../../LogicaConexion/model/chat.php');
include('../../LogicaConexion/model/conexion.php');
$chat = new Chat;
echo $chat->VerChatDisponible();