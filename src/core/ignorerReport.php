<?php
require_once 'sessionManager.php';
require_once 'mysql_connection.php';
if (isset($_GET['avis'])){


    $avis = $_GET['avis'];
    $conn = getConnection();
    $conn->select_db('leProjet');
    $quary = "UPDATE avis SET isReportedBinary = 0 where avis = '$avis'";
    mysqli_query($conn, $quary);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>