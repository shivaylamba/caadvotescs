        @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome {{ AssociateAuth()()->associates()->name }}</a>
                </li>
            @endif