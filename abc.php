<?php

    require('conn.php');
    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  
    $sql = 'SELECT  id,
                    name,
                    address,
                    lat,
                    lng
               FROM markers ';
  
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Query Data Demo</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div id="container">
            <h1>Employees</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Last Name</th>
                        <th>Job Title</th>
                        <th>Job Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo $row['id']?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['address'] ?></td>
                            <td><?php echo $row['lat'] ?></td>
                            <td><?php echo $row['lng'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>
</html>

