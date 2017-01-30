<?php

if (isset($_POST['action']) && $_POST['action'] == 'insert') {
    $response = array();
    $name = $_POST['empname'];
    $email = $_POST['empemail'];
    $salary = $_POST['empsalary'];
    mysql_connect("localhost", "root", "");
    mysql_select_db("groceryStore");

    $query = mysql_query("INSERT INTO employee set emp_name='" . $name . "', emp_email='" . $email . "',salary='" . $salary . "'");
    if ($query) {
        $response['status'] = 'true';
    } else {
        $response['status'] = 'false';
    }
    echo json_encode($response);
    exit;
}
?>