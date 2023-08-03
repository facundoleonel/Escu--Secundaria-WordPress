<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
<header class="header">
   <div class="container">
        <div class="columns is-multiline is-mobile is-align-items-center is-align-self-center">
            <div class="column is-2">
                <!-- aca va la IMAGENES DE MENU -->
                <img src="<?= getIMG("menu-indigo.png")?>" alt="menu" class="menu">
            </div>
            <div class="column is-4">
                <img class="logo" src="<?= getIMG("logo.png")?>" alt="logo"/>
            </div>
        </div>
    </div> 
     <!-- menu -->
            <nav class="main-nav inactive">
                    <div class="menu-nev breadcrumb has-succeeds-separator is-centered" aria-label="breadcrumbs">
                        <!-- imprimimos el menu -->
                        <?php wp_nav_menu(
                            array(
                                'container_class' => 'main-nav',
                            'theme_location'=> 'menu_principal',
                            "menu_class" => "menu-principal"));
                        ?>
                    </div>
            </nav>
</header>    