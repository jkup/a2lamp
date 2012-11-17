<!DOCTYPE html>
<html>
    <head>
        <title>
            <?= ( isset($page['title']) ) ? $page['title'] . ' - ' : '' ?>a2lamp
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>a2lamp</h1>
            
            <nav id="user">
                <? if ( !empty($user) ) : ?>
                    Hi, <?= $user->name ?><br>
                    <?= anchor('/logout', 'Log out') ?>
                <? else : ?>
                    <?= anchor('/login', 'Log in') ?>
                <? endif; ?>
            </nav>
        </header>

        <div id="content">