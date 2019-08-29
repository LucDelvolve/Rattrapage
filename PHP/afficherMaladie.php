<?php
$db = mysql_connect('localhost', 'login', 'password');

mysql_select_db('bddmedicament',$db);

$sql = 'SELECT numMaladie, nomMaladie FROM maladie';

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

echo 'Liste des maladies';

while($data = mysql_fetch_assoc($req))
    {
    echo '<b>'.$data['numMaladie'].' '.$data['nomMaladie'];
    }

mysql_close();
?> 