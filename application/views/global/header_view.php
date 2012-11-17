<!DOCTYPE html>
<html>
    <head>
        <title>
            <?= ( isset($page['title']) ) ? $page['title'] . ' - ' : '' ?>A2Lamp
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url();?>css/foundation.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <div class="row">
                <div class="six columns centered">
                    <h1><?= ( isset($page['title']) ) ? $page['title'] : 'A2Lamp' ?></h1>
                    
                    <nav id="user">
                        <? if ( !empty($user) ) : ?>
                            Hi, <?= $user->name ?><br>
                            <?= anchor('/logout', 'Log out') ?>
                        <? else : ?>
                            <?= anchor('/login', 'Log in') ?>
                        <? endif; ?>
                    </nav>
                </div>
            </div>
        </header>

        <div id="content">
