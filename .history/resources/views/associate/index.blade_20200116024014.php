@if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome {{ auth()->associates()->name }}</a>
                </li>
            @endif