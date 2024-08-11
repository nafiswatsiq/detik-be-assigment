<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
  <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
    <nav>
      <!-- breadcrumb -->
      <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
        <li class="leading-normal text-sm">
          <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
        </li>
        <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
      </ol>
      <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
    </nav>

    <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
      <div class="flex items-center md:ml-auto md:pr-4">
        <div class="relative items-center flex flex-wrap w-full transition-all rounded-lg ease-soft z-0">
          <div class="mr-6 text-sm">Hi, <span class="text-blue-500">{{ auth()->user()->name }}!</span></div>
        </div>
      </div>

      <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
        <li class="flex items-center">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="text-sm flex">
              Logout
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
              </svg>
          </button>
          </form>
        </li>
        <li class="flex items-center pl-4 xl:hidden">
          <a href="javascript:;" class="block p-0 transition-all ease-nav-brand text-sm text-slate-500" sidenav-trigger>
            <div class="w-4.5 overflow-hidden">
              <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
              <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
              <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
            </div>
          </a>
        </li>
        <li class="flex items-center px-4">
          <a href="javascript:;" class="p-0 transition-all text-sm ease-nav-brand text-slate-500">
            <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>