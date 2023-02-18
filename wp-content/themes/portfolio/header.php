<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="WEBデザイナーを目指し、日々猛進する現役専門学生の初ポートフォリオサイト。ネオン（光）をモチーフにしたサイトに仕上げました。" name="description">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/icon_32x32.ico')) ?>">
    <title><?php echo bloginfo('name'); ?></title>
    <script>
        (function(d) {
            var config = {
                    kitId: 'uca3rxv',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
</head>

<body>
    <div class="loading">
        <div class="load_container">
            <img src="<?php echo esc_url(get_theme_file_uri('img/smileG.png')) ?>" alt=""><img src="<?php echo esc_url(get_theme_file_uri('img/smileY.png')) ?>" alt=""><img src="<?php echo esc_url(get_theme_file_uri('img/smileR.png')) ?>" alt="">
        </div>
    </div>
    <div class="menu">
        <div class="c_m"><b>CLOSE</b><b>MENU</b></div>
        <input type="checkbox">
        <span id="inbox" class="flex"><ion-icon name="bulb-outline"></ion-icon></span>
    </div>
    <header class="selectmenu">
        <div class="menuback flex">
            <ul class="menu_list">
                <li><a href="<?php echo esc_url(home_url()) ?>">MAIN</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')) ?>">ABOUT</a></li>
                <li><a href="<?php echo esc_url(home_url('/category/works')) ?>">WORKS</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')) ?>">CONTACT</a></li>
            </ul>
            <div class="rump flex">
                <img class="in_rump" src="<?php echo esc_url(get_theme_file_uri('img/rump.png')) ?>" alt="rump">
                <img class="in_light" src="<?php echo esc_url(get_theme_file_uri('img/light.png')) ?>" alt="light">
            </div>
        </div>
    </header>