@if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->associates()->name }}</a>
                </li>
            @endif