<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$dbhost = 'qwyvr.cs.odu.edu';
$dbuser = 'handson_web';
$dbpass = 'handsonweb2015';
$dbname = 'handson_web';
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die('Error connecting to mysql');

  echo file_get_contents('php://input');
  $sno = $_REQUEST['id'];
  
  //$lname = addslashes($_POST['lname']);
$result = $conn->query("SELECT * FROM team where sno=$sno");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"name":"'  . $rs["fname"] . '",';
    $outp .= '"lname":"'   . $rs["lname"] . '",';
	$outp .= '"mname":"'   . $rs["mname"] . '",';
	$outp .= '"skills":"'   . $rs["skills"] . '",';
	$outp .= '"about":"'   . $rs["about"] . '",';
	$outp .= '"education":"'   . $rs["education"] . '",';
	$outp .= '"program":"'   . $rs["program"] . '",';
	$outp .= '"major":"'   . $rs["major"] . '",';
	$outp .= '"joinodu":"'   . $rs["joinodu"] . '",';
	$outp .= '"joinlab":"'   . $rs["joinlab"] . '",';
	$outp .= '"leftlab":"'   . $rs["leftlab"] . '",';
	$outp .= '"presentwork":"'   . $rs["presentwork"] . '",';
	$outp .= '"previous":"'   . $rs["previous"] . '",';
	$outp .= '"experience":"'   . $rs["experience"]  . '",';
	$outp .= '"projects":"'   . $rs["projects"] . '",';
	$outp .= '"email":"'   . $rs["email"] . '",';
	$outp .= '"phone":"'   . $rs["phone"]  . '",';
	$outp .= '"website":"'   . $rs["website"] . '",';
	$outp .= '"git":"'   . $rs["git"]  . '",';
	$outp .= '"fburl":"'   . $rs["fburl"] . '",';
	$outp .= '"gurl":"'   . $rs["gurl"] . '",';
	$outp .= '"lnurl":"'   . $rs["lnurl"] . '",';
	$outp .= '"working":"'   . $rs["working"] . '",';
	$outp .= '"pic":"' . base64_encode($rs["picture"]) . '"}';
    
}
$outp ='{"records1":['.$outp.']}';
$conn->close();

echo($outp);
?>