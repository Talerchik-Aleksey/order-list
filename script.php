<?php
    $name = $_POST['name'];
    $compony_name = $_POST['compony_name'];
    $other_information = $_POST['other_information'];

    $dbh = new PD0('mysql:host=localhost; dbname= {name}','{user}','{password}');

    $q = "INSERT INTO orders(`time`, name, compony_name, compony_name) VALUES(NOW(), :name, :compony_name, :compony_name)";

    $sth = $dbh->prepare(q);
    $sth->bindParam(':name', $name, PD0::PARAM_STR);
    $sth->bindParam(':compony_name', $compony_name, PD0::PARAM_STR);
    $sth->bindParam(':other_information', $other_information, PD0::PARAM_STR);

    $sth->execute();


