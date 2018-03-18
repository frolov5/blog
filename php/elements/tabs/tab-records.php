<div id="content-tab-records" class="tab-content-hidden">
    <div class="col-sm-8">
        <div class="rg-profile profile-prompt">
            <div class="row prompt">
                <form action="#" id="search-form" method="post">
                    <div class="col-sm-4 select-category">
                        <select id="search">
                            <option>ИТ</option>
                            <option>Готовим дома</option>
                            <option>Гаражный ремонт авто</option>
                            <option>Идеи для интерьера</option>
                        </select>
                    </div>
                    <div class="col-sm-4 form-group input-date">
                        <input type="text" class="form-control" name="from-date" placeholder="Дата от">
                        <input type="text" class="form-control" name="to-date" placeholder="Дата до">
                    </div>
                    <div class="col-sm-4 form-group">
                        <input type="search" class="form-control search-by-word" name="search-by-word" placeholder="Поиск по слову...">
                    </div>
                    <div class="col-sm-offset-4 col-sm-4 button">
                        <input type="button" class="btn btn-primary" value="Найти">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-pad">
        <div class="profile-input clearfix">
            <?php
                require_once $_SERVER['DOCUMENT_ROOT'] . '/php/elements/post/post-body.php';
            ?>
        </div>
    </div>
</div>