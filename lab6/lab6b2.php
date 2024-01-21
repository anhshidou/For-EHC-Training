<?php
$db_user = "root";
$db_pass = "";
$db_name = "ehclab6b2";

$db = new PDO("mysql:host=localhost;dbname=". $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Assuming you have defined these variables with appropriate values
$mssv = 'HE194733';
$stname = 'Bui Quang Anh';
$mobile = '0916214345';
$email = 'ranin.fox.87@gmail.com';

// Check if the record already exists
$stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ? OR stname = ? OR mobile = ? OR email = ?");
$stmt->execute([$mssv, $stname, $mobile, $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    // Insert new record if it doesn't exist
    $stmt = $db->prepare("INSERT INTO ehc (mssv, stname, mobile, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$mssv, $stname, $mobile, $email]);
    echo "Record inserted successfully!\n";
} else {
    echo "Record already exists!";
}
$mssv = 'HE190000';
$stname = 'Satou Hina';
$mobile = '09312312321';
$email = 'vo1@gmail.com';

// Check if the record already exists
$stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ? OR stname = ? OR mobile = ? OR email = ?");
$stmt->execute([$mssv, $stname, $mobile, $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    // Insert new record if it doesn't exist
    $stmt = $db->prepare("INSERT INTO ehc (mssv, stname, mobile, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$mssv, $stname, $mobile, $email]);
    echo "Record inserted successfully!\n";
} else {
    echo "Record already exists!";
}

$mssv = 'HE193123';
$stname = 'Inami Mahiru';
$mobile = '0913123213';
$email = 'vo2@gmail.com';

// Check if the record already exists
$stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ? OR stname = ? OR mobile = ? OR email = ?");
$stmt->execute([$mssv, $stname, $mobile, $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    // Insert new record if it doesn't exist
    $stmt = $db->prepare("INSERT INTO ehc (mssv, stname, mobile, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$mssv, $stname, $mobile, $email]);
    echo "Record inserted successfully!\n";
} else {
    echo "Record already exists!";
}
$mssv = 'HE194723';
$stname = 'Shino Akishima';
$mobile = '0916312315';
$email = 'vo3@gmail.com';

// Check if the record already exists
$stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ? OR stname = ? OR mobile = ? OR email = ?");
$stmt->execute([$mssv, $stname, $mobile, $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    // Insert new record if it doesn't exist
    $stmt = $db->prepare("INSERT INTO ehc (mssv, stname, mobile, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$mssv, $stname, $mobile, $email]);
    echo "Record inserted successfully!\n";
} else {
    echo "Record already exists!";
}
$mssv = 'HE194713';
$stname = 'Inaba Himeko';
$mobile = '0916212345';
$email = 'vo4@gmail.com';

// Check if the record already exists
$stmt = $db->prepare("SELECT * FROM ehc WHERE mssv = ? OR stname = ? OR mobile = ? OR email = ?");
$stmt->execute([$mssv, $stname, $mobile, $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    // Insert new record if it doesn't exist
    $stmt = $db->prepare("INSERT INTO ehc (mssv, stname, mobile, email) VALUES (?, ?, ?, ?)");
    $stmt->execute([$mssv, $stname, $mobile, $email]);
    echo "Record inserted successfully!\n";
} else {
    echo "Record already exists!";
}

$stmt = $db->prepare("SELECT mssv, stname, mobile, email FROM ehc");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<br> Student info <br>";
if ($result) {
  foreach($result as $row) {
    echo "mssv: " . $row['mssv']. " - Name: " . $row['stname']. " - Mobile: " . $row['mobile']." - Email: ". $row["email"] . "<br>";
  }
} else {
  echo "0 results";
}

?>






