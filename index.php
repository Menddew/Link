<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css.css" rel="stylesheet" type="text/css"/>
        <title>Odkaz</title>
    </head>
    <body>
        <?php
        /** This is a file of index.php
         *  @author Lukáš Kotyk
         * @version 0.0.1
         * @copyright (c) 2015, Lukáš Kotyk
         */
        /**
         * require file Odkaz.php
         */
        require 'Odkaz.php';

        $a = new odkaz;
        /**
         * @link http://www.google.cz 
         */
        $a->seturl("http://www.google.cz");
        /**
         * Text on display
         */
        $a->settext("Google");
        /**
         * caption on link
         */
        $a->settitle("Google");
        /**
         * center link
         */
        $a->setcenter();
        /**
         * echo $a
         */
        echo$a;
        ?>


    </body>
</html>
