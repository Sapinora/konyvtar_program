<?
include_once('php/books.php');

$books = new Books();

?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Cache-control" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvtár Program</title>
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <header>
        <span><img id="panel-nyito" src="img/menu.png" alt="menu" title="menu" /> </span>
        <h1>Könyvtár Program</h1>
    </header>
    <main>
        <div class="col-3" id="kategoria">
            <header class="m-b-10">
                <h2>Kategóriák</h2>
                <span class="f-right"><img id="panel-zaro" src="img/arrow_left.png" alt="összecsuk" title="összecsuk" /></span>
            </header>
            <div>
                <input type="checkbox" name="fantasy" /> <label for="fantasy" onClick="location.href='kategoria.php?cat=1'">Fantasy</label><br/>
                <input type="checkbox" name="regény" /> <label for="regény" onClick="location.href='kategoria.php?cat=3'">Regény</label><br/>
                <input type="checkbox" name="moticációs" /> <label for="moticációs" onClick="location.href='kategoria.php?cat=2'">Motivációs</label><br/>
                <hr />
                <a href="admin/login.html"><span><img src="img/login.png" alt="belépés" title="belépés"/> Belépés</span></a>
            </div>
        </div>
    
        <div class="col-9" id="tartalom">
            <header class="m-b-20">
                <h2>Könyvek listája</h2>
            </header>
            <div>
                <input type="search" name="search" class="m-b-20" />
                <button id="kereses_gomb">Keresés</button>
                <button id="rejtett_megse_gomb">Mégse</button>

   <!-- <? debug($books->getBooks()) ?> -->
        
                <table cellspacing="0">
                    <tr>
                        <th>Cím</th>
                        <th>Szerző</th>
                        <th>Kategória</th>
                    </tr>

                    <? foreach ($books->getBooks() as $key => $book) { ?>
                    <tr>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['category'] ?></td>
                    </tr>
                    
                    
                    <? } ?>
                    
                   <!--  <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                    <tr>
                        <td>Gyűrűk ura</td>
                        <td>J. R. R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                    <tr>
                        <td>Gyűrűk ura</td>
                        <td>J. R. R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr>
                    <tr>
                        <td>Gyűrűk ura</td>
                        <td>J. R. R. Tolkien</td>
                        <td>Fantasy, Regény</td>
                    </tr>
                    <tr>
                        <td>A Titok</td>
                        <td>Rhonda Brain</td>
                        <td>Motivációs</td>
                    </tr> -->

                </table>
            </div>
        </div>
    </main>
</body>