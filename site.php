<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Odeon-Ensemble München</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="./layout.css" rel="stylesheet" type="text/css">
    </head>

    <?php
        require_once ('./parts/includes.php');

        $nav = new Nav($n, $s2, $s1);
		$pathB = "./parts/base/";
    ?>

<body text="#000000" bgcolor="#FFFFFF" link="#FF0000" alink="#FF0000" vlink="#FF0000">
    <div class="box">
             <?php
                 include ($pathB.'header.php');
             ?>
             <div class="content">
                     <div class="left">
                         <?php
                            echo $nav->show();
                         ?>
                     </div>
                     <div class="right">
                         <?php
                            include ("./parts/content/".$n.'.php');
                         ?>
                     </div>
                     <div class="clear">
                     </div>

             <?php
                 include ($pathB.'footer.php');
             ?>
             </div>
    </div>
</body>
</html>