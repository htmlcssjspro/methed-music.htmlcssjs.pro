<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="manifest" href="/site.webmanifest">
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#1e5a32">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#1e5a32">

    <title>METHED.MUSIC</title>
    <meta name="description" content="METHED.MUSIC Учебный проект школы METHED">
    <meta name="author" content="Sergei MILITER militer@htmlcssjs.pro https://htmlcssjs.pro">

    <link rel="stylesheet" href="css/index.css">
    <script defer src="js/index.js"></script>
</head>

<body>

    <header id="header" class="header">
        <h1 class="visually-hidden">METHED.MUSIC лучший сервис для воспроизведения музыки</h1>
        <div class="header__container">
            <img class="header__logo" src="img/logo.svg" alt="Логотип METHED.MUSIC">

            <form action="" class="search header__search">
                <input type="search" class="search__input">
                <button class="search__btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5 14H14.71L14.43 13.73C15.41 12.59 16 11.11 16 9.5C16 5.91 13.09 3 9.5 3C5.91 3 3 5.91 3 9.5C3 13.09 5.91 16 9.5 16C11.11 16 12.59 15.41 13.73 14.43L14 14.71V15.5L19 20.49L20.49 19L15.5 14ZM9.5 14C7.01 14 5 11.99 5 9.5C5 7.01 7.01 5 9.5 5C11.99 5 14 7.01 14 9.5C14 11.99 11.99 14 9.5 14Z" />
                    </svg>
                </button>
            </form>

            <button class="header__favorite-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21.35L10.55 20.03C5.4 15.36 2 12.28 2 8.5C2 5.42 4.42 3 7.5 3C9.24 3 10.91 3.81 12 5.09C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.42 22 8.5C22 12.28 18.6 15.36 13.45 20.04L12 21.35Z" />
                </svg>
            </button>
        </div>
    </header>


    <section class="catalog">

        <h2 class="visually-hidden">Список треков</h2>

        <div class="catalog__container">

            <?php
            $catalog = [
                [
                    'track' => 'Save Your Tears',
                    'artist' => 'The Weeknd',
                    'img' => 'the_weekend-save_your_tears',
                ],
                [
                    'track' => 'Follow You',
                    'artist' => 'Imagine Dragons',
                    'img' => 'imagine_dragons-follow_you',
                ],
                [
                    'track' => 'How Long',
                    'artist' => 'Dirt Femme',
                    'img' => 'dirt_femme-how_long',
                ],
                [
                    'track' => 'Another Love',
                    'artist' => 'Tom Odell',
                    'img' => 'tom_odell-another_love',
                ],
                [
                    'track' => 'Born to Die',
                    'artist' => 'Lana Del Rey',
                    'img' => 'lana_del_rey-born_to_die',
                ],
                [
                    'track' => 'Hello',
                    'artist' => 'Adele',
                    'img' => 'adele-hello',
                ],
                [
                    'track' => 'Cant Pretend',
                    'artist' => 'Tom Odell',
                    'img' => 'tom_odell-cant_pretend',
                ],
                [
                    'track' => 'Young and Beautiful',
                    'artist' => 'Lana Del Rey',
                    'img' => 'lana_del_rey-young_and_beautiful',
                ],
                [
                    'track' => 'Someone Like You',
                    'artist' => 'Adele',
                    'img' => 'adele-someone_like_you',
                ],
                [
                    'track' => 'Natural',
                    'artist' => 'Imagine Dragons',
                    'img' => 'imagine_dragons-natural',
                ],
                [
                    'track' => 'Laugh Now Cry Later',
                    'artist' => 'Drake',
                    'img' => 'drake-laugh_now_cry_later',
                ],
                [
                    'track' => 'Frozen',
                    'artist' => 'Madonna',
                    'img' => 'madonna-frozen',
                ],
            ];
            ?>

            <?php foreach ($catalog as $key => $item) : ?>

                <button class="track <?php echo $key===1 ? 'track_active' : ''; ?> catalog__item">
                    <div class="track__img-wrap">
                        <img class="track__poster" src="img/<?php echo $item['img']; ?>.jpg" alt="<?php echo "{$item['artist']} - {$item['track']}"; ?>">
                    </div>

                    <div class="track__info track-info">
                        <p class="track-info__title"><?php echo $item['track']; ?></p>
                        <p class="track-info__artist"><?php echo $item['artist']; ?></p>
                    </div>
                </button>

            <?php endforeach; ?>

            <button class="catalog__btn-add">
                <span>Увидеть все</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.59 16.59L13.17 12L8.59 7.41L10 6L16 12L10 18L8.59 16.59Z" />
                </svg>

            </button>

        </div>
    </section>


    <section class="player player_active">

        <h2 class="visually-hidden">Плеер</h2>

        <div class="player__container">

            <div class="track-info player__track-info">
                <p class="track-info__title"><?php echo $item['track']; ?></p>
                <p class="track-info__artist"><?php echo $item['artist']; ?></p>
            </div>

            <div class="player__controller">
                <button class="player__icon player__icon_stop"></button>
                <button class="player__icon player__icon_prev"></button>
                <button class="player__icon player__icon_pause"></button>
                <button class="player__icon player__icon_next"></button>
                <button class="player__icon player__icon_like"></button>
            </div>

            <div class="player__progress-wrap">
                <div class="player__progress">
                    <input class="player__progress-input" type="range" min="0" max="100" value="0">
                </div>
                <p class="player__time">
                    <span class="player__time-passed">0:24</span>
                    <span>/</span>
                    <span class="player__time-total">4:31</span>
                </p>
            </div>

            <div class="player__volume-wrap">
                <div class="player__volume">
                    <input class="player__volume-input" type="range" min="0" max="100" value="100">
                </div>
                <button class="player__icon player__icon_mute"></button>
            </div>

        </div>

    </section>


    <main id="main" class="main">

    </main>


    <aside id="aside" class="aside">

    </aside>


    <footer id="footer" class="footer">

    </footer>

</body>

</html>
