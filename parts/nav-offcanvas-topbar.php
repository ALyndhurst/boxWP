<?php

// vars
$header = get_field('header_settings', 'options');

if ($header): ?>

    <div class="top-bar" id="top-bar-menu"
         style="background-color:<?php echo get_field('background_color', 'options'); ?>;">
        <div class="top-bar-left float-left">
            <ul class="menu">
                <li class="menu-text"><?php bloginfo('name'); ?></li>
            </ul>
        </div>
        <div class="top-bar-right show-for-medium">
            <?php joints_top_nav(); ?>
        </div>
        <div class="top-bar-right float-right show-for-small-only">
            <ul class="menu">
                <li>
                    <button class="menu-icon" type="button" data-toggle="off-canvas"></button>
                </li>
            </ul>
        </div>
    </div>

<?php endif; ?>