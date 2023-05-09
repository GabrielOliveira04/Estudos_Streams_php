<?php
var_dump($_FILES['arquivo']);

move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . ' upload.php');

