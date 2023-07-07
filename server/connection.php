<?php 

function connection(){
    $user = getenv("MYSQL_USER");
    $pass = getenv("MYSQL_PASS");
    $base = getenv("MYSQL_BASE");
    $link = new mysqli("localhost", $user, $pass, $base);
    $link -> set_charset("utf8");
    return $link;
}

function safeGET($key){
    if(!isset($_GET[$key])) return false;
    $value = trim($_GET[$key], " ");
    if($value == "") return false;
    return str_replace("'","''",$value);
}

function safePOST($key){
    if(!isset($_POST[$key])) return false;
    $value = $_POST[$key];
    if(!is_array($value)){
        $value = trim($value, " ");
        if($value == "") return false;
        $value = str_replace("'", "''", $value);
    }
    return $value;
}



function send($status = 200, $data = null){
    echo json_encode(["status" => $status, "data" => $data]);
    exit;
} 

function getAllFromTable($table, $where = 1, $object = false){
    global $link;
    $sql = "SELECT * from $table where $where";
    
    $res = $link -> query($sql);
    if(!$res) send(500, "Error en la consulta. $sql");

    $data = $res -> fetch_all(MYSQLI_ASSOC);
    if($object){
        if($res -> num_rows){
            $aux = [];
            foreach($data as $row)
                $aux[$row["id"]] = $row;
            $data = $aux;
        }else $data = json_decode('{}');
    }
    return $data;
}
?>