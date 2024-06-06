$mysqli = new mysqli('localhost','admin','password';'watchprooducts');
if($mysqli ->connect_error != 0)
{
echo $mysqli->connect_error ; 
exit();
}
$result = $mysqli->query("SELECT * FROM products LIMIT 0 , 4");