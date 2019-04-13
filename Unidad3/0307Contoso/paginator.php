<?php
    $page = 'resources/home.php';

    if(isset($_GET['page'])) {
        switch($_GET['page']) {
            case "services": $page = 'resources/services.php'; break;
            case "us": $page = 'resources/us.php'; break;
            default: $page = 'resources/comingSoon.php'; break;
        }
    }
