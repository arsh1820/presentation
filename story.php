<?php
include 'dbinfo.php';

$sql_story = "SELECT * FROM story";
$result_story = mysqli_query($con, $sql_story);
$row_story = mysqli_fetch_assoc($result_story);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



</head>
<body>

    <main>
    <h1 id="title">Computer Programming</h1>
    </main>
    
    <section class="container">

    <h2><?php echo $row_story['title'] ?></h2>
    <p><?php echo $row_story['content'] ?></p>
    
     </section>

</body>

    </html>