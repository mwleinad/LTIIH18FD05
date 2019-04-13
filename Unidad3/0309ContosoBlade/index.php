<?php 
require __DIR__ . '/vendor/autoload.php';

use Jenssegers\Blade\Blade;

$blade = new Blade('resources/views', 'cache');


$page = 'home';

if(isset($_GET['page'])) {
    switch($_GET['page']) {
        case "services": $page = 'services'; break;
        case "us": $page = 'us'; break;
        default: $page = 'comingSoon'; break;
    }
}

echo $blade->make($page);