<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'public/queue.php';
        require 'public/navigation.php';
        break;
    case '/queue':
        require 'public/queue.php';
        require 'public/navigation.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}

?>