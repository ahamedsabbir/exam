<?php
try {
    $db = new mysqli('localhost', 'root', '', 'final');
    $db->set_charset("utf8");
} catch (\Throwable $th) {
    echo $th->getMessage();
}
$sql = "SELECT * FROM `product` WHERE 1";
$query = $db->query($sql);
while ($data = $query->fetch_assoc()) {
    echo $data['name'];
}
$db->close();