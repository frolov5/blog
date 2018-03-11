<div id="content-tab-profile" class="tab-content-active">
    <div class="col-sm-8">
        <div class="rg-profile profile-prompt">
            <div class="prompt"></div>
        </div>
    </div>
    <div class="col-sm-8 col-pad">
        <div class="rg-profile profile-input clearfix">
            <div class="col-sm-5">
                <div class="main-block-menu">
                    <ul class="menu-main">
                        <li><a href="#main" class="main-link current">Основное</a></li>
                        <li><a href="#education" class="education-link">Образование</a></li>
                        <li><a href="#work" class="work-link">Место работы</a></li>
                        <li><a href="#skill" class="skill-link">Навыки</a></li>
                        <li><a href="#about" class="about-link">О себе</a></li>
                        <li><a href="#" class="statistic-link">Статистика</a></li>
                        <li><a href="#" class="change-password" data-toggle="modal" data-target="#myModal">Изменить пароль</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="category-profile cat-first" id="main">
                    <div class="updated">
                        <p>Аккаунт пользователя был обновлен</p>
                        <span>X</span>
                    </div>
                    <form action="#"  class="form-active" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login"
                                   placeholder="Логин :">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"
                                   placeholder="Email :">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name"
                                   placeholder="Имя :">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="surname"
                                   placeholder="Фамилия :">
                        </div>
                        <div class="chek-button">
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="gender1"> Мужской
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="gender2"> Женский
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city"
                                   placeholder="Город :">
                        </div>
                        <div class="button">
                            <input type="button" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
                <div class="category-profile cat-first" id="education">
                    <form action="#" id="education-form" method="post">
                        <div class="education">
                            <select id="select">
                                <option>Высшее</option>
                                <option>Неоконченное высшее</option>
                                <option>Среднее специальное</option>
                                <option>Среднее</option>
                            </select>
                            <div class="form-group">
                                <input type="text" class="form-control" name="institution"
                                       placeholder="Учебное заведение :">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="faculty"
                                       placeholder="Факультет,специальность :">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="education_city"
                                       placeholder="Город :">
                            </div>
                        </div>
                        <div class="button">
                            <input type="button" id="del-education" class="btn btn-primary  minus" value="-">
                            <input type="button" id="add-education" class="btn btn-primary" value="+">
                            <input type="button" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
                <div class="category-profile cat-first" id="work">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="company_name"
                                   placeholder="Название компании :">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="company_city"
                                   placeholder="Город :">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="function"
                                   placeholder="Должность :">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="scope"
                                   placeholder="Сфера деятельности :">
                        </div>
                        <div class="button">
                            <input type="button" class="btn btn-primary" value="+">
                            <input type="button" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
                <div class="category-profile cat-first" id="skill">
                    <form action="#" method="post">
                        <div class="form-group skill">
                            <input type="text" class="form-control skill-input" name="skill[]"
                                   placeholder="Навык :">
                        </div>
                        <div class="button">
                            <input type="button" id="del-skill" class="btn btn-primary  minus" value="-">
                            <input type="button" id="add-skill" class="btn btn-primary" value="+">
                            <input type="button" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
                <div class="category-profile cat-first" id="about">
                    <form action="#"  method="post">
                        <div class="form-group">
                                        <textarea class="form-control" name="about_me" placeholder="О себе :"
                                                  cols="30" rows="20"></textarea>
                        </div>
                        <div class="button">
                            <input type="button" class="btn btn-primary" value="+">
                            <input type="button" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                <h2 class="confirm-password">Смена пароля</h2>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="old-password"
                                               placeholder="Старый пароль :">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="new-password"
                                               placeholder="Новый пароль :">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm-password"
                                               placeholder="Повторите пароль :">
                                    </div>
                                    <div class="form-group">
                                        <input type="button" id="modal_button" class="btn btn-primary"
                                               value="Сохранить" data-dismiss="modal">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>