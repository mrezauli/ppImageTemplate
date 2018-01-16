<?php

require 'vendor/autoload.php';

use Intervention\Image\ImageManager;
use Intervention\Image\ImageManagerStatic as Image;

//echo '<pre>';
//var_dump($_POST);
//echo '<br>';
//var_dump($_FILES);
//echo '</pre>';

$imgname = substr(md5(time()), 0, 11);
$tmpname = $_FILES['img_name']['tmp_name'];
$pathname = "src/uploads/$imgname";
move_uploaded_file($tmpname, $pathname);

// create Image from file
$img = Image::make("src/uploads/$imgname");

// rotate image 90 degrees clockwise
$img->rotate(-90);

// finally we save the image as a new file
$imgnamerotate = "rotate" . $imgname;
$img->save("src/uploads/$imgnamerotate", 100);

?>

<!doctype html>
<html lang="en">
<head>
    <title>Passport Image Template Maker</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" enctype="multipart/form-data" action="edit.php?name=<?php echo $imgname?>">
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Edit">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form method="post" enctype="multipart/form-data" action="pdf.php?name1=<?php echo $imgname?>&name2=<?php echo $imgnamerotate?>">
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Make PDF">
                </div>
            </form>
        </div>

    </div>
</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>


