@section('title', 'Changelog')

@extends('layout.master')

@section('content')
    <header class="site-header">

      <!-- Top navbar & branding -->
      <nav class="navbar navbar-default">
        <div class="container">

          <!-- Toggle buttons and brand -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
              <span class="glyphicon glyphicon-option-vertical"></span>
            </button>

            <button type="button" class="navbar-toggle for-sidebar" data-toggle="offcanvas">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index-2.html"><img src="/img/logo.png" alt="logo"></a>
          </div>
          <!-- END Toggle buttons and brand -->

          <!-- Top navbar -->
          <div id="navbar" class="navbar-collapse collapse" aria-expanded="true" role="banner">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index-2.html">Documentation</a></li>
              <li><a href="page_blog.html">Blog</a></li>
              <li><a href="page_faq.html">FAQ</a></li>
              <li><a href="http://themeforest.net/item/thedocs-online-documentation-template/13070884/comments" target="_blank">Support</a></li>
              <li class="hero"><a href="http://themeforest.net/item/thedocs-online-documentation-template/13070884">Purchase</a></li>
            </ul>
          </div>
          <!-- END Top navbar -->

        </div>
      </nav>
      <!-- END Top navbar & branding -->
      
    </header>


    <main class="container">
      <div class="row">

        <!-- Main content -->
        <article class="col-md-12 col-sm-12 main-content" role="main">
          
          <header>
            <h1>Changelog</h1>
            <p>In this page, you can find a record of all the changes made to this project such as bug fixes, new features, etc.</p>

            <ol class="toc">
              <li><a href="#v1.3.1">Version 1.3.1</a></li>
              <li><a href="#v1.3.0">Version 1.3.0</a></li>
              <li><a href="#v1.2.0">Version 1.2.0</a></li>
              <li><a href="#v1.1.0">Version 1.1.0</a></li>
              <li><a href="#v1.0.0">Version 1.0.0</a></li>
            </ol>
          </header>

          <section>
            <h3 id="v1.3.1">Version 1.3.1 <small class="release-date">September 15, 2016</small></h3>
            <br>
            <ul class="changelog">
              <li class="ch-added">Unlimited menu levels</li>
              <li class="ch-fixed">Change tab issue in code window and code tab</li>
              <li class="ch-updated">Some improvements for small screen devices</li>
            </ul>
          </section>

          <section>
            <h3 id="v1.3.0">Version 1.3.0 <small class="release-date">August 11, 2016</small></h3>
            <br>
            <ul class="changelog">
              <li class="ch-added">Page <a href="page_blog.html" target="_blank">Blog</a></li>
              <li class="ch-added">Page <a href="page_blog-single.html" target="_blank">Blog post</a></li>
              <li class="ch-added"><a href="element_code.html#line-highlight" target="_blank">Line highlight</a> for code blocks</li>
              <li class="ch-added"><a href="element_step.html#text" target="_blank">Sub step</a> added to step element</li>
              <li class="ch-fixed">Navbar occlude footer in small-height screens</li>
              <li class="ch-fixed">Some bugs in copy to clipboard</li>
              <li class="ch-updated">Bootstrap to v3.3.7</li>
              <li class="ch-updated">FontAwesome to v4.6.3</li>
              <li class="ch-updated">jQuery to v3.1.0</li>
              <li class="ch-updated">Clipboard.js to v1.5.12</li>
              <li class="ch-updated">PrismJs to latest version with new <a href="element_code.html#supported-languages" target="_blank">language supports</a></li>
              <li class="ch-updated">gruntfile.js - deprecated autoprefixer updated and BrowserSync added</li>
              <li class="ch-updated">Some improvements to CSS and JS code</li>
            </ul>
          </section>

          <section>
            <h3 id="v1.2.0">Version 1.2.0 <small class="release-date">December 28, 2015</small></h3>
            <br>
            <ul class="changelog">
              <li class="ch-added">New single-page documentation layout (<a href="layout_single-page-1.html" target="_blank">Sample 1</a>, <a href="layout_single-page-2.html" target="_blank">Sample 2</a>, <a href="layout_single-page-3.html" target="_blank">Sample 3</a>)</li>
              <li class="ch-added"><a href="element_media.html#lightbox" target="_blank">Lightbox</a> element</li>
              <li class="ch-added"><a href="element_color.html" target="_blank">Color palette</a> element</li>
              <li class="ch-added"><a href="element_carousel.html" target="_blank">Carousel</a> element</li>
              <li class="ch-added"><a href="element_mix.html#breadcrumbs" target="_blank">Breadcrumb</a> element</li>
              <li class="ch-added"><a href="element_mix.html#pagination" target="_blank">Pagination</a> element</li>
              <li class="ch-updated">Bootstrap updated to <strong>v3.3.6</strong></li>
              <li class="ch-updated">FontAwesome updated to <strong>v4.5</strong></li>
              <li class="ch-fixed">Minor bugs in responsivity</li>
            </ul>

          </section>

          <section>
            <h3 id="v1.1.0">Version 1.1.0 <small class="release-date">October 18, 2015</small></h3>
            <br>
            <ul class="changelog">
              <li class="ch-added"><a href="layout_sidebar_boxed.html" target="_blank">New fullwidth layout</a> with boxed sidebar</li>
              <li class="ch-added">Copy to clipboard button added to <code>pre</code> tags</li>
              <li class="ch-added"><a href="css_table.html#changelog_list">New changelog</a> element by <code>ul</code> tag with small amount of code to write</li>
              <li class="ch-updated">Some UI element had change in appearance</li>
              <li class="ch-fixed">Minor bugs in responsivity</li>
            </ul>

          </section>

          <section>
            <h3 id="v1.0.0">Version 1.0.0<small class="release-date">October 08, 2015</small></h3>
            <p>Initial release.</p>
          </section>

          
        </article>
        <!-- END Main content -->
      </div>
    </main>

    @include('layout.footer')

    <!-- Scripts -->
    <script src="/js/theDocs.all.min.js"></script>
    <script src="/js/custom.js"></script>

  </body>
@endsection