<nav class="menuHTML">

    <ul class="menu-item">
        <li id="home"><a href="{{ url('/') }}"><img src="{{ asset('img/svg/home.svg') }}" alt="Home"></a></li>
        <li id="user"><a href="{{ url('/user') }}"><img src="{{ asset('img/svg/user.svg') }}" alt="User"></a></li>
        <li id="menu-Btn"><img src="{{ asset('img/svg/menu-list.svg') }}" alt="Menu"></li>
        <li id="menus">
            <ul>
                <li><a href="{{ route('alimento.show', 'aceite') }}">aceite</a></li>
                <li><a href="{{ route('alimento.show', 'carne') }}">carne</a></li>
                <li><a href="{{ route('alimento.show', 'harina') }}">harina</a></li>
                <li><a href="{{ route('alimento.show', 'huevo') }}">huevo</a></li>
                <li><a href="{{ route('alimento.show', 'leche') }}">leche</a></li>
                <li><a href="{{ route('alimento.show', 'pescado') }}">pescado</a></li>
            </ul>
        </li>
    </ul>

    <!-- https://www.svgrepo.com/ -->
</nav>