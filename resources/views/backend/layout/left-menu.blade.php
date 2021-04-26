@if (count($menu->children) > 0)
    <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
        <i class="nav-icon {{ $menu->icon }}"></i>
        <p>
            {{ $menu->name }}
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
@else
<li class="nav-item">
    <a href="{{ $menu->url }}" class="nav-link">
        <i class="{{ $menu->icon }} nav-icon"></i>
        <p>{{ $menu->name }}</p>
    </a>

    @endif

    @if (count($menu->children) > 0)
            <ul class="nav nav-treeview">
                @each('layout.left-menu', $menu->children, 'menu', 'layout.left-menu')
            </ul>
    @endif
</li>