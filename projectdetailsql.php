<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$dbhost = 'qwyvr.cs.odu.edu';
$dbuser = 'handson_web';
$dbpass = 'handsonweb2015';
$dbname = 'handson_web';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');

  echo file_get_contents('php://input');
  $pno = $_REQUEST['id'];
  //$lname = addslashes($_POST['lname']);
$result = $conn->query("SELECT * FROM project where pno=$pno");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["pname"] . '",';
    $outp .= '"abstract":"'   . $rs["abstract"] . '",';
	$outp .= '"client":"'   . $rs["client"] . '",';
	$outp .= '"ptype":"'   . $rs["ptype"] . '",';
	$outp .= '"tused":"'   . $rs["tused"] . '",';
	$outp .= '"funds":"'   . $rs["funds"] . '",';
	$outp .= '"team":"'   . $rs["team"] . '",';
	$outp .= '"publication":"'   . $rs["publication"] . '",';
	$outp .= '"pic":"' . base64_encode($rs["picture"]) . '"}';
    
}
$outp ='{"records1":['.$outp.']}';
$conn->close();

echo($outp);
?>