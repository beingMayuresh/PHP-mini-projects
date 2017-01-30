<?php
if (isset($_POST['action']) && $_POST['action'] == 'submit') {
    $response = array();
    mysql_connect("localhost", "root", "");
    mysql_select_db("groceryStore");

    $query = mysql_query("SELECT * FROM employee");

    $employee = '';
    $employee .='<table cellpadding="5">';
    $employee .='<tr><td>Emp Name</td><td>Emp Email</td><td>Emp Salary</td></tr>';

    while ($data = mysql_fetch_array($query)) {

        $employee .='<tr><td>' . $data['emp_name'] . '</td><td>' . $data['emp_email'] . '</td><td>' . $data['salary'] . '</td></tr>';
    }
    $employee .='</table>';

    if ($query) {
        $response['status'] = 'true';
        $response['employee'] = $employee;
    } else {
        $response['status'] = 'false';
    }
    echo json_encode($response);
    exit;
}
?>














