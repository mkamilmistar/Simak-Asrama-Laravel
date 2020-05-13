<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <!-- NAVBAR SIDE -->
            <ul class="nav navbar-nav">
                <li class="profile-pic">
                    <div class="profile-item">
                        <i style="font-size: 80px;" class="fa fa-user fa-xs"></i> 
                    </div>
                    <div class="profile-item">
                        <p>{{auth()->user()->nama}}</p>
                        <p>000000000</p>
                    </div>
                </li>
                @auth
                @if(auth()->user()->role=='siswa')
                <li class="{{ 'home' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/home">Beranda </a>
                </li>
                <li class="{{ '/profile' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/profile/{{auth()->user()->id}}/view">Biodata</a>
                </li>
                <li class="{{ 'hafalan-siswa' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/hafalan-siswa">Hafalan Al-Qur'an dan Hadits</a>
                </li>
                <li class="{{ 'catatan-yaumiyah' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/catatan-yaumiyah">Catatan Amalan Yaumiah</a>
                </li>
                <li class="nav-item">
                    <a href="#">Poin Pelanggaran dan Kebaikan</a>
                </li>
                <li class="nav-item">
                    <a href="#">Catatan Shalat</a>
                </li>
                <li class="{{ 'catatan-kebaikan' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/catatan-kebaikan/{{auth()->user()->id}}">Catatan Kebaikan & Keburukan</a>
                </li>
                <li class="nav-item">
                    <a href="/catatan-harian-siswa/{{auth()->user()->id}}">Catatan Harian</a>
                </li>

                @elseif(auth()->user()->role=='pembina')
                <li class="{{ 'home' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/home"></i>Beranda </a>
                </li>
                <li class="{{ 'profile' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/profile">Biodata</a>
                </li>
                <li class="{{ '/hafalan-pembina' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/hafalan-pembina">Hafalan Al-Qur'an dan Hadits</a>
                </li>
                <li class="{{ 'catatan-yaumiyah-pembina' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/catatan-yaumiyah-pembina">Catatan Amalan Yaumiah</a>
                </li>
                <li class="nav-item">
                    <a href="#">Poin Pelanggaran dan Kebaikan</a>
                </li>
                <li class="nav-item">
                    <a href="#">Catatan Shalat</a>
                </li>
                <li class="{{ 'catatan-kebaikan-siswa' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/catatan-kebaikan-siswa">Catatan Kebaikan & Keburukan</a>
                </li>
                <li class="{{ 'catatan-harian' == request()->path() ? 'nav-item active' : 'nav-item' }}">
                    <a href="/catatan-harian">Catatan Harian</a>
                </li>
                @endif
                @endauth
                @guest
                <li class="{{ 'home' == request()->path() ? 'nav-item active' : 'nav-item' }}">
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