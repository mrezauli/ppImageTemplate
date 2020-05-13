<?php

include_once "vendor/autoload.php";
use Dompdf\Dompdf;

$imgname = $_GET['name1'];

// reference the Dompdf namespace

// instantiate and use the dompdf class
$dompdf = new Dompdf();
//$htmlimg = "<img src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'><img style='padding: 10px' src='src/uploads/$imgname' height='100' width='100'>";
$divimg = "
<!doctype html>
<html lang=\"en\">
<head>
    <title>Hello, world!</title>
    <style>

table {
    border-collapse: collapse;
}
th, td {

    border: 1px solid dashed;
    padding: 3mm;

}
img {
    width: 40mm;
    height: 50mm;
}
.norm {
    width: 40mm;
    height: 50mm;
}

</style>
</head>
<body>
<table >
    <tbody>
        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
        </tr>

        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
        </tr>

        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
        </tr>

        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
        </tr>

        <tr >
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
            <td ><img src='src/uploads/$imgname' class='norm'></td>
        </tr>




    </tbody>
</table>
</body>
</html>";
$dompdf->loadHtml($divimg);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
?>






