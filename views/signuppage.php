<body class="d-flex flex-column h-100">

    <div class="container mt-5">
        <div class="d-flex justify-content-center">

            <div class="card w-50">

                <div class="card-header">
                    <h5 class="ModalLabel1 text-center font-weight-bold">NewsSite</h5>
                    <h4 class="ModalLabel2 text-center mt-2">Регистрация</h4>
                </div>

                <div class="card-body px-5">
                    <div class="text-center">
                        <p style="color: <?php echo $data['color'];?>; font-size: 2em"><?php echo $data['title'];?></p>
                    </div>
                    <form method="post" action="signup/insert">
                        <label class="form_labels text-body mb-1" for="emailField">Адрес электронной почты</label>
                        <input type="text" class="form-control" id="emailField" name="emailField" required autofocus>
                        <label class="form_labels text-body mt-2 mb-1" for="passwordField">Пароль</label>
                        <input type="text" class="form-control" id="passwordField" name="passwordField" required autofocus>
                        <label class="form_labels text-body mt-2 mb-1" for="passwordRepeatField">Повторите пароль</label>
                        <input type="text" class="form-control" id="passwordRepeatField" name="passwordRepeatField" required autofocus>
                        <label class="form_labels text-body mt-2 mb-1" for="countryField">Страна</label>
                        <select type="text" class="form-control" id="countryField" name="countryField" required autofocus>
                            <option>Выберете...</option>
                            <option value="Россия">Россия</option>
                            <option value="Украина">Украина</option>
                            <option value="Казахстан">Казахстан</option>
                        </select>
                        <div class="d-flex justify-content-center">
                            <div class="checkbox mt-3">
                                <label>
                                    <input class="form-check-input" type="checkbox" name="agreementField" value="1"> Хочу получать свежие новости на электронную почту!
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" class="btn btn-dark my-3" value="Регистрация!">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
