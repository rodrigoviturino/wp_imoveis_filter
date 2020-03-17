<?php 

    $queryTaxonomy = array_key_exists('taxonomy', $_GET);
	if( $queryTaxonomy && $_GET['taxonomy'] == '') {
        wp_redirect( home_url() );
		exit;
	}

    get_header();
?>

<!-- Banner Home -->
<section class="introducao">
    <div class="container">
        <div class="introducao__wrapper">

            <div class="block-title">
                <h1 class="title">Imobiliaria Company</h1>
                <h2 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi repellendus odio natus corporis! Praesentium vel voluptatibus consequuntur perferendis placeat alias molestiae similique! Excepturi rem nesciunt ut harum debitis. Veniam, dolorem.</h2>
                <a href="#" class="btn-banner-home">Acessar Produtos</a>
            </div>

        </div>
    </div>
</section>

<!-- end Banner Home -->


<!-- Imoveis -->
<section class="produtos">
    
    <div class="block-title">
        <div class="container">
            <h2>Bairros mais populares</h2>
            <p>Estas são as melhores ofertas e promoções. Todos eles estão na região de Milano ou na área circundante</p>
        </div>
    </div>

    <!-- Filter -->
    <section class="produtos__filter">
        <div class="container">

        <?php $taxonomies = get_terms('cadeira'); ?>

            <form action="<?php bloginfo('url'); ?>/" id="form-home" method="get">

                <select name="taxonomy" id="">
                    <option value="">Todas as Localizações</option>
                        <?php foreach ($taxonomies as $taxonomy ) { ?>
                    <option value="<?php echo $taxonomy->slug; ?>"> <?php echo $taxonomy->name; ?> </option>
                        <?php } ?>
                </select>

                <button type="submit">Pesquisar</button>
            </form>

                <!-- <select name="" id="">
                    <option value="valor01">Região</option>
                    <option value="valor02">Zona Sul</option>
                    <option value="valor03">Zona Norte</option>
                    <option value="valor03">Zona Leste</option>
                </select> -->
            
                <!-- <select name="" id="">
                    <option value="valor01">Cidade</option>
                    <option value="valor02">São Paulo</option>
                    <option value="valor03">Campinas</option>
                    <option value="valor03">São Caetano </option>
                </select> -->

                <!-- <select name="" id="">
                    <option value="valor01">Estado</option>
                    <option value="valor02">São Paulo</option>
                    <option value="valor03">Minas Gerais</option>
                    <option value="valor03">Rio Grande do Sul</option>
                </select> -->


                <!-- <select name="" id="">
                    <option value="valor01">Faixa de Valores</option>
                    <option value="100000">100.000</option>
                    <option value="200000">200.000</option>
                    <option value="300000">300.000</option>
                </select>  -->



            
        </div>
    </section>
    <!-- end Filter -->

    <!-- Produtos -->
    <div class="container produtos__single">
    <?php 

        if( $queryTaxonomy ) {

            $taxonomy_args = array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'cadeira',
                    'field' => 'slug',
                    'terms' => $_GET['taxonomy']
                )
            );
        }

        $args = array(
            'post_type' => 'imovel',
            'tax_query' => $taxonomy_args,
        );

        $loop = new WP_Query( $args );
    ?>

    <?php if( $loop->have_posts() ) : while($loop->have_posts() ) : $loop->the_post(); ?>

    <!-- Produto 01 -->
        <div class="grid-4 produtos__single__property-item" style="margin: 10px;">
                
                <div class="property-image">
                    <!-- <img src="<?php// echo get_template_directory_uri(); ?> './assets/img/imovel-01.jpg' " alt="">-->
                    <?php the_post_thumbnail('medium', array('class' => 'post_minuatura') ); ?>
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
    <?php wp_reset_query(); ?> <!--  resetando, para nao dar conflito em outro loop -->

    <!-- end Produtos -->
    
    <!-- Posts -->
    
  
    <!-- end Posts -->

    <!-- <a href="#" class="btn-more-product">Visualizar Mais</a> -->

</section>
<!-- end Imoveis -->


<?php get_footer(); ?>

