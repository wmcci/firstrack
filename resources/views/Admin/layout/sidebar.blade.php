 <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="/">Admnistration Firstrack</a>
                </div>
                {{-- <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html"></a>
                </div> --}}

                <ul class="sidebar-menu">

                    <li class=""><a class="nav-link" href="{{ route('admin_home')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Vidéos</span></a>
                        <ul class="dropdown-menu">
                            <li class=""><a class="nav-link" href="{{ route('insert_video') }}" href=""><i class="fas fa-angle-right"></i> Ajouter une vidéo</a></li>
                            {{-- <li class=""><a class="nav-link" href="{{ route('all_videos') }}"><i class="fas fa-angle-right"></i>Toutes les vidéos</a></li> --}}
                        </ul>
                    </li>

                         <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Fichiers</span></a>
                        <ul class="dropdown-menu">
                            <li class=""><a class="nav-link" href="{{ route('insert_fichier') }}"><i class="fas fa-angle-right"></i>Ajouter un fichier</a></li>
                            <li class=""><a class="nav-link" href="{{ route('all_files') }}"><i class="fas fa-angle-right"></i>Tous les fichiers</a></li>
                        </ul>
                    </li>


                         <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Contacts</span></a>
                        <ul class="dropdown-menu">
                            <li class=""><a class="nav-link" href="{{ route('all_contact') }}"><i class="fas fa-angle-right"></i> Tous les contacts</a></li>

                        </ul>
                    </li>


                </ul>
            </aside>
        </div>
