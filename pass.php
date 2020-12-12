<?php

    $options = [
        'cost' => 5
    ];

    echo password_hash("qwerty123", PASSWORD_DEFAULT, $options);

?>
