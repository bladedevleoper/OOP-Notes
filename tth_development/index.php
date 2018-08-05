<?php
include 'inc/config.php';

//could use this in our dropdowns
$filter = ['status'=>'active'];
if (isset($_GET['status'])) {
    $filter['status'] = filter_input(
        INPUT_GET, 
        'status', 
        FILTER_SANITIZE_STRING
    );
}
$directory->selectListings($filter);

$title = "PHP Conferences";
require 'inc/header.php';

// $test = new ListingInactive(['description' => 'My Description with <b>good tags</b> and <a href="http://example.com">bad tags</a>!']);
// var_dump($test);
// var_dump( get_class($test));
// var_dump( is_a($test, 'ListingBasic'));

// $test2 = new ListingPremium(['description' => 'My Description with <b>good tags</b> and <a href="http://example.com">bad tags</a>!']);
// var_dump($test2);
// var_dump( get_class($test2));
// var_dump( is_a($test2, 'ListingBasic'));

echo '<ul class="nav nav-tabs">';
echo '<li role="presentation"';
if ($filter['status'] == 'active') echo ' class="active"';
echo '><a href="index.php">Active</a></li>';
foreach($directory->getStatuses() as $status){
    echo '<li role="presentation"';
    if ($filter['status'] == $status) echo ' class="active"';
    echo '><a href="index.php?status=' . $status . '">';
    echo ucwords($status) . '</a></li>';
}
echo '</ul>';

foreach ($directory->listings as $listing) {
    include 'views/list_item.php';
}

require 'inc/footer.php';