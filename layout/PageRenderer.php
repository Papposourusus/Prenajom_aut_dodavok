<?php
class PageRenderer {
    public function render($view, $data = []) {
        extract($data);
        include 'layout/log.php';
        include "views/$view.php";
        
    }
}
