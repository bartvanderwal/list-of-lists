<?php
    $woordenAlsString = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto non perferendis quod?';

    $woorden1 = explode (' ', $woordenAlsString);
    $woorden2 = ['eerste' => $woorden1[0], 'tweede' => $woorden1[1], 'derde' => $woorden1[2]];

    $lijstVanLijsten = ["Woorden 1" => $woorden1, "Woorden 2" => $woorden2, "lijst 3" => [1, 2, 4]];
    $sum = 0;

?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lijst der lijsten</title>
    <style>
        section {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <h1>Welkom</h1>
    <section>
        <?php foreach($lijstVanLijsten as $lijstTitel => $lijst) { ?>
            <div>
                <h2><?= $lijstTitel ?> (<?php
                        $aantal = count($lijst);
                        echo $aantal;
                        $sum += $aantal;
                    ?>)
                </h2>
                <article>
                    <ul>
                        <?php
                            foreach($lijst as $key => $item) {
                                echo "<li><a href='$key'>$item</a></li>";
                            }
                        ?>
                    </ul>
                </article>
            </div>
        <?php } ?>
    </section>
    <footer>Grand total: <?= $sum ?></footer>
</body>
</html>