<?php

setcookie('title',$product['title'], time() + 180, '/');
setcookie('link',$product['link'], time() + 180, '/');
setcookie('price',$product['price'], time() + 180, '/');
setcookie('percent',$product['percent'], time() + 180, '/');

header('Location: welcome.php');
die();