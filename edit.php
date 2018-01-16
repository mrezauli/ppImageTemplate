<?php

//echo '<pre>';
//var_dump($_GET);
//echo '<br>';
//var_dump($_FILES);
//echo '</pre>';
?>
<!doctype html>
<html lang="en">
<head>
    <title>Passport Image Template Maker</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <style>
        #draggable {
            background: rgba(255, 255, 255, 0.5);
            border: 1px dashed #fff;
            width: 256px;
            height: 256px;
            padding: 0.5em;
            position: absolute;
            background-image: url("src/uploads/userIcon.png");
        }
        .image-full-div {
            width: 75%;
        }
        .image {
            width: 100%;
        }







    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>








<div class="col-md-3">
    <img src="src/uploads/<?php echo $_GET['name']?>" class="image">
    <div id="draggable"></div>
    <button id="cropButton" class="btn btn-dark btn-lg btn-block" type="button">CROP</button>
</div>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

    $(document).ready(
        function() {
            $("#draggable").draggable({ containment: "parent" }).position({
                my: "center",
                at: "center",
                of: ".col-md-3"
            });
            $("#cropButton").click(
                function() {
                    var x = $("#draggable").position();
                    alert("Top position: " + x.top + " Left position: " + x.left);
                }
            )
        }
    )



</script>






</body>
</html>

