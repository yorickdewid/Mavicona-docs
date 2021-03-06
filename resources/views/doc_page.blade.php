@section('title', 'Page')

@extends('layout.master')

@section('content')

    <header class="site-header">

      @include('layout.header')

    </header>

    <main class="container-fluid">
      <div class="row">

        <!-- Sidebar -->
        <aside class="col-lg-2 col-md-3 col-sm-3 sidebar">

          <ul class="sidenav dropable sticky">
            <li><a href="/scraper/overview"><strong>Overview</strong></a></li>
            <li>
              <a class="active" href="#">Introduction</a>
              <ul>
                <li><a href="layout_boxed_left-sidebar.html">Boxed - Left sidebar</a></li>
                <li><a href="layout_boxed_right-sidebar.html">Boxed - Right sidebar</a></li>
                <li><a href="layout_boxed_no-sidebar.html">Boxed - No sidebar</a></li>
                <li><a class="active" href="layout_full_left-sidebar.html">Fullwidth - Left sidebar</a></li>
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
              <a href="#">Components</a>
              <ul>
                <li><a href="component_navbar.html">Navbar</a></li>
                <li><a href="component_banner.html">Banner</a></li>
                <li><a href="component_banner_sample1.html">Banner - Sample 1</a></li>
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
        <article class="col-lg-10 col-md-9 col-sm-9 main-content" role="main">
          
          <header>
            <h1>Page {{ $title }}</h1>
            <p>All HTML headings, h1 through h6, are available. .h1 through .h6 classes are also available, for when you want to match the font styling of a heading but still want your text to be displayed inline.</p>
            <ol class="toc">
              <li>
                <a href="#">First topic</a>
                <ol>
                  <li><a href="#">Sub topic 1</a></li>
                  <li><a href="#">Sub topic 2</a></li>
                </ol>
              </li>
              <li><a href="#">Second topic</a></li>
              <li><a href="#">Third topic</a></li>
              <li><a href="#">Fourth topic</a></li>
            </ol>
          </header>

          <section>
            <h2 id="ftt">First topic title</h2>
            <p></p>

            <div class="code-window">
              <div class="code-preview">

              </div>

<pre class="line-numbers"><code class="language-markup">

</code></pre>
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