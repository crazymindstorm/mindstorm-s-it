<!DOCTYPE html>
<html lang="en" lang="de" xmlns="http://www.w3.org/1999/xhtml"><head>



<!--
              _                            _
__      _____| | ___ ___  _ __ ___   ___  | |_ ___
\ \ /\ / / _ \ |/ __/ _ \| '_ ` _ \ / _ \ | __/ _ \
 \ V  V /  __/ | (_| (_) | | | | | |  __/ | || (_) |
  \_/\_/ \___|_|\___\___/|_| |_| |_|\___|  \__\___/
           _           _     _                           __ _ _  __               _
 _ __ ___ (_)_ __   __| |___| |_ ___  _ __ _ __ ___  ___| _(_) ||_ |   _ __   ___| |_
| '_ ` _ \| | '_ \ / _` / __| __/ _ \| '__| '_ ` _ \/ __| || | __| |  | '_ \ / _ \ __|
| | | | | | | | | | (_| \__ \ || (_) | |  | | | | | \__ \ || | |_| | _| | | |  __/ |_
|_| |_| |_|_|_| |_|\__,_|___/\__\___/|_|  |_| |_| |_|___/ ||_|\__| |(_)_| |_|\___|\__|
                                                        |__|    |__|
            .,ad88888888baa,
        ,d8P"""        ""9888ba.
     .a8"          ,ad88888888888a
    aP'          ,8888this888888888a
  ,8"           ,88888888888is8888888,
 ,8'            (888live88( )888888888,
,8'             `8888888888let888888888
8)               `8888it888888888888888,
8                  "888888peacfully8888)
8                   `88filled8888888888)
8)                    "8888with88888888
(b                     "8888harmony888'
`8,        (8)          88<388<388888)
 "8a                   ,8<38<3888888)
   V8,                 d8<3888<3888"
    `8b,             ,d88<388<388P'
      `V8a,       ,ad88<38<3888P'
         ""88888888<38<38888P"
              """"""""""""

-->



<!-- google analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=Googletag"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'Googletag', { 'anonymize_ip':true } );
</script>

<!-- meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0" />
<meta name="keywords" content="mindstorm's[it], mindstorm's-it, IRC, Chat, 360°, fotos, pictures, live tv, computerdienstleistungen, computer service, Linux, CrazyMindstorm"/>


<title>Mindstorm's[IT]</title>
<meta name="description" content="Mindstorm's[IT] bietet/serves dir/you Computerdienstleistungen/Computerservice , IRC Chat, 360° Fotos/Pictures, Live TV, so wie einen/and a blog Blog an">
<meta property="og:image" content="/bilder/icons/android-icon-192x192.png"/>
<meta name="author" content="Crazy Mindstorm">

<link rel="apple-touch-icon" sizes="57x57" href="/bilder/icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/bilder/icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/bilder/icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/bilder/icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/bilder/icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/bilder/icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/bilder/icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/bilder/icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/bilder/icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/bilder/icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/bilder/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/bilder/icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/bilder/icons/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#395aed">
<meta name="msapplication-TileImage" content="/bilder/icons/ms-icon-144x144.png">
<meta name="theme-color" content="#47a0ed">




<!-- css -->
    <link rel="stylesheet" href="css/mindstormsit.css">
    </head>

    <body>


<div id="page">
<div id="index">



<img class="logo" src="https://mindstormsit.net/bilder/mindstormsit-host3.svg" alt="mindstorm's-it.net logo">
<h1 style="color: silver;" style="font-family: monospace;"> </h1> <!-- <span style="font-family: monospace;"> mindstorm's-it.net</span> -->
<p>The owner of this Webserver has just put up a small<a class="ram" target="_blank" href="https://mindstormsit.net/fsociety00_dat.pdf" alt="link zu einer pdf">TextFile</a> and a <a
class="ram" target="_blank" href="https://mindstormsit.net/blog/" alt="link zum Blog">Blog</a>
</p>
<!-- test frame kugel
<iframe class="iframer2" id="23" width="200" height="200" src="https://mindstormsit.net/gravitation/index.html" frameborder="1" ></iframe>
-->
<!-- matrix frame -->
<iframe class="iframeround" id="42" width="100%" height="80" src="https://mindstormsit.net/matrix/index.html" aria-label="smal iframe with the matrix code running in it / kleiner iframe in dem der matrix code rennt"  frameborder="1" ></iframe>

<!-- server own ip-widget -->
<h3 class="textsteps">
    Your/Deine IP-Adress/e:
    <?php
    echo htmlspecialchars($_SERVER['REMOTE_ADDR'], ENT_QUOTES, 'UTF-8');
    ?>
<br>
    Your/Dein Hostname:
    <?php
    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);
    $safeHostname = htmlspecialchars($hostname, ENT_QUOTES, 'UTF-8');
    echo $safeHostname;
    ?>
<br>
     Your/Dein Browser:
    <?php
    if (isset($_SERVER["HTTP_USER_AGENT"])) {
    echo htmlspecialchars($_SERVER["HTTP_USER_AGENT"], ENT_QUOTES, 'UTF-8');}
    else {
    echo "Ihr Webbrowser konnte nicht erkannt werden";}
    ?>
<!-- time&date -->
<p>Time you visited us/Startzeit deines Besuchs <?php echo htmlspecialchars( date('d.m.Y \u\m\/@\ H:i:s') );?> Uhr</p>
<br>
</h3>
</div>

<div id="Box1">

<!-- 360° pictures -->

<a target="_blank" href="https://mindstormsit.net/360.html" class="ddr4" alt="360° Fotos">360°📸️Fotos</a>

<!-- service -->
<a target="_blank" href="https://mindstormsit.net/service.php" class="ddr4" alt="service webseite">#⚙️🔧️Service</a>

<!-- Twitch Stream -->
<a target="_blank" href="https://mindstormsit.net/twitch.php" class="ddr4" alt="twitch stream">#📽️Twitch</a>

<!-- datenschutzerklaerung -->

<a target="_blank" href="https://mindstormsit.net/datenschutzerklaerung.html" class="ddr4" alt="link to the impressum and the description how we use userdata/link zur Datenschutzerklärung und impressum">#Datenschutz</a>

<!-- hexgrid/nova/spielerei-iframe  -->
<iframe id="3" width="100%" height="222" src="https://mindstormsit.net/hexgrid/" aria-label="iframe witch shows graphic gimmicks / grafische spielereien sind hier im iframe zu sehen" frameborder="1"></iframe>

<!-- i always try to write clean code ;) -->
<!-- release_April2024 -->

</div>
</body></html>
