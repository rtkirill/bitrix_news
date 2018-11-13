<?
    function dump($val) {
        global $USER;
        if($USER->isAdmin()) {
            echo "<pre>";
            var_dump($val);
            echo "</pre>";
        }
    }
?>