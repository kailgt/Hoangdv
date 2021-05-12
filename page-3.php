<!-- Title -->
<div id="header" class="container"> 
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="title col-lg-8">Compare your result</div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- Body -->
<div id="body">
    <table id="1">
        <tr>
            <td></td>
            <td>Chocolate</td>
            <td>Banana</td>
            <td>Fried chicken</td>
        </tr>
        <tr>
            <td>Dog</td>
            <td class="<?php if($_SESSION['food'] == 'chocolate' && $_SESSION['pet'] == 'dog'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'chocolate & dog'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
            <td class="<?php if($_SESSION['food'] == 'banana' && $_SESSION['pet'] == 'dog'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'banana & dog'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
            <td class="<?php if($_SESSION['food'] == 'friedchicken' && $_SESSION['pet'] == 'dog'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'friedchicken & dog'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
        </tr>
        <tr>
            <td>Cat</td>
            <td class="<?php if($_SESSION['food'] == 'chocolate' && $_SESSION['pet'] == 'cat'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'chocolate & cat'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
            <td class="<?php if($_SESSION['food'] == 'banana' && $_SESSION['pet'] == 'cat'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'banana & cat'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
            <td class="<?php if($_SESSION['food'] == 'friedchicken' && $_SESSION['pet'] == 'cat'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'friedchicken & cat'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
        </tr>
        <tr>
            <td>Hamster</td>
            <td class="<?php if($_SESSION['food'] == 'chocolate' && $_SESSION['pet'] == 'hamster'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'chocolate & hamster'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
            <td class="<?php if($_SESSION['food'] == 'banana' && $_SESSION['pet'] == 'hamster'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'banana & hamster'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
            <td class="<?php if($_SESSION['food'] == 'friedchicken' && $_SESSION['pet'] == 'hamster'){echo 'active';} ?>"><?php 
            $sql = "SELECT result FROM survey WHERE result = 'friedchicken & hamster'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            echo $row;
            ?></td>
        </tr>
    </table>
</div>
<!-- Back button -->
<div class="button">
    <div id="toolbar" class="btn-group">
        <a href="index.php?page_layout=2&food=<?php echo $_SESSION['food']; ?>" class="btn btn-danger">Back</a>
    </div>
</div>