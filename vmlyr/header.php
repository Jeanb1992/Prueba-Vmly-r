<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>

<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 pt-5">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class'    => 'menu-principal',
                            'container_class' => 'container-menu',
                        )
                    ); 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
    