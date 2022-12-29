<ul class="navbar-nav ms-auto">
    @foreach ($items as $menu_item)

    <li class="nav-item">
        <a class="nav-link" href="{{$menu_item->link()}}">{{$menu_item->title}}</a>
    </li>

    @endforeach

@if (Auth::guest())
<li class="nav-item">
    <a href="/admin" class="nav-link">Acceder</a>
</li>

@elseif (Auth::user()->hasRole('user'))

<li class="nav-item">
    <a href="/admin" target="_blank" class="nav-link">Mis Datos</a>
</li>


@elseif (Auth::user()->hasRole('admin'))

<li class="nav-item">
    <a href="/admin" target="_blank" class="nav-link">Administrador</a>
</li>
@endif


</ul>