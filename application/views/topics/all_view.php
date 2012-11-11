<!DOCTYPE html>
<html>
    <head>
        <title>Current Topics</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Current Topics</h1>
        
        <div id="topics">
        <? if ( !empty($topics) ) : ?>
            <ul>
            <? foreach ( $topics as $topic ) : ?>
                <li>
                    <h2><?= $topic->title ?></h2>
                    <p><?= $topic->description ?></p>
                </li>
            <? endforeach; ?>
            </ul>
        <? endif; ?>
        </div>
    </body>
</html>
