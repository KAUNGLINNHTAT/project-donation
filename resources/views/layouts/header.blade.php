<header id="top" class="w-full flex flex-col fixed sm:relative bg-white pin-t pin-r pin-l">
    <nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 p-5 bg-teal-500 shadow sm:shadow-none">
      <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center text-white">
        <a href="#" class="no-underline py-1"><h1 class="font-bold text-lg tracking-widest">LOGO</h1></a>
        <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
          <span class="hamburger__top-bun text-white"></span><span class="hamburger__bottom-bun"></span>
        </button>
      </div>
      <div id="menu" class="w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0 hidden text-white">
        <a class="text-dark text-teal-200 hover:text-white mr-4 text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="#">{{ __('messages.navbar.home') }}</a>
        <a class="text-dark text-teal-200 hover:text-white mr-4 text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">{{ __('messages.navbar.about') }}</a>
        <a class="text-dark text-white hover:text-white mr-4 text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="{{ route('donation.cdm') }}">{{ __('messages.navbar.donate') }}</a>
        <a class="text-dark text-teal-200 hover:text-white mr-4 text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">{{ __('messages.navbar.contact') }}</a>
      </div>
    </nav>
</header>

