<div class="col-md-4 col-sm-3">
    <div id="card" class="thumbnail">
        <?php
            echo '<img src="'. $get_row['image'] .'" id="saleitemimage">';
            echo '<p><strong>' . $get_row['name'] . '</strong><br/>';
            echo $get_row['description'] . '<br/>';
            echo '&pound' . number_format($get_row['price'], 2);
            echo '</br>';
            echo '<a href="cart.php?add=' . $get_row['id'] . '" class="btn btn-primary" role="button" style="float: left;">Buy</a>'
        ?>
    </div>
</div>
