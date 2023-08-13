<?

$driver = 'mysql';
$host = 'localhost';
$db_name = 'SneakStore';
$db_user = 'root';
$db_pass = 'mysql';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

try {
    $pdo = new PDO (
        "$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options
    );
}
catch (PDOException $i) {
    die("Connect error");
}

#region Connecting through mysqli

//connecting to MySQL
// $connection = new mysqli($host, $user, $pass, $data);
// if ($connection->connect_error) die("Error connection");

// //request
// $query = "SELECT * FROM users";
// $result = $connection->query($query);

// if (!$result) die("Select error");

// $rows = $result->num_rows;

// for ($i = 0; $i < $rows; ++$i) {
//     $result->data_seek($i);
//     echo "ID: " . $result->fetch_assoc()['id_user'] . " ";
//     $result->data_seek($i);
//     echo "Name: " . $result->fetch_assoc()['name'] . "<br>";
// }

// $result->close();
// $connection->close();

 #endregion

//Connecting through PDO

// $connection = new PDO("mysql:host=localhost;dbname=SneakStoreDB;charset=utf8", "root", "mysql");

// //inserting (Straight request)
// // $query = "INSERT users (name, age, login, password) VALUES ('lesha', '19', 'archer', '123123')";
// // $count = $connection->exec($query);

// $name = 'Tanya';
// $age = 20;
// $login = 'ryuko';
// $pass = '123123';

// $param = [
//     'n' => $name,
//     'age' => $age,
//     'l' => $login,
//     'p' => $pass
// ];

// $sql = "INSERT INTO users (name, age, login, password) values (:n, :age, :l, :p)";
// $query = $connection->prepare($sql);

// $query->execute($param);

?>