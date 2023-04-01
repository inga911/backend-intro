
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

// IRASYMAS 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['_method'] == 'post') {
        //idedame nauja irasai duomenu baze
        // INSERT INTO table_name (column1, column2, column3, ...)
        // VALUES (value1, value2, value3, ...);

        $sql = "
            INSERT INTO girls
            (name, height, hair)
            VALUES (?, ?, ?)
        ";//kadangi id autmatiskai priskiriamas jo cia nerasom
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            $_POST['name'],
            $_POST['height'],
            $_POST['hair'] 
        ]);

        
        header('Location: http://localhost/backend-intro/021-php-database/');
        die;
    }
    
    //DELETE
    
    if (isset($_POST['_method']) && $_POST['_method'] == 'delete') {
    
        // DELETE FROM table_name WHERE condition;
    
        $sql = "
            DELETE
            FROM girls
            WHERE id = ?
        ";
        //si uzklausi atspari
        $stmt = $pdo->prepare($sql); // uzklausos pateikimas kur kintamieji pakeisti i klaustukus 
        $stmt->execute([$_POST['id']]);//uzklausos vykdymas kur paduodame realius duomenis
    
        header('Location: http://localhost/backend-intro/021-php-database/');
        die;
    
    }

    //REDAGUOTI 

    if ($_POST['_method'] == 'put') {
        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

    $sql = "
        UPDATE girls
        SET name = ?, height = ?, hair = ?
        WHERE id = ?
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $_POST['name'],
        $_POST['height'],
        $_POST['hair'],
        $_POST['id']
    ]);
    header('Location: http://localhost/backend-intro/021-php-database/');
    die;


    }

    // AUGIMAS

    if ($_POST['_method'] == 'up') {
        // UPDATE table_name
        // SET column1 = value1, column2 = value2, ...
        // WHERE condition;

    $sql = "
        UPDATE girls
        SET height = height + 0.5
        WHERE 1
    ";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([]);
    header('Location: http://localhost/backend-intro/021-php-database/');
    die;


    }

}
//cia yra saugi uzklausa nes tai mano sukurti kintamieji
$sql = "
    SELECT id, name, height, hair
    FROM girls
    ORDER BY name 
";

$stmt = $pdo->query($sql);


$girls = $stmt->fetchAll(); //gaunama informacija formate assoc masyve

//SKAICIUOJA SUMA  --  AS - pervadinam sumos kintamaji
$sql = "
    SELECT sum(height) AS sumAll
    FROM girls
";

$stmt = $pdo->query($sql);


$sum = $stmt->fetch(); //gaunama informacija formate assoc masyve

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIRLS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>




<div class="bin">
<ul>
    <?php foreach($girls as $girl) : ?>
        <li>
            <div class="id"><?= $girl['id'] ?></div>
            <div class="name"><?= $girl['name'] ?></div>
            <div class="height"><?= $girl['height'] ?></div>
            <div class="hair"><?=['Trumpi', 'Vidutiniai', 'Ilgi'] [$girl['hair'] -1] ?></div>
        </li>
    <?php endforeach ?>
    <li>
            <div class="id"></div>
            <div class="name">Bendras aukstis</div>
            <div class="height"><?= $sum['sumAll'] ?></div>
            <div class="hair"></div>
        </li>
</ul>
<form method="post">
    <div>
        <label>Vardas</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Aukstis</label>
        <input type="range" name="height">
    </div>
    <div>
        <label>Plauku ilgis</label>
            <select name="hair">
                <option value="1">Trumpi</option>
                <option value="2">Vidutiniai</option>
                <option value="3">Ilgi</option>
            </select>
    </div>
    <input type="hidden" name="_method" value="post">
    <div><button type="submit">Rinkti</div>
</form>
<form method="post">
    <div>
    <div>
        <label>ID</label>
        <input type="text" name="id">
    </div>
        <label>Vardas</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Aukstis</label>
        <input type="range" name="height">
    </div>
    <div>
        <label>Plauku ilgis</label>
            <select name="hair">
                <option value="1">Trumpi</option>
                <option value="2">Vidutiniai</option>
                <option value="3">Ilgi</option>
            </select>
    </div>
    <input type="hidden" name="_method" value="put">
    <div><button type="submit">Redeguoti</div>
</form>
<form method="post">
    <div>
        <label>ID</label>
        <input type="text" name="id">
    </div>
    <input type="hidden" name="_method" value="delete">
    <div><button type="submit">Trinti</div>
</form>
</div>
<form method="post">
    <input type="hidden" name="_method" value="up">
    <div><button type="submit">Auginti</div>
</form>

    
</body>
</html>

