<?php


class View
{
    public static function render($mainContent, $data = []) {

        extract($data);

        include(ROOT . '/templates/blocks/header.php');

        if (file_exists(ROOT . '/views/' . $mainContent .'.php')) {
            include (ROOT . '/views/' . $mainContent .'.php');
        }

        include(ROOT . '/templates/blocks/footer.php');
        if (is_array($data)) {
            extract($data);
        }
    }

}