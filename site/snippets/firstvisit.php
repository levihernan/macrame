<!--?php
    function isMobile() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    };
    session_start();  
    if(isset($_SESSION['views']))
        $_SESSION['views'] = $_SESSION['views']+ 1;
    else {
            $_SESSION['views'] = $_SESSION['views']+ 1;
            if(isMobile()){
            // Do something for only mobile users
            snippet('loader');
            }
            else {
                // Do something for only desktop users
                snippet('vimeo');
            };
        };
?-->