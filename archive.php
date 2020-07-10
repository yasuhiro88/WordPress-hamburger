<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hamburger</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <script src="https://kit.fontawesome.com/055ef893dd.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="./js/jquery-3.4.1.min.js"></script>
        <script src="./js/hamburger.js"></script>
        <link rel="stylesheet" href="./css/zdo_drawer_menu.css">
        <link rel="stylesheet" href="./css/style-drw.css">
    </head>
<body>
    <div class="l-top-wrapper">
    <div class="l-left">

        <!-- ヘッダーここから -->
        <header class="l-header">
            <div class="l-header__logo">Hamburger</div>
            <div class="c-search">
                <input type="text" name="s">
                <div class="c-search__btn">
                    <a href="#">検索</a>
                </div>
            </div>

            <button class="p-hamburger p-gmenu--bt is-hamburger">
                <span>Menu</span>
            </button>
           
            
        </header>
        <!-- メイン画像ここから -->
            <div class="p-thumbnail-archive">
                <img src="./img/archive-t.png" alt="トップ画像">
                <p>Menu: <span class="p-thumbnail-archive__heading">チーズバーガー</span></p>
            </div>

            <!-- メインコンテンツここから -->
            
                <div class="l-main-wrap">
                    <h2 class="l-main-wrap__heading">小見出しが入ります</h2>
                    <p class="l-main-wrap__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="c-card">
                    <ul>
                        <li class="c-card-list">
                            <div class="c-card-left">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.png" alt="">
                            </div>
                            <div class="c-card-right">
                                <h2 class="c-card-right__heading">
                                    チーズバーガー
                                </h2>
                                <h3 class="c-card-right__s-heading">
                                    小見出しが入ります
                                </h3>
                                <p class="c-card-right__text">
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p class="c-card-right__btn">
                                    <a href="#">詳しく見る</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="c-card-list">
                            <div class="c-card-left">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.png" alt="">
                            </div>
                            <div class="c-card-right">
                                <h2 class="c-card-right__heading">
                                    ダブルチーズバーガー
                                </h2>
                                <h3 class="c-card-right__s-heading">
                                    小見出しが入ります
                                </h3>
                                <p class="c-card-right__text">
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p class="c-card-right__btn">
                                    <a href="#">詳しく見る</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="c-card-list">
                            <div class="c-card-left">
                                <img src="/img/e3472c768077e90f47f5ca3c6ba0144e.png" alt="">
                            </div>
                            <div class="c-card-right">
                                <h2 class="c-card-right__heading">
                                    スペシャルチーズバーガー
                                </h2>
                                <h3 class="c-card-right__s-heading">
                                    小見出しが入ります
                                </h3>
                                <p class="c-card-right__text">
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <p class="c-card-right__btn">
                                    <a href="#">詳しく見る</a>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- ページネーション ここから -->
                <nav id="c-pager">
                <div id="c-pagination">
                    <a href="#" class="c-prev-page-numbers">Prev</a>
                    <a href="#" class="c-page-numbers">1</a>
                    <a href="#" class="c-page-numbers current">2</a>
                    <a href="#" class="c-page-numbers">3</a>
                    <a href="#" class="c-page-numbers">4</a>
                    <a href="#" class="c-page-numbers">5</a>
                    <a href="#" class="c-page-numbers">6</a>
                    <a href="#" class="c-page-numbers">7</a>
                    <a href="#" class="c-page-numbers">8</a>
                    <a href="#" class="c-page-numbers">9</a>
                    <a href="#" class="c-next-page-numbers">Next</a>
                </div>
                </nav>
            </div>

            <!-- サイドメニューここから -->
             <div class="c-zdo_drawer_bg"></div>
            <div class="p-gmenu">
                <ul class="list">
                    <p class="l-sidemenu__heading">Menu</p>
                        <h2 class="l-sidemenu__title">バーガー</h2>
                        <li class="l-sidemenu__list">ハンバーガー</li>
                        <li class="l-sidemenu__list">チーズバーガー</li>
                        <li class="l-sidemenu__list">テリヤキバーガー</li>
                        <li class="l-sidemenu__list">アボガドバーガー</li>
                        <li class="l-sidemenu__list">フィッシュバーガー</li>
                        <li class="l-sidemenu__list">ベーコンバーガー</li>
                        <li class="l-sidemenu__list">チキンバーガー</li>
                        <h2 class="l-sidemenu__title">サイド</h2>
                        <li class="l-sidemenu__list">ポテト</li>
                        <li class="l-sidemenu__list">サラダ</li>
                        <li class="l-sidemenu__list">ナゲット</li>
                        <li class="l-sidemenu__list">コーン</li>
                        <h2 class="l-sidemenu__title">ドリンク</h2>
                        <li class="l-sidemenu__list">コーラ</li>
                        <li class="l-sidemenu__list">ファンタ</li>
                        <li class="l-sidemenu__list">オレンジ</li>
                        <li class="l-sidemenu__list">アップル</li>
                        <li class="l-sidemenu__list">紅茶 (Ice/Hot)</li>
                        <li class="l-sidemenu__list">コーヒー (Ice/Hot)</li>
                </ul>
            </div>
         </div>

         <!-- フッターここから -->
         <footer>
             <div class="l-footer">
                 <div class="l-footer-wrap">
                 <p class="l-footer__info">ショップ情報</p>
                 <span class="l-footer__history">ヒストリー</span>
                </div>
                 <div class="p-copyright"><small> Copyright RaiseTech</small></div>
             </div>
         </footer>
    
</body>
</html>