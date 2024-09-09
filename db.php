<?php
session_start();
require('connect.php');

function tt($value){
  echo '<pre>';
  print_r($value);
  echo '</pre>';
}
//Проверка выполнения запроса к бд
function dbCheckError($query){
  $errInfo = $query->errorInfo();
  if($errInfo[0] !== PDO::ERR_NONE){
    echo $errInfo[2];
    exit();
    }
    return true;
}

//Запрос на получение данных одной таблицы
function selectAll($table, $params = []){
  global $pdo;
  $sql = "SELECT * FROM $table";
  if(!empty($params)){
    $i = 0;
    foreach ($params as $key => $value){
      if (!is_numeric($value)){
        $value = "'" . $value . "'";
      }
      if ($i === 0){
        $sql = $sql . " WHERE $key = $value";
      }else{
        $sql = $sql . " AND $key = $value";
      }
      $i++;
    }
  }
  $query = $pdo->prepare($sql);
  $query->execute();
  dbCheckError($query);
  return $query->fetchAll();

}
//Запрос на получение строки с выбранной таблицы
//function selectOne($table, $params = []){
//  global $pdo;
//  $sql = "SELECT * FROM $table";
//  if(!empty($params)){
//    $i = 0;
//    foreach ($params as $key => $value){
//      if (!is_numeric($value)){
//        $value = "'" . $value . "'";
//      }
//      if ($i === 0){
//        $sql = $sql . " WHERE $key = $value";
//      }else{
//        $sql = $sql . " AND $key = $value";
//      }
//      $i++;
//    }
//  }
//  $query = $pdo->prepare($sql);
//  $query->execute();
//  dbCheckError($query);
//  return $query->fetch();
//}

//Запись в таблицу бд
//function insert($table, $params){
//  global $pdo;
//  $i = 0;
//  $coll = '';
//  $mask = '';
//  foreach ($params as $key => $value){
//    if ($i === 0){
//      $coll = $coll . "$key";
//      $mask = $mask . "'" . "$value" . "'";
//    }else{
//      $coll = $coll . ", $key";
//      $mask = $mask . ", '" . "$value" . "'";
//    }
//      $i++;
//  }
//  $sql = "INSERT INTO $table ($coll) VALUES ($mask)";
//  $query = $pdo->prepare($sql);
//  $query-> execute($params);
//  dbCheckError($query);
//  return $pdo->LastInsertId();
//}
//$arrData = [
//  'adm' => '1',
//  'user' => '124ddf2',
//  'mail' => 'refsd233@re.ru',
//  'pass' => '1f212as12'
//];

//function inserted($table, $params){
//  global $pdo;
//
//  // Получаем ключи и значения из массива $params
//  $keys = array_keys($params);
//  $values = array_values($params);
//
//  // Создаем строку столбцов и плейсхолдеров для подготовленного выражения
//  $coll = implode(", ", $keys);
//  $placeholders = implode(", ", array_fill(0, count($keys), '?'));
//
//  // Формируем SQL-запрос
//  $sql = "INSERT INTO $table ($coll) VALUES ($placeholders)";
//
//  // Подготавливаем запрос
//  $query = $pdo->prepare($sql);
//
//  // Выполняем запрос с использованием значений из массива $params
//  $query->execute($values);
//
//  // Проверка на ошибки
//  dbCheckError($query);
//  return $pdo->LastInsertId();
//}

// Исправленный массив данных
$arrData = [
  'admin' => '1',       // Предполагаемое имя столбца
  'username' => '124ddf2',  // Предполагаемое имя столбца
  'email' => 'refsd233@re.ru',  // Предполагаемое имя столбца
  'password' => '1f212as12'  // Предполагаемое имя столбца
];

//Обновление строки в таблице
function update($table, $id, $params){
  global $pdo;
  $i = 0;
  $str = '';
  foreach ($params as $key => $value){
    if ($i === 0){
      $str = $str . $key .  " = '" . $value . "'";
    }else{
      $str = $str . ", " .  $key .  " = '" . $value . "'";
    }
    $i++;
  }
  $sql = "UPDATE $table SET $str WHERE id = $id";
  $query = $pdo->prepare($sql);
  $query-> execute($params);
  dbCheckError($query);
}
$param = [
  'admin' => '0',
  'password' => '333'
];

// update('users', 5, $param);

function delete($table, $id){
  global $pdo;
  $sql = "DELETE FROM $table WHERE id = $id";
  $query = $pdo->prepare($sql);
  $query-> execute();
  dbCheckError($query);
}
// Запрос на получение строки из выбранной таблицы
function selectOne($table, $params = []) {
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)) {
        $i = 0;
        foreach ($params as $key => $value) {
            if (!is_numeric($value)) {
                $value = $pdo->quote($value); // Используем PDO для экранирования значений
            }
            if ($i === 0) {
                $sql .= " WHERE $key = $value";
            } else {
                $sql .= " AND $key = $value";
            }
            $i++;
        }
    }

    $query = $pdo->prepare($sql);
    $query->execute();
    // Обработка ошибок (например, вывод сообщения или логирование)
    if ($query->errorCode() !== '00000') {
        echo "Ошибка при выполнении запроса: " . implode(", ", $query->errorInfo());
        return null;
    }

    return $query->fetch(PDO::FETCH_ASSOC);
}
function inserted($table, $params) {
    global $pdo;
    $columns = implode(", ", array_keys($params));
    $values = implode(", ", array_map([$pdo, 'quote'], array_values($params)));

    $sql = "INSERT INTO $table ($columns) VALUES ($values)";
    $query = $pdo->prepare($sql);
    if (!$query->execute()) {
        echo "Ошибка при выполнении запроса: " . implode(", ", $query->errorInfo());
        return null;
    }

    return $pdo->lastInsertId();
}


