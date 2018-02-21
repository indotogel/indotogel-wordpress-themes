<?php
/**
 * Theme's Main navigation.
 * 
 * @link https://github.com/indotogel/indotogel-wp-themes
 */
// Custom Logo get id.
// get site logo
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image          = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark navigation-main p-0">
    <div class="container">
        <a href="/" class="navbar-brand p-0">
        <?php
            if ( $custom_logo_id == null ) :
                echo bloginfo( 'name' );
            else :
        ?>
            <img src="<?php echo $image[0]; ?>" alt="Logo web <?php bloginfo('name'); ?>" title="<?php bloginfo('description'); ?>">
        <?php
            endif;?>
        </a>
        <div class="navbar-nav ml-3">
            <form class="form-inline">
                <div class="input-group">
                    <input class="form-control search-form" type="search" placeholder="Cari di Indotogel" aria-label="Search">
                    <div class="input-group-apped">
                        <button class="btn btn-dark btn-search">
                            <i class="fas fa-search" data-fa-transform="flip-h"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigationMain" aria-controls="navigationMain" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-ellipsis-h"></i>
        </button>
        <div class="collapse navbar-collapse" id="navigationMain">
            <ul class="navbar-nav ml-2">
                <li class="nav-item">
                    <a href="/keluaran-togel" class="nav-link">Keluaran</a>
                </li>
                <li class="nav-item">
                    <a href="/pasaran-togel" class="nav-link">Pasaran</a>
                </li>
                <li class="nav-item">
                    <a href="/cara-pasang-togel" class="nav-link">Tutorial</a>
                </li>
                <li class="nav-item">
                    <a href="/berita-togel" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="/about-us" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="/about-us" class="nav-link px-4"><i class="fas fa-retweet"></i></a>
                </li>
                
            </ul>
        </div>
    </div>
    
</nav>
