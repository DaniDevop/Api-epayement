<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <!-- <li><a href="index.html"><i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
            </li> -->


            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="icon icon-app-store"></i><span class="nav-text">Compte</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{route('transaction.clients')}}">  {{session('marchand')->get()}} </a></li>

                    </li>
                </ul>
            </li>






             <form action="{{route('logout.clients')}}">
                <button class="btn btn-danger">Deconnexion</button>

            </form>




        </ul>
    </div>
</div>
