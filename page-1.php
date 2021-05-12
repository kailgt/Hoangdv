<!-- Highlight -->
<style>
    <?php
    if (isset($_SESSION['food'])) {
        echo '.' . $_SESSION['food'] . '{border: 2px solid #74b1a6;}';
    }
    ?>
</style>
<!-- Title -->
<div id="header" class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="title col-lg-8">Choose your favourite food</div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- Body -->
<div id="body" class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="item chocolate">
                <img class="img-fluid" src="img/chocolate.jpg" alt="">
                <h3>Chocolate</h3>
                <p>Description of chocolate</p>
                <div class="button">
                    <div id="toolbar" class="btn-group">
                        <a href="index.php?page_layout=2&food=chocolate" class="btn btn-primary">Select</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item banana">
                <img class="img-fluid" src="img/banana.jpg" alt="">
                <h3>Banana</h3>
                <p>Description of banana</p>
                <div class="button">
                    <div id="toolbar" class="btn-group">
                        <a href="index.php?page_layout=2&food=banana" class="btn btn-primary">Select</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="item friedchicken">
                <img class="img-fluid" src="img/friedchicken.jpg" alt="">
                <h3>Fried chicken</h3>
                <p>Description of fried chicken</p>
                <div class="button">
                    <div id="toolbar" class="btn-group">
                        <a href="index.php?page_layout=2&food=friedchicken" class="btn btn-primary">Select</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>