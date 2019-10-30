<html>
    <head>
        <title>Bomba</title>
        <style>
            body {
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            .bomba{
                height: <?php print date('1s'); ?>px;
                width: <?php print date('1s'); ?>px;
                background-image: url("https://mpng.pngfly.com/20180802/esc/kisspng-vector-graphics-explosion-clip-art-bomb-image-5b63381813fbc0.4716718515332290800819.jpg");
                background-size:cover;
            }
            p {
                text-align: center;
            } 
            .bomba-00{
                width: 1000px;
                height: 1000px;
                background-image: url(https://g3.dcdn.lt/images/pix/atomines-bombos-sprogimas-81021179.jpg);  
            }
        </style>
    </head>
    <body>
        <div class="bomba bomba-<?php print date('s')?>"></div>
        <p><?php print date('s') ?></p>
    </body>
</html>