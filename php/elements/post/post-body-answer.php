<li class="block-list-item block-list-item-post abbreviated-list">
    <article class="block block-review">
        <h3><a href="#" class="block-review-header">Заголовок вопроса</a></h3>
        <ul class="crumbs inline-block">
            <?php
                require 'crumbs.php';
            echo str_repeat("$cr", 4);
            ?>
        </ul>
        <div class="block-review-body block-review-body-post">
            <div class="body-post body-post-text">
                <?php
                    require 'comments-tab-answer.php';
                ?>
            </div>
        </div>
    </article>
</li>