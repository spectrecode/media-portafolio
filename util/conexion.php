<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "mediaimpact");

function db_connect() {
    $result = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    mysql_query("SET NAMES 'utf8'");
    if (!$result)
        return false;
    if (!mysql_select_db(DB_DATABASE))
        return false;
    return $result;
}

?>
