<?php
$db = mysql_connect('localhost', 'login', 'password');

mysql_select_db('bddmedicament',$db);

$sql = 'SELECT numMedicament, nomMedicament FROM medicament';

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

echo 'Liste des medicaments non prescits';

while($data = mysql_fetch_assoc($req))
    {
    echo '<b>'.$data['numMedicament'].' '.$data['nomMedicament'];
    }

mysql_close();
?> 