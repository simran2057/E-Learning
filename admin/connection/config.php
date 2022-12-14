<?php
$servername = "localhost";
$username = "simran";
$password = "root";
$dbname = "e_learning";

$conn = new mysqli($servername,$username,$password,$dbname);

// if($conn)
// {
//     echo "Database Connection Successful.";
// }
?>

<?php
function getMultipleRecords($sql, $types = null, $params = []) {
    global $conn;
    $stmt = $conn->prepare($sql);
    if (!empty($params) && !empty($params)) { // parameters must exist before you call bind_param() method
      $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();
    return $user;
  }
  function getSingleRecord($sql, $types, $params) {
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
    return $user;
  }
  function modifyRecord($sql, $types, $params) {
    global $conn;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
  }
?>