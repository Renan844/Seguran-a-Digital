<?php 

include('dbcopy.php');

$nome = $_POST["u"];
$avaliacao = $_POST["a"];
$comentario = $_POST["c"];

$sql = "INSERT INTO Feedbacks (Nome, Avaliacao, Comentario) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nome, $avaliacao, $comentario]);

echo("Seus dados foram cadastrados corretamente. Volte sempre $nome");

?>