<?php
        setcookie('style', 'success', time() - 180, '/');

        header('Location: login.php');
        die();
        ?>