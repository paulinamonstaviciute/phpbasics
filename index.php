<?php
$img_src = 'https://seethefullpicture.ca/wp-content/uploads/2019/06/Alcon_SeeTheFullPicture_Website_1901x11252.jpg';
?>
<html>
    <head>
        <title>PHP</title>
        <style>
            img{width: 200px;
                height: 200px;
            }
        </style>
    </head>
    <body>
        <img src="<?php print $img_src; ?>">
        <img src="<?php print $img_src; ?>">
        <img src="<?php print $img_src; ?>">
        <img src="<?php print $img_src; ?>">
    </body>
</html>