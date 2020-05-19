<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <!-- NAVBAR SIDE -->
            <ul class="nav navbar-nav">
                <li id="profile-menu" class="menu-title mb-2" style="background: #FFDE59">
                    <div class="row py-5">
                        <i class="col-lg-3 fa fa-user" style="font-size: 64px; color: black"></i>
                        <div class="col-lg-9">
                            <p class="text-dark">{{ auth()->user()->nama }}</p>
                            @if(auth()->user()->role=='siswa')
                                <p>{{ auth()->user()->siswa->NIS }}</p>
                            @elseif(auth()->user()->role=='pembina')
                                <p>{{ auth()->user()->guru->NIP }}</p>
                            @endif
                        </div>
                    </div>
                </li>
                @auth
                    @if(auth()->user()->role=='siswa')
                        <li>
                            <a href="/home">
                                <i class="menu-icon mb-2 fa fa-home"></i>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/profile/{{ auth()->user()->id }}/view">
                                <i class="menu-icon mb-2 fa fa-user"></i>
                                Biodata
                            </a>
                        </li>
                        <li>
                            <a href="/hafalan-siswa/{{ Auth()->user()->id }}">
                                <i class="menu-icon mb-2 fa fa-book"></i>
                                Hafalan Al-Qur'an dan Hadits
                            </a>
                        </li>
                        <li>
                            <a
                                href="{{ route('viewPoinSiswaPage', Auth::user()->siswa->id) }}">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Poin Pelanggaran dan Kebaikan
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-yaumiyah/{{ Auth()->user()->id }}">
                                <i class="menu-icon mb-2 fa fa-star"></i>
                                Catatan Amalan Yaumiah
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-sholat/{{ Auth()->user()->id }}">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Shalat
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-kebaikan/{{ auth()->user()->id }}">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Kebaikan & Keburukan
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-harian/{{ auth()->user()->id }}">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Harian
                            </a>
                        </li>
                    @elseif(auth()->user()->role=='pembina')
                        <li>
                            <a href="/home">
                                <i class="menu-icon mb-2 fa fa-home"></i>
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="/profile">
                                <i class="menu-icon mb-2 fa fa-user"></i>
                                Biodata
                            </a>
                        </li>
                        <li>
                            <a href="/hafalan-pembina">
                                <i class="menu-icon mb-2 fa fa-book"></i>
                                Hafalan Al-Qur'an dan Hadits
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('viewPoinSearchPage') }}">
                                <i class="menu-icon mb-2 fa fa-star"></i>
                                Poin Pelanggaran dan Kebaikan
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-yaumiyah-siswa">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Amalan Yaumiah
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-sholat">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Shalat
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-kebaikan-siswa">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Kebaikan & Keburukan
                            </a>
                        </li>
                        <li>
                            <a href="/catatan-harian">
                                <i class="menu-icon mb-2 fa fa-pencil"></i>
                                Catatan Harian
                            </a>
                        </li>
                    @endif
                @endauth
                @guest
                    <li
                        class="{{ 'home' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                        <a href="/home"></i>Beranda </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#">Login</a>
                    </li>
                @endguest
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->