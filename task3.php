<?php

$user = '';
$pass = '';

$dbh = new PDO('mysql:host=localhost;dbname=data', $user, $pass);
// логин, ФИО
$sql = 'SELECT LOGIN, FIO FROM USERS_TAB WHERE LOGIN NOT IN(SELECT USER_LOGIN FROM LOG_TAB)';
foreach ($dbh->query($sql) as $row) {
    echo $row['LOGIN'].' '.$row['FIO']."\r\n";
}

$sql = 'SELECT DEP_NAME, PAGE_NAME, count(USER_LOGIN) AS USER
FROM USERS_TAB U
         RIGHT JOIN DEPARTMENT_TAB DT ON U.DEPARTMENT_ID = DT.DEP_ID
         RIGHT JOIN LOG_TAB ON U.LOGIN = LOG_TAB.USER_LOGIN GROUP BY DEP_NAME, PAGE_NAME ORDER BY DEP_NAME';
//название департамента, название страницы, кол-во посещений
foreach ($dbh->query($sql) as $row) {
    echo $row['DEP_NAME'].' '.$row['PAGE_NAME'].' '.$row['USER']."\r\n";
}


