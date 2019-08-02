<?php

$handle = odbc_connect('DRIVER={iSeries Access ODBC Driver};DATABASE=S105145E;SYSTEM=172.16.160.65;HOSTNAME=172.16.160.65;PORT=446;PROTOCOL=TCPIP','test','test');
if($handle === false) die('failed to connect');

echo "HIER KOMMT QUATSCH REIN!";

$res = @odbc_exec($handle, "SELECT WOMSIF AS BESCHREIBUNG, BNNMIF, TLCDIF, WRDEIF AS KZ FROM AIAIVVRESD.IPIFWR WHERE BNNMIF='SSKZ' AND TLCDIF='D'");

while($myRow = odbc_fetch_array($res)){
    echo "KZ " . $myRow["KZ"] . "<br>";
    echo "BE " . $myRow["BESCHREIBUNG"] . "<br>";
}