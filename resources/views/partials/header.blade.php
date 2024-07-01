{{-- bonus:creazione di un componente(o meglio, di un partial)che verrà poi implementato 
in welcome.blade.php  --}}
<header>
    <nav>
  <div>
    {{-- inserisco link tramiter route --}}
    <a href="{{route("welcome")}}">WELCOME</a>
    <a href="{{route("about")}}">ABOUT</a>
  </div>
    </nav>
</header>