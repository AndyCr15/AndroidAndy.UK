<div class="col-12 col-sm-6 col-lg-4">
    <div class="card shopcard">
        <?php
        echo '<img class="card-img-top" style="border-radius: 5em 0em;" alt="Card header image" src="'. $get_row['image'] .'">';
        echo '<div class="card-body">';
        echo '<h5>' . $get_row['name'] . '</h5>';
        echo '<p class="card-text">'.$get_row['description'].'</p>';
        echo '<p class="card-text">&pound' . number_format($get_row['price'], 2) . '</p>';
        echo '<a href="cart.php?add=' . $get_row['id'] . '" class="btn btn-primary" role="button">Buy</a>';
        echo '</div>';
        ?>
    </div>
</div>
