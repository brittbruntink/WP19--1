<?php
/* Header */
$page_title = 'Webprogramming Assignment 2';
$navigation = Array(
    'active' => 'Links',
    'items' => Array(
        'Home' => '/WP19/assignment_2/index.php',
        'Links' => '/WP19/assignment_2/links.php',
        'News' => '/WP19/assignment_2/news.php',
        'Future' => '/WP19/assignment_2/future.php'
    )
);
include __DIR__ . '/tpl/head.php';

/* Body */
include __DIR__ . '/tpl/body-start.php';
?>
<div class="col-md-12">
    <h1>Welcome to the links page.</h1>
    <div id="myLinkList"></div>
    <div class="col-md-12" id="form-alert">
        <p>Every field must be filled in.</p>
    </div>
    <div class="col-md-6">
        <form id="linkForm">
            <div class="form-group">
                <label for="inputLink">Link name *</label>
                <input type="text" class="form-control" id="inputLage" placeholder="Enter a Link">
            </div>
            <div class="form-group">
                <label for="inputURL">URL</label>
                <input type="text" class="form-control" id="inputURL" placeholder="Enter a URL">
            </div>
            <button type="button" id="addLinkButton">Add a link to the link list</button>
            <button type="button" id="fadeButton">Remove list</button>
        </form>
    </div>
</div>

<?php
include __DIR__ . '/tpl/body-end.php';

/* Footer */
include __DIR__ . '/tpl/footer.php';
?>