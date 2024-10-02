<?php

$sql_producto = "SELECT * FROM t_producto";

$query_producto = $pdo->prepare($sql_producto);
$query_producto->execute();
$datos_producto = $query_producto->fetchAll(fetch_Style: PDO::FETCH_ASSOC);