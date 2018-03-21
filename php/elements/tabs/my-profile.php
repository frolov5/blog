<div class="col-sm-4">
    <div class="lf-profile">
        <div class="ava-block center">
            <div class="photo-ava">
                <div class="none-avatar" data-toggle="modal" data-target="#modal-change-ava">
                    <a href="#">
                        <div class="letter-ava">И</div>
                        <div class="change-ava">
                            <span>Загрузить фото</span>
                            <i class="fa fa-download fa-2x"></i>
                        </div>
                    </a>
                </div>
                <div class="unique-avatar" data-toggle="modal" data-target="#modal-change-ava">
                    <a href="#" class="">
                        <img class="photo-user" src="img/avatar3.jpg">
                        <div class="letter-ava">
                            <span>Загрузить фото</span>
                            <i class="fa fa-camera fa-5x"></i>
                        </div>
                    </a>
                </div>
                <div class="modal fade" id="modal-change-ava" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                <h2 class="confirm-password">Загрузка новой фотографии</h2>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post">
                                    <p>Для загрузки фотографии используйте форматы JPG, GIF или PNG.</p>
                                    <p>Если загрузка не удается попробуйте использовать фотографию меньшего размера</p>
                                    <input id="input-id" type="file" class="file" data-preview-file-type="text" >
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="link-profile">
                <input id="tab1" type="radio" class="tab-checked" name="tabs" value="content-tab-profile" checked>
                <label for="tab1" title="Профиль"><i class="fa fa-user-o" aria-hidden="true"></i> Профиль</label>
            </div>
            <div class="link-profile">
                <input id="tab2" type="radio" class="tab-checked" name="tabs" value="content-tab-records">
                <label for="tab2" title="Записи"><i class="fa fa-files-o" aria-hidden="true"></i>
                    Записи</label>
            </div>
            <div class="link-profile">
                <input id="tab3" type="radio" class="tab-checked" name="tabs" value="content-tab-bookmarks">
                <label for="tab3" title="Закладки"><i class="fa fa-paperclip" aria-hidden="true"></i>
                    Закладки</label>
            </div>
            <div class="link-profile">
                <input id="tab4" type="radio" class="tab-checked" name="tabs" value="content-tab-issues">
                <label for="tab4" title="Мои вопросы"><i class="fa fa-question-circle-o"
                                                         aria-hidden="true"></i> Вопросы</label>
            </div>
            <div class="link-profile">
                <input id="tab5" type="radio" class="tab-checked" name="tabs" value="content-tab-answer">
                <label for="tab5" title="Мои ответы"><i class="fa fa-reply-all"
                                                        aria-hidden="true"></i> Ответы</label>
            </div>
            <div class="link-profile">
                <input id="tab6" type="radio" class="tab-checked" name="tabs" value="content-tab-comments">
                <label for="tab6" title="Мои комментарии"><i class="fa fa-commenting-o"
                                                             aria-hidden="true"></i> Комментарии</label>
            </div>
        </div>
    </div>
</div>