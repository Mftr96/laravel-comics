{{-- bonus:creazione di un componente(o meglio, di un partial)che verrà poi implementato 
in welcome.blade.php  --}}
<header>
    <nav>
  <div>
    {{-- inserisco link tramiter route --}}
    {{-- si, ho copiato una soluzione online ma funziona😅 --}}
    <a @class(['selected' => Route::currentRouteName() === 'welcome']) href="{{route("welcome")}}">WELCOME</a>
    <a @class(['selected' => Route::currentRouteName() === 'about']) href="{{route("about")}}">ABOUT</a>
    <p>siamo su {{Route::currentRouteName()}}</p>
  </div>
    </nav>
</header>