<?php get_header(); ?>
<!-- Header -->
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="<?php echo site_url(); ?>" class="brand-logo center">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#main-slider">Home</a></li>
        <li><a href="#featured">Featured</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a class="waves-effect waves-light btn">A button</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#main-slider">Home</a></li>
        <li><a href="#featured">Featured</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a class="waves-effect waves-light btn">A button</a></li>
      </ul>
    </div>
  </nav>
</div>
<!-- /Header -->


<!-- Main Slider -->
<section class="section no-pad" id="main-slider">
  <div class="owl-carousel main-carousel slider">
    <div class="item">
      <div class="slider--caption">
        <h3>This is our big Tagline!</h3>
        <h5>Here's our small slogan.</h5>
        <a class="waves-effect waves-light btn">button</a>
      </div>
    </div>
    <div class="item">
      <div class="slider--caption">
        <h3>This is our big Tagline!</h3>
        <h5>Here's our small slogan.</h5>
        <a class="waves-effect waves-light btn">button</a>
      </div>
    </div>
  </div>
</section>
<!-- /Main Slider -->


<!-- Featured Items -->
<section class="section section--padding" id="featured">
  <div class="container">
    <div class="row">
      <div class="col s12 m6">
        <div class="center featured-item">
          <i class="material-icons">flash_on</i>
          <p class="featured-item__title">Speeds up development</p>
          <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
        </div>
      </div>
      <div class="col s12 m6">
        <div class="center featured-item">
          <i class="material-icons">flash_on</i>
          <p class="featured-item__title">Speeds up development</p>
          <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Featured Items -->


<!-- About -->
<section class="section section--padding amber lighten-4" id="about">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 offset-m2">
          <h2 class="center-align section__title">Acerca de nosotros</h2>
          <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima consectetur nihil tenetur facilis, perferendis quidem. Facilis totam, quibusdam dignissimos ab, quaerat autem aliquid sequi ex cum nemo accusantium sit id, lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed maxime expedita voluptatibus incidunt nam maiores magni debitis ullam facere iusto provident sint earum illo velit, animi neque Ab, soluta, dolore.</p>
      </div>
    </div>
  </div>
</section>
<!-- /About -->


<!-- Portfolio -->
<section class="section section--padding" id="portfolio">
  <div class="row">
    <div class="container">
      <div class="col s12 m8 offset-m2">
        <h2 class="center-align section__title">Portfolio</h2>
      </div>
    </div>
  </div>
  <div class="owl-carousel portfolio-carousel">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="http://materializecss.com/images/office.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
        <p><a href="#">This is a link</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="http://materializecss.com/images/office.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
        <p><a href="#">This is a link</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="http://materializecss.com/images/office.jpg">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
        <p><a href="#">This is a link</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
  </div>
</section>
<!-- /Portfolio -->


<!-- Blog -->
<section class="section section--padding amber lighten-4" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="container">
        <div class="col s12 m8 offset-m2">
          <h2 class="center-align section__title">Blog</h2>
        </div>
      </div>
    </div>
    <div class="owl-carousel blog-carousel">
      <div class="card">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a class="activator">reveal</a>
            <a href="#">This is a link</a>
          </div>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Blog -->

<!-- Contact -->
<section class="section section--padding" id="contact">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 offset-m2">
        <h2 class="center-align section__title">Contact</h2>
      </div>
      
      <form class="col m7 s12">
        <div class="row">
          <div class="input-field col l6 s12">
            <input placeholder="Name" id="first_name" type="text" class="validate">
          </div>
          <div class="input-field col l6 s12">
            <input placeholder="Email" id="email" type="email" class="validate">
          </div>
          <div class="input-field col s12">
            <input placeholder="Subject" id="subject" type="text" class="validate">
          </div>
          <div class="input-field col s12">
            <textarea placeholder="Message" id="textarea1" class="materialize-textarea"></textarea>
          </div>
        </div>
        <div class="row center-align">
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </form>
      <div class="col m4 s12 offset-m1">
        <ul class="collection">
          <li class="collection-item avatar">
            <img src="images/yuna.jpg" alt="" class="circle">
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle">folder</i>
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle green">insert_chart</i>
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle red">play_arrow</i>
            <span class="title">Title</span>
            <p>First Line <br>
               Second Line
            </p>
            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /Contact -->


<!-- Products -->
<!-- /Products -->


<!-- Locations -->
<!-- /Locations -->


<!-- Catalogue -->
<!-- /Catalogue -->


<!-- Footer -->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2014 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>
<!-- /Footer -->

<?php get_footer(); ?>
<div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="material-icons">menu</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>


