<!-- include header -->
<?php $this->view('includes/header')?>
<?php $this->view('includes/navbar')?>

    <div class="event_item_completed">
        <div class="event_image">
            <img src="../public/assets/foodDonationEvent.jpg" alt="">
        </div>

        <h4 class="row">Completed</h4>
        <div class="event_button_holder_completed">
            <button class="greenButton event_button">View Details</button>
        </div>
    </div>

    <?php
        echo "<pre>";
        print_r($rows);

    ?>

<!-- include footer -->
<?php $this->view('includes/footer')?>



