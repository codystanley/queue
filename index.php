<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'public/queue.php';
        break;
    case '/queue':
        require 'public/queue.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}

?>