<?php

function say($what)
{
    echo $what;
}

?>

<html>
<head>
    <title>Hello from Container</title>
</head>
<body>
    <?php say("Hello from " . php_uname("r")); ?>
</body>
</html>
