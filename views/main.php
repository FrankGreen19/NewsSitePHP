<div class="container mt-4">
    <div class="row">

        <?php foreach ($data as $newsItem): ?>
            <div class="col-md-6">
                <div class="card mb-3 border rounded shadow-sm position-relative">
                    <div class="row no-gutters">
                        <div class="col-md-8">
                            <div class="p-4">
                                <strong class="text" style="color: <?php echo $newsItem['article_type_color'];?>"><?php echo $newsItem['article_type_name'];?></strong>
                                <h4 class="mt-2 mb-0"></h4>
                                <div class="mt-1 text-muted"><?php echo $newsItem['article_date'];?></div>
                                <p class="mt-2 card-text">
                                    <?php echo $newsItem['article_header'];?>
                                </p>
                                <a href="article/<?php echo $newsItem['article_id'];?>" class="mt-1 position-absolute fixed-bottom p-4 stretched-link">Продолжить чтение..</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="card-img" src="<?php echo $newsItem['article_img'];?>" width="250" height="310">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<div class="container mt-4">
    <div class="row">

        <div class="col-8">
            <h3 class="pb-4 mb-3 font-italic border-bottom font-weight-bold" id="articleHeader">
                Острые козырьки 6 сезон
            </h3>
            <div class="blog-post">
                <h2 class="blog-post-title">
                    Шестой сезон не выйдет летом 2020 года, как было запланировано ранее. Съемки заморожены из-за коронавируса.
                </h2>
                <p class="mt-1 text-muted">13 августа</p>
                <p style="font-size: 1.2em">
                    Сценарий полностью готов. Режиссер сериала Энтони Бирн заявил, что, скорее всего, снимать начнут только в ноябре-декабре 2020 года. Премьера сдвигается на 2021 год.
                    К касту присоединился Стивен Грэм («Подпольная империя», «Большой куш», «Это Англия»). Его персонаж е раскрывается, но фанаты думают, что он повторит роль Аль Капоне.
                    Действие сериала в основном происходит в Бирмингеме сразу после Первой мировой войны. «Острые козырьки» подробно описывают историю преступной семье Шелби. Вымышленная банда «Острые козырьки» в сериале в значительной степени скопирована с  настоящей городской молодежной банды 19-го века, которая была активна в Бирмингеме с 1890-х и начала двадцатого века.
                </p>
            </div>

        </div>

        <div class="col-4">
            <div class="card bg-light rounded shadow-sm">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque ipsa maiores provident quae quaerat qui ratione rerum tempora temporibus?</p>
                </div>
            </div>
        </div>
    </div>
</div>

