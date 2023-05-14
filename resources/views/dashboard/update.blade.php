<x-app-layout>
<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  @include('dash_partials.head')
  <body>


    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      @include('dash_partials.desktop_sidebar')
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      @include('dash_partials.backdrop')
      <div class="flex flex-col w-full">
        @include('dash_partials.mobile_hamburger')
        
      <!-- Main Content -->
        @include('dash_partials.views.update')
      </div>
    </div>
  </body>

  <script>

    function toggleAccordion() {
      const accordion = document.getElementById("accordion");
      const arrow = document.getElementById("arrow");
      if (accordion.classList.contains("hidden")) {
        accordion.classList.remove("hidden");
        arrow.classList.add("rotate-180");
      } else {
        accordion.classList.add("hidden");
        arrow.classList.remove("rotate-180");
      }
    }

  </script>
</html>
</x-app-layout>
