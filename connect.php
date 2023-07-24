<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travelBooking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Truy vấn dữ liệu từ bảng địa điểm
$sql = "SELECT * FROM `destinations`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Lấy dữ liệu thành mảng liên hợp $destinations
$destinations = [];
while ($row = $result->fetch_assoc()) {
    $destinations[] = $row;
}

// Đóng kết nối
$conn->close();


?>
