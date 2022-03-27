<?php
    // ============Include Header Components==========
        include('components/header.php');
    // ========X====Include Header Components===X======

    // ============Include Database File==========
        include('include.inc/database.php');
    // ========X====Include Database File===X======

    $scheme = "SELECT * FROM scheme WHERE status='1'";
    $featch = mysqli_query($con,$scheme);
?>
<!-- ---------------Scheme Cards Display------------ -->
    <div class="container deposite_scheme pt-5">
        <div class="row heading">
            <h2>Our Deposit Schemes</h2>
            <p>Our Deposit Schemes Structure</p>
        </div>
        <div class="row sheme_card_row mt-3">
            <?php 
                while($res = mysqli_fetch_assoc($featch)){
            ?>
                <div class="col-xl-3 sheme_card_body">
                    <ul>
                        <li><span>Deposit Amount :- </span> <?php echo $res['deposit_amount'];?> &#8377;</li>
                        <li><span>Yearly Interest :- </span> <?php echo $res['yearly_interast'];?> &#8377;</li>
                        <li><span>Duration :- </span> <?php echo $res['duration'];?></li>
                        <li><span>Refund Amount :- </span> <?php echo $res['refound_amount'];?> &#8377;</li>
                    </ul>
                    <div class="text-center">
                        <button class="btn">Read More..</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<!-- ----------X----Scheme Cards Display---X--------- -->
<?php
    // ============Include Footer Components==========
        include('components/footer.php');
    // ============Include Footer Components==========
?>