<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{ route('home') }}">
            <h1>SMKNTL</h1>
        </a>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{ route('home') }}" class="dropdown-toggle no-arrow">
                        <span class="fa fa-home"></span><span class="mtext">Home</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle no-arrow">
                        <span class="fa fa-table"></span><span class="mtext">Profile</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="fa fa-pencil"></span><span class="mtext">Soal</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('get_soal_t') }}">Soal tersedia</a></li>
                        <li><a href="advanced-components.php">Riwayat Soal</a></li>
                    </ul>
                </li>



            </ul>
        </div>
    </div>
</div>
