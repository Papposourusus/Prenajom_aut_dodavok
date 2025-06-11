<?php
class PageRenderer {
    public function render($view, $data = []) {
        extract($data);
        include 'views/layout/header.php';
        include "views/$view.php";
        include 'views/layout/footer.php';
    }
}
