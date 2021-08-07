<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />

        <base href="<?php echo preg_replace('/index\.php.*/', '', $this->app->request->getRequestTarget()) ?>" />

        <title>QuEasy PHP Framework - Web Application Template</title>
    </head>

    <body>
        <p>Message: <?= $message ?></p>
    </body>
</html>

