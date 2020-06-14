<?php

$pc1 = rand(1,6);
$pc2 = rand(1,6);
$user1 = rand(1,6);
$user2 = rand(1,6);

$pc_sum = $pc1 + $pc2;
$user_sum = $user1 + $user2;

if($pc_sum > $user_sum){
    $data = 'Nugalejo PC';
} elseif($pc_sum < $user_sum){
    $data = 'Nugalejo USER';
}elseif($pc_sum = $user_sum){
$data = 'Lygiosios';}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
</head>
<body>
<body class="d-flex">
<div class="row w-100">
    <div class="col-5">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <h1>PC</h1>
            <img class=m-3 src="images/<?php print $pc1;?>.png" alt="">
            <img class=m-3 src="images/<?php print $pc2;?>.png" alt="">
            <?php print 'PC dice ' . $pc_sum;?>

        </div>
    </div>
    <div class="col-2 text-center">
        <h1><?php print $data?></h1>
    </div>
    <div class="col-5">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <h1>USER</h1>
            <img class=m-3 src="images/<?php print $user1;?>.png" alt="">
            <img class=m-3 src="images/<?php print $user2;?>.png" alt="">
            <?php print 'USER dice ' . $user_sum;?>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>