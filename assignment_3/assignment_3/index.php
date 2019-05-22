<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'News',
    'items' => Array(
        'News' => '/~s3782808/WP19/assignment_3/index.php',
        'Add news item' => '/~s3782808/WP19/assignment_3/news_add.php',
        'Leap Year' => '/~s3782808/WP19/assignment_3/leapyear.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
?> <script type="application/javascript" src="scripts/main.js"></script> <div class="pd-40"></div> <div class="row">
    <div class="col-md-12" id="news_container">
    </div>
</div>
    <div class="card text-center news-card">
        <div class="card-header">Peilingwijzer: VVD en Forum voor...</div>
        <div class="card-body"><h5 class="card-title">Peilingwijzer: VVD en ...</h5>
            <p class="card-text">In de nieuwste Peilingwijzer zijn de VVD en ...</p>
            <div class="row">
                <div class="col-md-6" style="text-align: right;">
                    <form action="news_edit.php" method="POST">
                        <input type="hidden" name="id" value="1">
                        <button type="submit" class="btn btn-light">Edit</button>
                    </form>
                </div>
                <div class="col-md-6" style="text-align: left;">
                    <button class="btn btn-danger article_remove" article-id="1">Remove</button>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">Wednesday 1 May 2019 13:02</div>
    </div>

<?php
include __DIR__ . '/tpl/body_end.php';
?>