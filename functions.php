<?php

function insertMapData($a, $b, $c, $d, $e) {
    global $mysqli;
    $stmt = $mysqli->prepare("
    insert into markers
    (
    name,
    address,
    lat,
    lng,
    type
    )
    values
    (
    ?,
    ?,
    ?,
    ?,
    ?
    )
    ");
    $stmt->bind_param("ssdds", $a, $b, $c, $d, $e);
    $stmt->execute();
    $stmt->close();
}