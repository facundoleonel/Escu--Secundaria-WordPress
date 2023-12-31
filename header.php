<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
<header>
    <div class="container-full bg-00">
        <div class="columns is-centered">
            <div class="column is-4">
                <!-- Inicio -->
                <div class="columns is-mobile has-text-centered outline-red">
                    <div class="column  is-6-mobile is-6-tablet is-6-desktop outline-black">
                        <!-- aca va la IMAGENES DE MENU -->
                        <img src="<?= getIMG("menu-indigo.png")?>" alt="menu" class="menu">
                    </div>
                    <div class="column  is-6-mobile is-6-tablet is-6-desktop outline-black">
                        <a href="/">
                            <img class="logo" src="<?= getIMG("logo.png")?>" alt="logo"/>
                        </a> 
                    </div>
                </div>
                <!-- Fin -->
            </div>
            <div class="column is-8 has-text-centered">
                <nav class="main-nav inactive">
                    <div class=" menu-container is-spaced">
                        <!-- imprimimos el menu -->
                        <?php wp_nav_menu(
                            array(
                                'container_class' => 'main-nav',
                            'theme_location'=> 'menu_principal',
                            "menu_class" => "menu-principal"));
                            ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>



