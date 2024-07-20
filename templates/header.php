<style>
    #result{
        margin-top: 20px;
        background-color: #333333;
        list-style-type: none;
        width: 600px;
        position: absolute;
        top: 32px;
        z-index: 100;
        padding-left: 0;
    }
    .column {
        float: left;
        padding: 5px;
    }
    .left {
        text-align: center;
        width: 20%;
    }
    .right {
        width: 80%;
    }
    .rowsearch:after {
        content: "";
        display: table;
        clear: both;
    }
    .rowsearch:hover {
        background-color: #2c2929;
    }
</style>
<div class="th">
    <div class="centernav bound">
        <div class="shme"><i class="fa fa-bars" aria-hidden="true"></i></div>
        <header class="mainheader" role="banner" itemscope itemtype="http://schema.org/WPHeader">
            <div class="site-branding logox">
                <h1 class="logos">
                    <a href="/" itemprop="url" title="">
                        <?php op_the_logo('max-width:50px') ?>
                    </a>
                </h1>
            </div>
        </header>
        <div class="searchx">
            <form method="GET" action="/" id="form" itemprop="potentialAction" itemscope
                  itemtype="http://schema.org/SearchAction" autocomplete="off">
                <input name="s" itemprop="query-input" class="search-live" type="text" id="s" onkeyup="fetch()"
                       placeholder="Tìm kiếm phim..." value="<?php echo "$s"; ?>" />
                <button type="button" id="submit-search" onclick="$(this).parent().submit()">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>

        </div>
        <div class="" id="result"></div>
        <div id="thememode"><label class="switch"> <input type="checkbox"> <span class="slider round"></span>
            </label></div>

    </div>
</div>
<nav id="main-menu" class="mm">
    <div class="centernav">
        <div class="bound"><span itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement"
                                 role="navigation">
                <ul id="menu-menu" class="menu">
                    <?php
                    $menu_items = wp_get_menu_array('primary-menu');
                    foreach ($menu_items as $key => $item) : ?>
                    <?php if (empty($item['children'])) { ?>
                              <li id="menu-item-<?= $key ?>"
                                  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-<?= $key ?>">
                                <a href="<?= $item['url'] ?>" itemprop="url"><span itemprop="name"><?= $item['title'] ?></span></a>
                               </li>
                         <?php } else { ?>
                             <li
                                     class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                                    <a href="<?= $item['url'] ?>"> <?= $item['title'] ?></a>
                                    <ul class="sub-menu">
                                <?php foreach ($item['children'] as $k => $child): ?>
                                    <li>
                                            <a href="<?= $child['url'] ?>"><?= $child['title'] ?></a>
                                        </li>
                                <?php endforeach; ?>
                                    </ul>
                            </li>

                         <?php } ?>
                                    <?php endforeach; ?>
                </ul>
            </span>
            <div class="clear"></div>
        </div>
    </div>
</nav>