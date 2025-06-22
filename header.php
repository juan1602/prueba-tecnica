<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="top-navbar">
  <div class="main-nav container" id="main-nav">

    <!-- Logo a la izquierda -->
    <div class="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Logo Nutresa" />
      </a>
    </div>

    <!-- Menú principal -->
    <nav class="main-nav-links">
      <ul class="main-menu">
        <li><a href="#">Nuestra Compañía</a></li>
        <li><a href="#">Organización Consciente</a></li>
        <li><a href="#">Marcas</a></li>
        <li><a href="#">Internacional</a></li>
        <li><a href="#">Negocios Industriales</a></li>
        <li><a href="#">Sostenibilidad</a></li>
      </ul>
    </nav>

    <!-- Buscador e íconos -->
    <div class="top-icons">
      <form class="search-form">
        <input type="text" placeholder="Buscar..." />
        <button type="submit"><i class="fas fa-search"></i></button>
      </form>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/facebook.png" alt="Facebook" class="icon" /></a>
      <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/linkedin.jpg" alt="LinkedIn" class="icon" /></a>
    </div>

    <!-- Botón menú hamburguesa (solo se ve en móvil) -->
    <button class="menu-toggle" id="menu-toggle" aria-label="Abrir menú">☰</button>
  </div>
</header>



