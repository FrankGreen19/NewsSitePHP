<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewsSite</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/templates/styles/main.css" type="text/css">
</head>
<body>

<div class="container">
    <header class="blog-header pt-2 pb-2 border-bottom">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="text-muted" href="#">Подписка</a>
            </div>
            <div class="col-4 text-center">
                <a href="/news" class="blog-header-logo text-dark font-weight-bold" id="headerLogo" >NewsSite</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a href="/signup" class="btn btn-sm btn-outline-secondary mr-1">Регистрация</a>
                <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
                    Войти
                </button>
            </div>
        </div>
    </header>

    <div class="nav-scroller pb-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">Все новости</a>
            <a class="p-2 text-muted" href="#">Технологии</a>
            <a class="p-2 text-muted" href="#">Спорт</a>
            <a class="p-2 text-muted" href="#">Дизайн</a>
            <a class="p-2 text-muted" href="#">Культура</a>
            <a class="p-2 text-muted" href="#">Наука</a>
            <a class="p-2 text-muted" href="#">Политика</a>
            <a class="p-2 text-muted" href="#">Здравоохранение</a>
        </nav>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid pl-5 pr-5">
                    <h5 class="ModalLabel1 modal-title text-center font-weight-bold" >NewsSite</h5>
                    <h4 class="ModalLabel2 modal-title text-center">Sign In</h4>
                    <form class="mt-2">
                        <input type="text" class="form-control mt-3" id="loginField" placeholder="Email" required autofocus>
                        <input type="text" class="form-control mt-1" id="loginField" placeholder="Пароль" required autofocus>
                        <div class="d-flex justify-content-center">
                            <div class="checkbox mt-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Запомнить меня
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-outline-dark mt-2 mb-3">Войти</button>
                    </form>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-body mb-3">Еще не зарегистрированны?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
