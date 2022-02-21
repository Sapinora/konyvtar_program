<? 
include_once('php/books.php');

$books = new Books();
echo $_GET['cat'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta content="text/html" charset="UTF-8" />
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
    <main>
        <div class="col-9" id="tartalom">
            <header class="m-b-20">
                <h2>Könyvek kategorizált listája</h2>
            </header>
            <div>        
                <table cellspacing="0">
                    <tr>
                        <th>Cím</th>
                        <th>Szerző</th>
                        <th>Kategória</th>
                    </tr>
                <?= gettype($_GET['cat']) ?>

                    <? foreach ($books->getBooksByCategory(intval($_GET['cat'])) as $key => $book) { ?>
                    <tr>
                        <td><?= $book['title'] ?></td>
                        <td><?= $book['author'] ?></td>
                        <td><?= $book['category'] ?></td>
                    </tr>
                    <? } ?>
                    
                </table>
            </div>
            <br>
            <button type="button" onClick="location.href='index.php'">Vissza</button>
        </div>
    </main>
</body>
</html>