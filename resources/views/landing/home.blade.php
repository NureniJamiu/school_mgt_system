<!doctype html>
<html lang="en">

@include('landing.partials.head')

<body class="antialiased bg-white font-sans text-gray-900">

  <main class="w-full">

    <!-- start header -->
    <header class="absolute top-0 left-0 w-full z-50 px-4 sm:px-8 lg:px-16 xl:px-40 2xl:px-64">
      @include('landing.partials.address')

      <div class="flex flex-wrap items-center justify-between py-6">
        <div class="w-1/2 md:w-auto">
          <a href="index.html" class="text-white font-bold text-2xl">
            Modrasah
          </a>
        </div>

        <label for="menu-toggle" class="pointer-cursor md:hidden block"><svg class="fill-current text-white"
            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <title>menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg></label>

        <input class="hidden" type="checkbox" id="menu-toggle">

        @include('landing.partials.nav')
      </div>
    </header>
    <!-- end header -->

    <!-- start hero -->
    @include('landing.partials.hero')
    <!-- end hero -->

    <!-- start about -->
    @include('landing.partials.about')
    <!-- end about -->

    <!-- start testimonials -->
    @include('landing.partials.testimonial')
    <!-- end testimonials -->

    <!-- start blog -->
    <!-- @include('landing.partials.blog') -->
    <!-- end blog -->

    <!-- start cta -->
    @include('landing.partials.cta')
    <!-- end cta -->

    <!-- start footer -->
    @include('landing.partials.footer')
    <!-- end footer -->

  </main>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-131505823-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-131505823-4');
  </script>

</body>

</html>