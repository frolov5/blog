<!DOCTYPE html>
<html>
<head>
    <title>Don.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
    require_once 'php/elements/download/download-process.php';
?>
<div id="wrapper">
    <div class="container-fluid container-fluid-content">
        <div class="row row-wrapper-header">
            <?php
                require_once 'php/elements/header/header.php';
            ?>
        </div>
        <div class="row row-wrapper-body">
            <?php
                require_once 'php/elements/slider/slider.php';
            ?>
            <div class="column">
                <div class="col-sm-4">
                    <?php
                        require_once 'php/elements/column/column-category.php';
                    ?>
                </div>
                <div class="col-sm-8">
                    <?php
                        require_once 'php/elements/post/post-body-header.php';
                    ?>
                    <div class="body-list">
                        <ul class="block-list block-list-post abbreviated-list">
                            <?php
                                require 'php/elements/post/post-body.php';
                            ?>
                        </ul>
                    </div>
                    <?php
                        require 'php/elements/more-post/more-post.php';
                        require_once 'php/elements/question/questions-header.php';
                    ?>
                    <div class="body-list">
                        <ul class="block-list-item block-list-item-questions inline-block">
                            <?php
                                require 'php/elements/question/link-questions.php';
                                require 'php/elements/question/link-questions.php';
                                require 'php/elements/question/link-questions.php';
                                require 'php/elements/question/link-questions.php';
                            ?>
                        </ul>
                    </div>
                    <?php
                        require 'php/elements/more-post/more-post.php';
                    ?>
                </div>

            </div>
            <?php
                    require_once 'php/elements/slider/slider-float.php';
                ?>
        </div>
        <div class="row row-wrapper-footer">
            <?php
                require_once 'php/elements/footer/footer.php';
            ?>
        </div>
        <a href="#" class="scrollup">Наверх</a>
    </div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>


