<?php
define("TITLE", "Team | Franklin's Fine Dining");
include('includes/header.php');
?>

<div id="team-members" class="cf">

    <h1>Our Team at Franklin's</h1>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum: <strong>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</strong></p>

    <hr>

    <?php
    foreach ($teamMembers as $member) {
    ?>

        <div class="member">

            <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
            <h2><?php echo $member[name]; ?></h2>
            <p><?php echo $member[bio]; ?></p>

        </div> <!-- member -->

    <?php
    }
    ?>

</div> <!-- team-members -->

<hr>

<?php include('includes/footer.php'); ?>