<?php
// Database connection (replace with your credentials)
$servername = "34.23.248.39";
$username = "root";
$password = "Password123@";
$dbname = "navigation";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Fetch menu data
$menu_data = array();

$sql_main = "SELECT * FROM main_nav";
$result_main = $conn->query($sql_main);

while ($row_main = $result_main->fetch_assoc()) {
    $main_item = array(
        'id' => $row_main['id'],
        'name' => $row_main['label'],
        'link' => $row_main['url'],
        'order' =>$row_main['ordering'],
        'submenu' => array()
    );

    $sql_sub = "SELECT * FROM sub_nav WHERE main_nav_id = " . $row_main['id'];
    $result_sub = $conn->query($sql_sub);

    while ($row_sub = $result_sub->fetch_assoc()) {
        $main_item['submenu'][] = array(
            'id' => $row_sub['id'],
            'name' => $row_sub['label'],
            'link' => $row_sub['url']
        );
    }

    $menu_data[] = $main_item;
}

$conn->close();

// Output as JSON
header('Content-Type: application/json');
echo json_encode($menu_data);
