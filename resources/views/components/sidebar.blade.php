<aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
  <div class="h-19.5">
    <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
    <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
      <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Digital Perpustakaan</span>
    </a>
  </div>

  <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

  <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a class="{{ Route::currentRouteName() == 'home' ? 'shadow-soft-xl font-semibold text-slate-700 ' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 transition-colors" href="{{ route('home') }}">
          <div class="{{ Route::currentRouteName() == 'home' ? 'bg-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Route::currentRouteName() == 'home' ? 'text-white' : '' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="{{ Route::currentRouteName() == 'category' ? 'shadow-soft-xl font-semibold text-slate-700 ' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('category') }}">
          <div class="{{ Route::currentRouteName() == 'category' ? 'bg-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Route::currentRouteName() == 'category' ? 'text-white' : '' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75 2.25 12l4.179 2.25m0-4.5 5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0 4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0-5.571 3-5.571-3" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Kategori buku</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="{{ Route::currentRouteName() == 'book.list' ? 'shadow-soft-xl font-semibold text-slate-700 ' : '' }} py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('book.list') }}">
          <div class="{{ Route::currentRouteName() == 'book.list' ? 'bg-blue-500' : 'bg-white' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
            <svg xmlns="http://www.w3.org/2000/svg" class="{{ Route::currentRouteName() == 'book.list' ? 'text-white' : '' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">List Buku</span>
        </a>
      </li>

    </ul>
  </div>

</aside>