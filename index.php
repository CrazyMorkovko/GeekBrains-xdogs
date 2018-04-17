<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Главная</title>
        <link rel="stylesheet" href="styles/style.css?v=<?=time()?>">
    </head>
    <body>
        <div class="wrapper">
            <div class="content">
                <?php
                    require("app/productList.php");

                    $page = isset($_GET["page"]) ? $_GET["page"] : "main";

                    if ($page == "main") {
                        require("templates/headerBanner.php");
                    }
                    else {
                        require("templates/header.php");
                    }
                ?>

                    <div class="container">
                        <?php
                            if ($page == "main") {
                                require("templates/main.php");
                            }
                            else if ($page == "catalog") {
                                require("templates/catalog.php");
                            }
                            else if ($page == "contacts") {
                                require("templates/contacts.php");
                            }
                            else if ($page == "product") {
                                $id = $_GET['id'];
                                $product = [];
                                foreach ($products as $good) {
                                    if ($good['id'] == $id) {
                                        $product = $good;
                                        break;
                                    }
                                }
                                require("products/dogs/openProduct.php");
                            }
                        ?>
                </div>
            </div>

            <footer class="footer">
                <div class="container">
                    <p>&copy; &quot;Все права защищены&quot;</p>
                </div>
            </footer>
        </div>
    </body>
</html>