<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
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

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>
                <?php
                if ($_POST['inputName'] != "") {
                    echo 'Welcome '.$_POST['inputName'] .'!';
                } else {
                    echo 'Welcome!';
                }
                ?>
            </h1>
            <p>
                <?php
                if ($_POST['inputPlace'] == "Groningen" or $_POST['inputPlace'] == "groningen") {
                    echo "WOW, you live in the best city of Holland!";
                }
                ?>
            </p>
            <p>
                <?php
                if ($_POST['inputAge'] != "") {
                    echo 'The next 5 leap years, this will be your age: 
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2024</td>
                                    <td>'.($_POST['inputAge'] + 5).'</td>
                                </tr>
                                <tr>
                                    <td>2028</td>
                                    <td>'.($_POST['inputAge'] + 9).'</td>
                                </tr>
                                <tr>
                                    <td>2032</td>
                                    <td>'.($_POST['inputAge'] + 13).'</td>
                                </tr>
                                <tr>
                                    <td>2036</td>
                                    <td>'.($_POST['inputAge'] + 17).'</td>
                                </tr>
                                <tr>
                                    <td>2040</td>
                                    <td>'.($_POST['inputAge'] + 21).'</td>
                                </tr>
                            </tbody>
                            </table>';
                }
                ?>
            </p>
            <script type="application/javascript" src="scripts/leapyear.js"></script>
            <form name="form" id="form" action="leapyear.php" method="POST">
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Enter your Name" required>
                    <div class="invalid-feedback">Please provide a valid Name.</div>
                    <div class="valid-feedback">Cool name!</div>
                </div>
                <div class="form-group">
                    <label for="inputAge">Age</label>
                    <input type="number" class="form-control" name="inputAge" id="inputAge" placeholder="Enter your Age" required>
                    <div class="invalid-feedback">Please provide a valid Age.</div>
                    <div class="valid-feedback">You look so good for your age ;)</div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Mail address</label>
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Enter your Mail Address" required>
                    <div class="invalid-feedback">Please provide a valid Email address.</div>
                    <div class="valid-feedback">Cool e-mail address.</div>
                </div>
                <div class="form-group">
                    <label for="inputPlace">Place</label>
                    <input type="text" class="form-control" name="inputPlace" id="inputPlace" placeholder="Enter your Place" required>
                    <div class="invalid-feedback">Please provide a valid Place.</div>
                    <div class="valid-feedback">Wow, that's a nice place!</div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>



<?php
include __DIR__ . '/tpl/body_end.php';
?>
