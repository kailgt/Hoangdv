<!-- Insert or Update -->
<?php
if(isset($_POST['sbm'])){
    $pet = $_POST['sbm'];
    $_SESSION['pet'] = $pet;
    $result = $food.' & '.$pet;
    if(!isset($_SESSION['id'])){
        $sql = "INSERT INTO survey (food, pet, result) VALUES ('$food', '$pet', '$result')";
        mysqli_query($conn, $sql);
        $last_id = mysqli_insert_id($conn);
        $_SESSION['id'] = $last_id;
    }else{
        $last_id = $_SESSION['id'];
        $sql = "UPDATE survey SET food = '$food', pet = '$pet', result = '$result' WHERE id = $last_id";
        mysqli_query($conn, $sql);
    }
    header("location: index.php?page_layout=3");
}
?>
<!-- Highlight -->
<style>
    <?php
    if (isset($_SESSION['pet'])) {
        echo '.' . $_SESSION['pet'] . '{border: 2px solid #74b1a6;}';
    }
    ?>
</style>
<!-- Title -->
<div id="header" class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="title col-lg-8">Choose your favourite pet</div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- Body -->
<div id="body" class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="item dog">
                <img class="img-fluid" src="img/dog.jpg" alt="">
                <h3>Dog</h3>
                <p>Description of dog</p>
                <div class="button">
                    <form id="toolbar" method="post" action="">
                        <button class="btn btn-primary" type="submit" name="sbm" value="dog">Select</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item cat">
                <img class="img-fluid" src="img/cat.jpg" alt="">
                <h3>Cat</h3>
                <p>Description of cat</p>
                <div class="button">
                    <form id="toolbar" method="post">
                        <button class="btn btn-primary" type="submit" name="sbm" value="cat">Select</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item hamster">
                <img class="img-fluid" src="img/hamster.jpg" alt="">
                <h3>Hamster</h3>
                <p>Description of hamster</p>
                <div class="button">
                    <form id="toolbar" method="post">
                        <button class="btn btn-primary" type="submit" name="sbm" value="hamster">Select</button>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Back button -->
<div class="button">
    <div id="toolbar" class="btn-group">
        <a href="index.php?page_layout=1&food=<?php echo $_SESSION['food']; ?>" class="btn btn-danger">Back</a>
    </div>
</div>