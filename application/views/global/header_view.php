<!DOCTYPE html>
<html>
    <head>
        <title>
            <?= ( isset($page['title']) ) ? $page['title'] . ' - ' : '' ?>A2Lamp
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/foundation.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/jquery.qtip.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url();?>css/styles.css">
    </head>
    <body>
        <div class="contain-to-grid">
            <nav class="top-bar">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="/">A2Lamp</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
                </ul>

                <section class="top-bar-section">
                    <ul class="left">
                        <li class="divider"></li>
                        <li class="has-dropdown">
                            <?= anchor('topics/', 'Topics') ?>
                            <ul class="dropdown">
                                <li><?= anchor('topics/', 'Current Topics'); ?></li>
                                <li><?= anchor('topics/archive/', 'Archived Topics'); ?></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li class="has-dropdown">
                            <?= anchor('https://github.com/m1ck3y/a2lamp', 'GitHub') ?>
                            <ul class="dropdown">
                                <li><?= anchor('https://github.com/m1ck3y/a2lamp', 'Repo for this site'); ?></li>
                                <li><?= anchor('https://github.com/m1ck3y/a2lamp/issues', 'Report a bug / Request a feature'); ?></li>
                            </ul>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?= anchor('http://www.meetup.com/ann-arbor-php-mysql/', 'Meetup Group') ?>
                        </li>
                    </ul>

                    <ul class="right">
                        <li class="divider show-for-medium-and-up"></li>

                    <? if ( empty($user) ) : ?>
                        <li><?= anchor('/login', 'Log in', array( 'class' => 'login' )) ?></li>
                    <? else : ?>
                        <li class="has-dropdown">
                            <a class="active" href="#"><?= $user->name ?></a>
                            <ul class="dropdown">
                                <li><?= anchor('topics/create', 'Submit a topic'); ?></li>
                                <li><?= anchor('/logout', 'Log out') ?></li>
                            </ul>
                        </li>
                    <? endif; ?>

                        <li class="toggle-topbar menu-icon"></li>
                    </ul>

                </section>
            </nav>
        </div>