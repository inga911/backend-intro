<?php

$host = '127.0.0.1';
$db   = 'ciupakabros';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);



// teorija:
    // SELECT column_name(s)
    // FROM table1
    // INNER JOIN table2
    // ON table1.column_name = table2.column_name; -- kokiu principu join'inam

if (isset($_GET['left'])) {

    $type = 'LEFT';

    $sql = "
    SELECT clients.id AS cid, name, phone.id AS pid, client_id, number
    FROM clients
    LEFT JOIN phone
    ON clients.id = phone.client_id
    ORDER BY name
    ";
} else if (isset($_GET['right'])) {

    $type = 'RIGHT';

    $sql = "
    SELECT clients.id AS cid, name, phone.id AS pid, client_id, number
    FROM clients
    RIGHT JOIN phone
    ON clients.id = phone.client_id  
    ORDER BY name
    ";
}else if (isset($_GET['group'])) {
//palieka visus vardu po viena, nes grupuojam pagal varda
    $type = 'INNER GROUP';
//GROUP_CONCAT - sujungia to paties vardo registruotus numerius  | SEPARATOR (tuo kuo norim atskirti)
    $sql = "
    SELECT clients.id AS cid, name, phone.id AS pid, client_id, GROUP_CONCAT(number SEPARATOR '<br>') AS number 
    FROM clients
    INNER JOIN phone
    ON clients.id = phone.client_id  
    GROUP BY name
    ORDER BY name
    ";
    
} else {

    $type = 'INNER';

    $sql = "
    SELECT clients.id AS cid, name, phone.id AS pid, client_id, number
    FROM clients
    INNER JOIN phone
    ON clients.id = phone.client_id
    ORDER BY name
    ";


}



$stmt = $pdo->query($sql);

$data = $stmt->fetchAll();

//     $sql = "
//         SELECT id, name     
//         FROM clients
//         ORDER BY name
//     ";


// $stmt = $pdo->query($sql);

// $data = $stmt->fetchAll();
if (isset($_GET['phpgroup'])) {
    //tarpinis masyvas i kuri dedame visus elementus
    $d= [];
    $type = 'PHP GROUP';
    foreach ($data as $client){
        if (isset($d[$client['name']])) {
            // toks yra jau tai i kliento namo telefono masyva pridedama kito kliento numeri
            $d[$client['name']]['number'] .= '<br>' . $client['number'];
        }else {
            //jeigu ne - pirma karta daroma:
            //atiduodama viskas klientui
            $d[$client['name']] = $client;
        }

    }
    $data = $d;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clients</title>
</head>

<body>

    <nav>
        <a href="?inner">INNER</a>
        <a href="?left">LEFT</a>
        <a href="?right">RIGHT</a>
        <a href="?group">GROUP</a>
        <a href="?phpgroup">GROUP IN PHP</a>
    </nav>

    <h1><?= $type ?></h1>
    <ul>
        <?php foreach ($data as $client) : ?>
            <li>
                <div class="id"><?= $client['cid']  ?? '' ?></div>
                <div class="name"><?= $client['name'] ?? '' ?></div>
                <div class="id"><?= $client['pid'] ?? '' ?></div>
                <div class="h"><?= $client['client_id'] ?? '' ?></div>
                <div class="p"><?= $client['number'] ?? '' ?></div>
            </li>
        <?php endforeach ?>

    </ul>



</body>

</html>