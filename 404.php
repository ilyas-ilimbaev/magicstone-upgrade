<?
$title = 'Страница не найдена';
$link = '
        <link rel="stylesheet" href="css/not-found.css" />
    ';
include('blocks/head.php');
?>
<div class="wrapper"> 
    <?php
    include('blocks/header.php');
    ?>
    <main class="main">
        <div class="page--not-found">
            <div class="container">
                <div class="page-404">
                    <div class="page-404-wrapper">
                        <div class="page-404__logo">
                            <div class="page-404__logo-title">404</div>
                            <div class="page-404__logo-text">страница не найдена</div>
                        </div>
                        <div class="page-404__info">
                            <p class="page-404__info-text">Страница, на которую вы пытаетесь попасть, не существует или была удалена.</p>
                            <p class="page-404__info-text">
                                Перейдите на <a href="index.php" class="page-404__info-link">Главную страницу</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
    include('blocks/footer.php');
    ?>
</div>