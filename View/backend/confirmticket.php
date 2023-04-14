<?php
    include 'C:/xampp/htdocs/web/Controller/TicketC.php';
    $db = config::getConnexion();
    $query = $db->prepare(
    'UPDATE ticket SET Confirmation = :cn WHERE IDTicket= :idc');
    $query->execute([
        'cn' => 'Confirm',
        'idc' => $_GET["IDTicket"]
    ]);
    echo $query->rowCount() . " records UPDATED successfully <br>";
    header('Location:index.php');
?>