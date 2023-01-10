<?php 

$username=$_POST["id"];
$password=$_POST["password"];
// echo $username."<br>";
// echo $password."<br>";

$json_url = "http://10.144.1.55/makassar3/api/ec/login/auth?id=$username&password=$password";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
if (empty($data)) {
    echo 0;
}
else if ($data) {
    session_start();
    $_SESSION["id"] = $data[0]['id'];
    $_SESSION["name"] = $data[0]['name'];
    $_SESSION["witel"] = $data[0]['witel'];
    $_SESSION["foto"] = $data[0]['foto'];
    $_SESSION["hp"] = $data[0]['hp'];
    echo 1;
    // echo $data[0]['id'];
}
?>