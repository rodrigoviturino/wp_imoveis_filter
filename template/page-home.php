<?php 
    /*
        Template Name: Page Home
    */

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
            <form action="#" id="form-home">

                <!-- <select name="" id="">
                    <option value="valor01">Imóvel</option>
                    <option value="valor02">Casa</option>
                    <option value="valor03">Apartamento</option>
                </select> -->
            
                <select name="" id="">
                    <option value="valor01">Cidade</option>
                    <option value="valor02">São Paulo</option>
                    <option value="valor03">Campinas</option>
                    <option value="valor03">São Caetano </option>
                </select>

                <select name="" id="">
                    <option value="valor01">Estado</option>
                    <option value="valor02">São Paulo</option>
                    <option value="valor03">Minas Gerais</option>
                    <option value="valor03">Rio Grande do Sul</option>
                </select>

                <!-- <select name="" id="">
                    <option value="valor01">Região</option>
                    <option value="valor02">Zona Sul</option>
                    <option value="valor03">Zona Norte</option>
                    <option value="valor03">Zona Leste</option>
                </select>

                <select name="" id="">
                    <option value="valor01">Faixa de Valores</option>
                    <option value="100000">100.000</option>
                    <option value="200000">200.000</option>
                    <option value="300000">300.000</option>
                </select> -->

                <button type="submit">Pesquisar</button>
            
            </form>
        </div>
    </section>
    <!-- end Filter -->



    <?php //get_template_part('partials/single', 'post');  ?>
    <?php// get_template_part('single', 'post'); ?>

    <?php 
$args = array(
    'posts_per_page' => 3,
    'category_name' => 't2',
);

$query_wp = new WP_Query( $args );

if( have_posts() ) : while( have_posts() ) : the_post();
    // get_template_part('single', 'post');
    the_title();
    the_content();

endwhile; 

    wp_reset_postdata();
?>

<?php else : ?>
    <p>NÃO TEM NADA AQUI CURIOSO!</p>
<?php 
    endif;
?>
    <!-- end Produtos -->
    
    <!-- Posts -->
    
  
    <!-- end Posts -->

    <!-- <a href="#" class="btn-more-product">Visualizar Mais</a> -->

</section>
<!-- end Imoveis -->


<?php get_footer(); ?>

