<?php

#require_once('inc/time_please.php');

#time_please();

$handle = odbc_connect('DRIVER={iSeries Access ODBC Driver};DATABASE=S105145E;SYSTEM=172.16.160.65;HOSTNAME=172.16.160.65;PORT=446;PROTOCOL=TCPIP','test','test');
if($handle === false) die('failed to connect');

#time_please('db connected');


#$res = odbc_exec($handle, "SELECT AIAIVVRDTA.VBTPVW.VTNRVW, '' AS test, AIAIVVRDTA.VBTPVW.ADNRVW, '' AS ADARAD, '' AS ADNRAD, '' AS NAM1AD
#FROM AIAIVVRDTA.VBTPVW WHERE (((AIAIVVRDTA.VBTPVW.VTNRVW)='083498'))");
/*$skz = "14EUR045206";
$res = odbc_exec($handle, "SELECT SSKZSC AS KZ, SCNRSC AS SN FROM AIAIVVRDTA.SCADSC WHERE SCNRSC='$skz'");

#time_please('simple select executed');
$num = 0;
$j = 0;

while($myRow = odbc_fetch_array($res)){
    echo "Schadennummer " . $myRow["SN"] . "<br>";
    echo "Schließkennzeichen" . $myRow["KZ"] . "<br>";
    $num++;
}
#time_please($num.' results iterated');
*/
$res = @odbc_exec($handle, "SELECT WOMSIF AS BESCHREIBUNG, BNNMIF, TLCDIF, WRDEIF AS KZ FROM AIAIVVRESD.IPIFWR WHERE BNNMIF='SSKZ' AND TLCDIF='D'");

while($myRow = odbc_fetch_array($res)){
    echo "KZ " . $myRow["KZ"] . "<br>";
    echo "BE " . $myRow["BESCHREIBUNG"] . "<br>";
}