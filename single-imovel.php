    <?php get_header(); ?>
    
    <!-- Produtos -->
    <!-- <div class="container produtos__single">

        <div class="grid-4 produtos__single__property-item">
            
            <div class="property-image">
                <img src="<?php echo get_template_directory_uri(); ?> './assets/img/imovel-01.jpg' " alt="">
                <div class="property-image__label"></div>
            </div>

            
            <div class="property-details">
                <div class="info">
                    <h2 class="title">Produto 01</h2>
                    <p class="local">Av. Nações Unidas - 14261 - 1 semana divulgado</p>
                    <p class="state">São Paulo - SP</p>
                    <p class="price">R$ 999,99 <span>/ Moth</span></p>
                </div>

                <a href="#" class="btn-propertyDetails">Mais Detalhes</a>
                
            </div> 

        </div>
        
        <div class="grid-4 produtos__single__property-item">
            
            <div class="property-image">
                <img src="<?php echo get_template_directory_uri(); ?> './assets/img/imovel-01.jpg' " alt="">
                <div class="property-image__label"></div>
            </div>

            
            <div class="property-details">
                <div class="info">
                    <h2 class="title">Produto 01</h2>
                    <p class="local">Av. Nações Unidas - 14261 - 1 semana divulgado</p>
                    <p class="state">São Paulo - SP</p>
                    <p class="price">R$ 999,99 <span>/ Moth</span></p>
                </div>

                <a href="#" class="btn-propertyDetails">Mais Detalhes</a>
                
            </div> 

        </div>

        <div class="grid-4 produtos__single__property-item">
            
            <div class="property-image">
                <img src="<?php echo get_template_directory_uri(); ?> './assets/img/imovel-01.jpg' " alt="">
                <div class="property-image__label"></div>
            </div>

            
            <div class="property-details">
                <div class="info">
                    <h2 class="title">Produto 01</h2>
                    <p class="local">Av. Nações Unidas - 14261 - 1 semana divulgado</p>
                    <p class="state">São Paulo - SP</p>
                    <p class="price">R$ 999,99 <span>/ Moth</span></p>
                </div>

                <a href="#" class="btn-propertyDetails">Mais Detalhes</a>
                
            </div> 

        </div>

    </div> -->
    <!-- end Produto -->

    <?php if( have_posts() ) : while(have_posts() ) : the_post(); ?>

    <!-- Produto 01 -->
        <div class="grid-4 produtos__single__property-item">
                
                <div class="property-image">
                    <!-- <img src="<?php// echo get_template_directory_uri(); ?> './assets/img/imovel-01.jpg' " alt="">-->
                    <?php if(has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php endif; ?>
                    <div class="property-image__label"></div>
                </div>
                <div class="property-details">
                    <div class="info">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p class="local">Av. Nações Unidas - 14261 - 1 semana divulgado</p>
                        <p class="state">São Paulo - SP</p>
                        <p class="price">R$ 999,99 <span>/ Moth</span></p>
                    </div>

                    <a href="<?php the_permalink(); ?>" class="btn-propertyDetails">Mais Detalhes</a>
                    
                </div>
            </div>
        <!-- end Produto 01 -->


    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>

<?php get_footer(); ?>