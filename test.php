<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Sas</title>

    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <!-- Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-5.7.2/css/all.css">
    <link rel="stylesheet" href="burgar/slick.css">
    <link rel="stylesheet" href="burgar/style.css">
    <link rel="stylesheet" href="font/font_style.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>


    <div id="flipbook">
        <div class="hard"> Turn.js </div>
        <div class="hard"></div>
        <div> Page 1 </div>
        <div> Page 2 </div>
        <div> Page 3 </div>
        <div> Page 4 </div>
        <div class="hard"></div>
        <div class="hard"></div>
    </div>
    <a href="javascript:" id="return-to-top" class="text-center"><i class="text-white fa fa-chevron-up fa-3x"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="fontawesome-5.7.2/js/all.js"></script>
    <script src="js/turnjs4/lib/turn.min.js"></script>
    <script src="js/turnjs4/lib/zoom.min.js"></script>
    <script src="js/turnjs4/lib/scissor.min.js"></script>
    <script src="js/turnjs4/lib/hash.js"></script>
    <script src="burgar/slick.min.js"></script>
    <script src="burgar/burgar.js"></script>

    <script>
        $("#flipbook").turn({
            width: 400,
            height: 300,
            autoCenter: true
        });
    </script>

</body>

</html>