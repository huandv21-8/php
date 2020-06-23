<?php
        setcookie('style', 'success', time() - 100, '/');

        header('Location: login.php');
        die();
        ?>