<?php get_header(); ?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
                <h1 class='my-5'><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-6">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="valor">
                        <small class='text-muted'>Valor</small>
                       
                            <h4>$
                            <?php 
                            $valorproducto =  get_post_meta( get_the_ID(),'Valor',true);
                            echo ($valorproducto);
                            ?>
                            </h4>
                            </div>
                    </div>
                    <div class="col-6">
                        <p><?php the_content(); ?></p>
                    </div> 
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>