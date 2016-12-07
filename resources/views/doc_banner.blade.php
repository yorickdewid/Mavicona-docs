@section('title', 'Banner')

@extends('layout.master')

@section('content')

    @include('layout.header')

    <main class="container-fluid">
      <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-3 col-sm-3 sidebar">

          <ul class="sidenav dropable sticky">
            <li><a href="index-2.html">Overview</a></li>
            <li>
              <a href="#">Layouts</a>
              <ul>
                <li><a href="layout_boxed_left-sidebar.html">Boxed - Left sidebar</a></li>
                <li><a href="layout_boxed_right-sidebar.html">Boxed - Right sidebar</a></li>
                <li><a href="layout_boxed_no-sidebar.html">Boxed - No sidebar</a></li>
                <li><a href="layout_full_left-sidebar.html">Fullwidth - Left sidebar</a></li>
                <li><a href="layout_full_right-sidebar.html">Fullwidth - Right sidebar</a></li>
                <li><a href="layout_full_no-sidebar.html">Fullwidth - No sidebar</a></li>
                <li><a href="layout_single-page-1.html">Single page - Sample 1</a></li>
                <li><a href="layout_single-page-2.html">Single page - Sample 2</a></li>
                <li><a href="layout_single-page-3.html">Single page - Sample 3</a></li>
                <li><a href="layout_sidebar_boxed.html">Boxed sidebar</a></li>
                <li><a href="layout_skin.html">Skins</a></li>
              </ul>
            </li>

            <li>
              <a class="active" href="#">Components</a>
              <ul>
                <li><a href="component_navbar.html">Navbar</a></li>
                <li><a href="component_banner.html">Banner</a></li>
                <li><a class="active" href="component_banner_sample1.html">Banner - Sample 1</a></li>
                <li><a href="component_banner_sample2.html">Banner - Sample 2</a></li>
                <li><a href="component_banner_sample3.html">Banner - Sample 3</a></li>
                <li><a href="component_sidebar.html">Sidebar - default</a></li>
                <li><a href="component_sidebar_line.html">Sidebar - line</a></li>
                <li><a href="component_sidebar_icon.html">Sidebar - icon</a></li>
                <li><a href="component_footer.html">Footer</a></li>
              </ul>
            </li>

            <li>
              <a href="#">Basic styling</a>
              <ul>
                <li><a href="css_typography.html">Typography</a></li>
                <li><a href="css_button.html">Buttons</a></li>
                <li><a href="css_label.html">Labels</a></li>
                <li><a href="css_table.html">Tables</a></li>
                <li><a href="css_alert.html">Alerts</a></li>
                <li><a href="css_icon.html">Icons</a></li>
              </ul>
            </li>

            <li>
              <a href="#">Elements</a>
              <ul>
                <li><a href="element_toc.html">Table of contents</a></li>
                <li><a href="element_code.html">Code view</a></li>
                <li><a href="element_view.html">Views</a></li>
                <li><a href="element_promo.html">Promo</a></li>
                <li><a href="element_files.html">Included files</a></li>
                <li><a href="element_requirement.html">Requirements</a></li>
                <li><a href="element_tab.html">Tabs</a></li>
                <li><a href="element_step.html">Steps</a></li>
                <li><a href="element_media.html">Media</a></li>
                <li><a href="element_color.html">Color palette</a></li>
                <li><a href="element_jumbotron.html">Jumbotron</a></li>
                <li><a href="element_carousel.html">Carousel</a></li>
                <li><a href="element_faq.html">FAQ</a></li>
                <li><a href="element_mix.html">Mix</a></li>
              </ul>
            </li>

            <li>
              <a href="#">Menu level</a>
              <ul>
                <li><a href="#">Level 1</a></li>
                <li>
                  <a href="#">Level 1</a>
                  <ul>
                    <li><a href="#">Level 2</a></li>
                    <li>
                      <a href="#">Level 2</a>
                      <ul>
                        <li><a href="#">Level 3</a></li>
                        <li><a href="#">Level 3</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Level 2</a></li>
                  </ul>
                </li>
                <li><a href="#">Level 1</a></li>
                <li><a href="#">Level 1</a></li>
              </ul>
            </li>

          </ul>

        </aside>
        <!-- END Sidebar -->


        <!-- Main content -->
        <article class="col-md-9 col-sm-9 main-content" role="main">
          
          <header>
            <h1>Banner</h1>
            <p>Banner is a combination of an image, some heading text, paragraphs, buttons, etc. which comes to header of your page and gives your readers an important message and make your page more fancier.</p>

            <ol class="toc">
              <li><a href="#basic">Basic usage</a></li>
              <li><a href="#sizes">Sizes</a></li>
              <li><a href="#variations">Variations</a></li>
            </ol>
          </header>

          <section>
            <h2 id="basic">Basic usage</h2>
            <p>You can see an example of a banner in top of this page. Following code is the code for this banner.</p>

<pre class="line-numbers"><code class="language-markup">
&lt;header class=&quot;site-header navbar-transparent navbar-fullwidth&quot;&gt;

  &lt;!-- Top navbar &amp; branding --&gt;
  &lt;nav class=&quot;navbar navbar-default&quot;&gt;
  ...
  &lt;/nav&gt;
  &lt;!-- END Top navbar &amp; branding --&gt;

  &lt;!-- Banner --&gt;
  &lt;div class=&quot;banner overlay-black&quot; style=&quot;background-image: url(/img/banner1.jpg);&quot;&gt;
    &lt;div class=&quot;container text-center&quot;&gt;
      &lt;h1&gt;Online Documentation Template&lt;/h1&gt;
      &lt;h5&gt;&lt;strong&gt;theDocs&lt;/strong&gt; reduce the burden of developing documentation for your next product.&lt;/h5&gt;
      &lt;br&gt;&lt;br&gt;&lt;br&gt;
      &lt;p&gt;&lt;a class=&quot;btn btn-white btn-lg btn-outline&quot; href=&quot;#&quot; role=&quot;button&quot;&gt; Getting Started &lt;/a&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- END Banner --&gt;

&lt;/header&gt;
</code></pre>
            
            <div class="callout callout-info" role="alert">
              <h4>Overlays</h4>
              <p>To make a better contrast between texts and image, it's better to use overlay helper classes with banners. You can use either <code>.overlay-black</code> or <code>.overlay-white</code> with your banner.</p>
            </div>

          </section>


          <section>
            <h2 id="sizes">Sizes</h2>
            <p>Easily change the height of your banner by adding <code>.banner-sm</code> or <code>.banner-lg</code> to the <code>.banner</code>. Even you can make it full height by adding <code>.navbar-full-height</code> to the <code>.banner</code>.</p>

            <div class="row">
              <div class="col-md-6">
                <div class="promo">
                  <img class="bordered" src="/img/banner-sm.png" alt="small">
                  <h3>Small</h3>
                  <p>Uses <code>.banner-sm</code> class.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="promo">
                  <img class="bordered" src="/img/banner-default.png" alt="default">
                  <h3>Default</h3>
                  <p>It's default size, doesn't require any class.</p>
                </div>
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-md-6">
                <div class="promo">
                  <img class="bordered" src="/img/banner-lg.png" alt="large">
                  <h3>Large</h3>
                  <p>Uses <code>.banner-lg</code> class.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="promo">
                  <img class="bordered" src="/img/banner-full-height.png" alt="fullwidth">
                  <h3>Full Height</h3>
                  <p>Uses <code>.banner-full-height</code> class.</p>
                </div>
              </div>
            </div>

            <div class="callout callout-warning" role="alert">
              <h4>Phones</h4>
              <p>Due to lack of enough space, banner size will be full height in phones.</p>
            </div>

          </section>


          <section>
            <h2 id="variations">Variations</h2>
            <p>Apart from size varieties, you can make different type of variations.</p>

            <div class="row">
              <div class="col-md-4">
                <div class="promo">
                  <img class="bordered" src="/img/banner-sample1.png" alt="sample1">
                  <h3>Sample 1</h3>
                  <a class="btn btn-teal" href="component_banner_sample1.html">Demo</a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="promo">
                  <img class="bordered" src="/img/banner-sample2.png" alt="sample2">
                  <h3>Sample 2</h3>
                  <a class="btn btn-teal" href="component_banner_sample2.html">Demo</a>
                </div>
              </div>

              <div class="col-md-4">
                <div class="promo">
                  <img class="bordered" src="/img/banner-sample3.png" alt="sample3">
                  <h3>Sample 3</h3>
                  <a class="btn btn-teal" href="component_banner_sample3.html">Demo</a>
                </div>
              </div>
            </div>

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