<?php

return array(
    'app' => array(
        'class' => 'queasy\framework\App',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'app.php')
            ),
            array(
                'service' => 'this'
            )
        )
    ),
    'router' => array(
        'class' => 'queasy\framework\RegexRouter',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'router.php')
            )
        )
    ),
    /*
    'db' => array(
        'class' => 'queasy\db\Db',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'db.php')
            )
        ),
        'setLogger' => array(
            array(
                'service' => 'logger'
            )
        )
    ),
    */
    'logger' => array(
        'class' => 'queasy\log\Logger',
        'construct' => array(
            array(
                'value' => new queasy\config\Config(QUEASY_ROOT_PATH . 'config' . DIRECTORY_SEPARATOR . 'logger.php')
            )
        )
    ),
    'request' => array(
        'class' => 'queasy\http\ServerRequest'
    ),
    'response' => array(
        'class' => 'queasy\http\Response'
    )
);

