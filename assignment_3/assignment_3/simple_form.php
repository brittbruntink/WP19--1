<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/~s3782808/WP19/assignment_3/index.php',
        'Add news item' => '/~s3782808/WP19/assignment_3/news_add.php',
        'Leap Year' => '/~s3782808/WP19/assignment_3/leapyear.php',
        'Simple Form' => '/~s3782808/WP19/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?>

<div class="row wp-row">
    <div class="col-md-12">
        <h1>
            <?php
            if (empty($_GET["inputName"])) {
                echo "Welcome!";
            } else {
                echo "Welcome " . $_GET["inputName"] . "!";
            }
            ?>
        </h1>
        <p>
            <?php
            if (empty($_GET["inputPlace"])) {
                echo "Where are you from?";
            } elseif ($_GET["inputPlace"] == "Amsterdam" or $_GET["inputPlace"] == "amsterdam") {
                echo "You're from the capital of the Netherlands!";
            } else {
                echo "You're from " . $_GET["inputPlace"] . "!";
            }
            ?>
        </p>
        <form name="form" action="simple_form.php" method="GET">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" name="inputName" placeholder="Enter your name here">
            </div>
            <div class="form-group">
                <label for="inputPlace">Place</label>
                <input type="text" class="form-control" name="inputPlace" placeholder="Enter your place here">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>





