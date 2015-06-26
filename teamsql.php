<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$dbhost = 'qwyvr.cs.odu.edu';
$dbuser = 'handson_web';
$dbpass = 'handsonweb2015';
$dbname = 'handson_web';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');

$result = $conn->query("SELECT sno,fname,lname,picture FROM team");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["fname"] . '",';
    $outp .= '"lname":"'   . $rs["lname"]        . '",';
    $outp .= '"id":"'   . $rs["sno"]        . '",';
	$outp .= '"pic":"' . base64_encode($rs["picture"]) . '"}';
    
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>