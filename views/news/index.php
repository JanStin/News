<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>Новости</title>
        <link rel="stylesheet" href="/css/style.css" />
    </head>
    <body>
 	    <header>
 	    </header>
 	    <main>
            <h1>Новости</h1>

            <div class="all-news">
                <?php foreach ($newsList as $newsItem) :?>
                    <div class="news">
                        <div class="headline">
                            <div class="data">
                                <?php echo date("d.m.Y", $newsItem['idate']); ?>
                            </div>                
                            <a href="/view.php?id=<?= $newsItem['id']; ?>">
                                <?= $newsItem['title']; ?>
                            </a>
                        </div>
                        <p><?= $newsItem['announce']; ?></p>
                    </div>
                <?php endforeach;?>
            </div>

            
            <h4>Страницы:</h4>
            <div class="pages">
            <?php
            $i = 1;
            do {
                echo '<div class="page ';
                if (    
                    isset($page) && $page == $i
                    || $i == 1 && !isset($page)
                    )
                {
                    echo 'page_active"><a href="/news.php?page=' . $i . '">' . $i . '</a>';
                } else {
                    echo '"><a href="/news.php?page=' . $i . '">' . $i . '</a>';
                }
                echo '</div>';
                $countPages--;
                $i++;
            } while ($countPages > 0);
            ?>
            </div>
        </main>
        <footer>
        </footer>
  <body>
</html>
