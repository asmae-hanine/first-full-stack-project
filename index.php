<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">


    <!-- header style -->
    <link rel="stylesheet" href="./css/header-style.css">

    <!-- body style  -->
    <link rel="stylesheet" href="./css/style.css">

    <title>Otaku's Shop</title>
</head>

<body>
    <?php
    include "./imports/header.php";
    ?>

    <header class="masthead">
        <div class="container container-color">
            <div class="masthead-subheading">Welcome To Our <span class='anime-font'>Anime</span> Shop!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <!-- button -->
            <button class="button-86" role="button" onclick="window.location.href='products.php'">Shop Now</button>

        </div>
    </header>

    <?php
    include "./imports/footer.php";
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>