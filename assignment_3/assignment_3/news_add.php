<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Add news item',
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

    <script type="application/javascript" src="scripts/main.js"></script>

    <div class="row wp-row">
        <div class="col-md-12">
            <h1>Add a news item!</h1>
            <p>Please enter the title and the content of the article you want to submit.</p>
            <br />
            <form action="scripts/add_item.php" method="POST">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="article">Article</label>
                    <textarea class="form-control" id="article" name="article" rows="3" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>