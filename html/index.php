<?php

require_once('./inc/header.php');
require_once('./inc/nav.php');

?>

        <div class="containerIframe">
            <div class="wrapper">
                <!-- player -->
                <div id="twitch-embed"></div>
                <script src="https://embed.twitch.tv/embed/v1.js"></script>
                <script type="text/javascript">
                    new Twitch.Embed("twitch-embed", {
                        width: '100%',
                        height: 700,
                        channel: "PinoTyR",
                        theme: "dark",
                        
                    });
                </script>

                <img src="dist/assets/img/bg.jpg" alt="img test" style="width: 100%; display: block">
            </div>
		</div>

<?php

require_once('./inc/footer.php');

?>