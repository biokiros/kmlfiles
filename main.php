<?PHP


$json = array();
if (isset($_GET["user"]) && isset($_GET["pwd"])) {




    $results["user"] = 'sinue';
    $results["pwd"] = 'asdasd';
    $results["names"] = 'sinue salgado';
    $json['datos'][] = $results;
    echo json_encode($json);
} else {
    $results["user"] = '';
    $results["pwd"] = '';
    $results["names"] = '';
    $json['datos'][] = $results;
    echo json_encode($json);
}
?>