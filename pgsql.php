<?php
$dbconn = pg_connect("host=10.0.0.4 port=5432 dbname=openshift user=openshift password=4B*y9779hC3UkjRQ");
//connect to a database named "postgres" on the host "host" with a username and password
if (!$dbconn){
echo "<center><h1>Doesn't work =(</h1></center>";
}else
 echo "<center><h1>Good connection</h1></center>";

$query = 'SELECT now()';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
pg_close($dbconn);

?>
