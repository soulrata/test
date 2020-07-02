<nav>
    {{-- <pre>{{dump(request()->path())}}</pre> --}}
    <ul>
        <li class="{{ setActive('home') }}"><a href="/">Home</a>
        <li class="{{ setActive('abaut') }}" ><a href="/abaut">Abaut</a></li>
        <li class="{{ setActive('portafolio') }}" ><a href="/portafolio">Portafolio</a></li>
        <li class="{{ setActive('contact') }}" ><a href="/contact">Contact</a></li>
    </ul>
</nav>