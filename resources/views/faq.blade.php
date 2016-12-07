@section('title', 'FAQ')

@extends('layout.master')

@section('content')

    @include('layout.header')

    <main class="container">
      <div class="row">

        <!-- Main content -->
        <article class="col-md-12 col-sm-12 main-content" role="main">
          
          <h1>Frequently asked questions</h1>
          <p>If you have a question and couldn't find it here, just send us an <a href="mailto:support@shamsoft.net">email</a>.</p>
          <br>

          <div class="faq">
            <input class="faq-search" type="text" placeholder="Type to search...">

            <ul>
              <li>
                <h6>How to update template?</h6>
                <div>
                  <p>Once you download the new updates from Themeforest, simply replace the new "assets" folder with previous "assets" folder in your projects.</p>
                  <p>Thats it! Your are now updated and ready to go.</p>
                </div>
              </li>
            </ul>

          </div>

          <p class="text-gray">Not listed? Contact support.</p>
          
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
