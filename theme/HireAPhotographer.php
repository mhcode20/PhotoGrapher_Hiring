
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire A Photographer</title>
    <link rel="stylesheet" href="theme/HireAPhotographer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body >
    <h1>
        Hire A Photographer
    </h1>
    <?php
    $res = $db->query("select * from photographers");
    while($row = $res->fetch_assoc())
    {
      include('card.php');
    }
    ?>
</body>
</html>