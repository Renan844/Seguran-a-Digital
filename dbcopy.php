<?php 

$dsn = 'mysql:host=localhost;dbname=id22181035_feedbacks;charset=utf8';
$usuario = 'id22181035_launan';
$senha = 'VCH574avab&&%&#';

try {
$pdo = new PDO($dsn, $usuario, $senha);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Erro de conexão: ' . $e->getMessage();
exit();
}

?>