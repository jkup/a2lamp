<!DOCTYPE html>
<html>
    <head>
        <title>
            <?= ( isset($page['title']) ) ? $page['title'] . ' - ' : '' ?>A2Lamp
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url();?>css/foundation.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="row">
            <div class="twelve columns">
                <nav class="top-bar">
                    <ul>
                        <li class="name">
                            <h1><a href="/">A2Lamp</a></h1>
                        </li>
                        <li class="divider"></li>
                        <li class="toggle-topbar"><a href="#"></a></li>
                    </ul>

                <section>
                    <ul class="left">
                        <li class="has-dropdown">
                            <?= anchor('topics/', 'Presentation Topics', 'class="active"') ?>
                            <ul class="dropdown">
                                <li>
                                    <?= anchor('topics', 'View topics'); ?>
                                </li>
                                <li>
                                    <?= anchor('topics/create', 'Create a new topic'); ?>
                                </li>
                            </ul>
                        </li>
                        <li><?= anchor('blog/', 'Minutes From Past Meetups') ?></li>
                    </ul>

                    <ul class="right">
                        <li class="divider show-for-medium-and-up"></li>

                    <? if ( empty($user) ) : ?>
                        <li><?= anchor('/login', 'Log in') ?></li>
                    <? else : ?>
                        <li class="has-dropdown">
                            <a class="active" href="#"><?= $user->name ?></a>
                            <ul class="dropdown">
                                <li><?= anchor('/logout', 'Log out') ?></li>
                            </ul>
                        </li>
                    <? endif; ?>
                    </ul>

                  </section>
            </div>
        </div>