<!DOCTYPE html>
<html>
<head>
    <title>Don.com</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="select2/dist/css/select2.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/style-profile.css">
    <link rel="stylesheet" href="css/style-full-post.css" />
</head>
<body>
<div id="wrapper">
    <div class="container-fluid container-fluid-content">
        <div class="row row-wrapper-header">
            <?php
                require_once 'php/elements/header/header.php';
            ?>
        </div>
        <div class="row row-wrapper-body">
            <div class="column">
                <div class="col-sm-4">
                    <?php
                        require_once 'php/elements/column/column-category.php';
                        require_once 'php/elements/column/column-filtr.php'
                    ?>
                </div>
                <div class="col-sm-8">
                    <?php
                        require_once 'php/elements/post/post-body-header.php';
                    ?>
                    <div class="body-list">
                        <?php
                            require_once 'php/elements/post/full-post-body.php';
                        ?>
                    </div>
                </div>
            </div>
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
<script src="js/myprofile.js"></script>
<script src="select2/dist/js/select2.js"></script>
</body>
</html>