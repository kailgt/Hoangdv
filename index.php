<?php
$conn = mysqli_connect('localhost','root','','result');
$sql = "SET NAMEs 'utf8'";
if($conn){
    $query = mysqli_query($conn, $sql);
}else{
    die('Kết nối thất bại!');
}
?>
<?php
session_start();
if (isset($_GET['food'])) {
    $food = $_GET['food'];
    $_SESSION['food'] = $food;
}
if (isset($_POST['sbm'])) {
    $pet = $_POST['sbm'];
    $_SESSION['pet'] = $pet;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</head>
<body>
    <!-- Master page here -->
    <?php
    if (isset($_GET["page_layout"])) {
        switch ($_GET["page_layout"]) {
            case "1": include_once("page-1.php");
            break;
            case "2": include_once("page-2.php");
            break;
            case "3": include_once("page-3.php");
            break;
        }
    } else {
        include_once("page-1.php");
    }
    ?>
</body>
</html>