<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from medicament, prescrire where numMedicament = codeMedicament and numMaladie ='".$_GET['codeMaladie']."'");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $unMedicament)
{
    echo "<div class='divUnMedicament'>";
        echo "<h5>".$unMedicament['numMedicament']."</h5>";
        echo "<em>".$unMedicament['nomMedicament']."</em>";
    echo "</div>";
}

?>