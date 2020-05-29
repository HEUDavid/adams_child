<?php
if (!function_exists('davidxiang_head')) {
    function davidxiang_head() {
        // 加载子主题样式
        echo '<link href="https://mdavid.cn/wp-content/themes/adams_child/style.css" type="text/css" rel="stylesheet">';
    }
}
add_action('wp_head', 'davidxiang_head');

if (!function_exists('davidxiang_footer')) {
    function davidxiang_footer() {
        if (is_page()) {
                echo '<style type="text/css">.nearbypost {display: none;}</style>';
	}
	echo '<script>console.info("无聊的人。。。")</script>';
    }
}
add_action('wp_footer', 'davidxiang_footer');

?>
