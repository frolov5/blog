<li class="block-list-item block-list-item-post abbreviated-list">
    <article class="block block-review">
        <h3><a href="#" class="block-review-header">Заголовок поста</a></h3>
        <ul class="crumbs inline-block">
            <?php
                require 'crumbs.php';
                echo str_repeat("$cr", 4);
            ?>
        </ul>
        <div class="block-review-body block-review-body-post">
            <div class="body-post body-post-text">
                <img src="/img/obmen_razumov.jpg" alt="Shekli" width="180px" align="left">
                <?php
                    require 'media-text.php';
                ?>
            </div>
            <div class="read_more"><a href="#">Читать далее</a></div>
            <?php
                require 'statistics.php'
            ?>
        </div>
    </article>
</li>
