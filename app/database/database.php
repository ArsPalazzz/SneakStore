<?php

require("connect.php");


function tt($value) {
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}


//проверка запроса на ошибку
function checkTheError($query) {
    $errInfo = $query->errorInfo();

    if ($errInfo[0] !== PDO::ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
}


//вывод всех строк
function selectAll($table, $params = []) {
    global $pdo;

    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;

        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
           
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
   
    checkTheError($query);
    
    return $query->fetchAll();
}


//вывод 1 строки
function selectOne($table, $params = []) {
    global $pdo;

    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;

        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key=$value";
            } else {
                $sql = $sql . " AND $key=$value";
            }
           
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
   
    checkTheError($query);
    
    return $query->fetch();
}



//insert
function insert($table, $params) {
    global $pdo;
    $i = 0;
    $coll = '';
    $mask = '';

    foreach ($params as $key => $value) {
        if ($i === 0) {
            $coll = $coll . "$key";
            $mask = $mask . "'" . $value . "'";
        } else {
            $coll = $coll . ", $key";
            $mask = $mask . ", '" . "$value" . "'";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

    $query = $pdo->prepare($sql);
    $query->execute($params);
   
    checkTheError($query);


    return $pdo->lastInsertId();
}



//update
function update($table, $id, $params) {
    global $pdo;
    $i = 0;
    $str = '';

    foreach ($params as $key => $value) {
        if ($i === 0) {
            $str = $str . $key . " = '" . $value . "'";
        } else {
            $str = $str . ", " . $key . " = '" . $value . "'";
        }
        $i++;
    }

    $sql = "UPDATE $table SET $str WHERE id = $id";

    $query = $pdo->prepare($sql);
    $query->execute($params);
   
    checkTheError($query);
}



function delete($table, $id) {
    global $pdo;

    $sql = "DELETE FROM $table WHERE id = $id";

    $query = $pdo->prepare($sql);
    $query->execute();
   
    checkTheError($query);
}


$params = [
    'admin' => 0,
    'username' => 'vladick'
];




$arrData = [
    'admin' => 1,
    'username' => 'vlad2',
    'email' => 'vlad2@mail.ru',
    'password' => '123123',
    'created' => '2021-01-01 00:00:01'
];

// tt(selectAll('users', $params));
//tt(selectOne('users', $params));
//insert('users', $arrData);
//update('users', 3, $params);
// delete('users', 4);

