<?php
require_once 'generator.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Dojo Teams Generator</title>
</head>
<body>


<h1>DOJO TEAMS</h1>
<div class="red-dot"></div>

<?php
if (empty($_POST)) {
    ?>
    <form action="" method="post">
        <button type="submit" name="generate" value="clicked" class="btn first">Generate 3 random teams!</button>
    </form>

<?php } elseif (!empty($_POST['generate']) && $_POST['generate'] === 'clicked') {
    echo "<audio src='gong.mp3' autoplay></audio>";
    $teams = generateThreeTeams($randomMembers);
    echo "<div class='container'>";
    echo "<div class='row'>";
    foreach ($teams as $team => $students) { ?>
        <div class="col-sm">
            <h2><?= $team ?></h2>
            <ul class="list-group">
                <?php
                foreach ($students as $student) {
                    echo "<li class=\"list-group-item\">$student</li>";
                }
                ?>
            </ul>
        </div>
    <?php }
    echo '</div>';
    echo '</div>'; ?>
    <form action="" method="post">
        <button type="submit" name="generate" value="clicked" class="btn second">Generate 3 random teams!</button>
    </form>
<?php } ?>

<script type="text/javascript" src="script.js"></script>

</body>
</html>