
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head();?>
  </head>

  <body>

    <div class="header">
      <div class="container">
        <div class="row">

          <div class="header__logo col-md-auto">
            <a href="<?php echo get_home_url(); ?>">LOGO</a>
          </div>

          <nav class="header__nav col">
            <?php wp_list_pages( '&title_li=' ); ?>
          </nav>

          <div class="header__side col-md-auto">
            <ul class="side-menu">
              <li class="side-menu__item"><a href="#" class="side-menu__link">EN | DE</a></li>
              <li class="side-menu__item"><a href="#" class="side-menu__link">Login</a></li>
              <li class="side-menu__item"><a href="#" class="side-menu__link">Search</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
