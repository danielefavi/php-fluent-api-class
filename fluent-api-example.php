<?php

require 'FluentMath.php';



$res1 = FluentMath::add(5)
    ->add(3)
    ->subtract(2)
    ->add(8)
    ->result();

$res2 = FluentMath::subtract(1)->add(10)->result();


?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="p-5">
    <h1>FluentMath Example</h1>

    <h3 class="pt-4 pb-3">Runnig the code:</h3>

    <pre class="border rounded p-4">
    $res1 = FluentMath::add(5)
        ->add(3)
        ->subtract(2)
        ->add(8)
        ->result();

    $res2 = FluentMath::subtract(1)->add(10)->result();
    </pre>

    <h3 class="pt-4 pb-3">Result</h3>
    <h4><b>$res1</b>: <?= $res1 ?></h4>
    <h4><b>$res2</b>: <?= $res2 ?></h4>
</body>
</html>
