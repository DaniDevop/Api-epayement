<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Administration</li>


            <li class="nav-label">Demandes</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Demandes</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('listes.demande')}}">Listes des demandes</a></li>
                   <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Clients</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('listes.clients')}}">Listes des clients</a></li>

                        </ul>
                    </li>
                </ul>
            </li>


            <li class="nav-label">Payement</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Payements</span></a>
                <ul aria-expanded="false">
                    <li><a href="./app-profile.html">Listes des demandes</a></li>
                   <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Comptes désactivé</a>
                        <ul aria-expanded="false">
                            <li><a href="./email-compose.html">Listes des actifs</a></li>

                        </ul>
                    </li>
                </ul>
            </li>


            <form id="logout-form" action="{{ route('logout.admin') }}" method="POST" style="display: none;">
                @csrf
            </form>

            <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
            </a>






        </ul>
    </div>
</div>
