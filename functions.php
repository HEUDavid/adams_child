<?php
if (!function_exists('davidxiang')) {
    function davidxiang() {
        // 加载子主题样式
        echo '<link href="https://mdavid.cn/wp-content/themes/adams_child/style.css" type="text/css" rel="stylesheet">';
        echo '<script>console.info("无聊的人。。。")</script>';
    }
}

add_action('wp_head', 'davidxiang');


?>
