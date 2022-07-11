<?php get_header(); ?>

<main class='container'>
    

    <div class="lista-productos my-5">
        <h2 class='container text-center'>PRODUCTOS</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'producto',
            'post_per_page' => 14, 
            'order'         => 'ASC',
            'orderby'       => 'date'
        );

        $productos = new WP_Query($args);

        if($productos->have_posts()){
            while($productos->have_posts()){
                $productos->the_post();
                ?>
                        <div class="col-3">
                        <div class="card">
                            <figure class='card-img-top img-fluid'>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <div class="card-block">
                                <h4 class='card-title text-center'>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title();?>                            
                                </a>
                                </h4>
                                <p class="card-text"><?php the_content(); ?></p>
                            </div>
                            <div class="card-footer">
                            <small class='text-muted'>Valor</small>
                            <h4>$
                            <?php 
                            $valorproducto =  get_post_meta( get_the_ID(),'Valor',true);
                            echo ($valorproducto);
                            ?>
                            </h4>
                            </div>
                        </div>
                        </div>
                   
           <?php }
        }

        ?>
      </div>
    </div>
</main>

<?php get_footer(); ?>