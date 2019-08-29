<?php
include 'cnx.php';
$sql = $cnx->prepare("select * from maladie, prescrire where numMaladie = codeMaladie and numMedicament ='".$_GET['codeMedicament']."'");
$sql->execute();
foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $uneMaladie)
{
    echo "<div class='divUneMaladie'>";
        echo "<h5>".$uneMaladie['numMaladie']."</h5>";
        echo "<em>".$uneMaladie['nomMaladie']."</em>";
    echo "</div>";
}

?>