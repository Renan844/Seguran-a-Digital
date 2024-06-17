<?php 
    include('dbcopy.php');

    $stmt = $pdo->prepare("SELECT * FROM Feedbacks WHERE 1");
    $stmt->execute();

    while($info = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo($info['Nome'] . ': ' . $info['Comentario'] . '<br>');
    }
?>