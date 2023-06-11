<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <img src="/assets/img/Logo.png" style="width:40px" alt="">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Furnitur</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Menu</span>
        </li>
        <li class="menu-item {{ $tittle === 'Dashboard' ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li
            class="menu-item {{ $tittle === 'Lihat Produk' || $tittle === 'Tambah Produk' || $tittle === 'Tambah Stok' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Produk</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $tittle === 'Lihat Produk' ? 'active' : '' }}">
                    <a href="/dashboard/lihat-produk" class="menu-link">
                        <div data-i18n="Account">Lihat Produk</div>
                    </a>
                </li>
                <li class="menu-item {{ $tittle === 'Tambah Produk' ? 'active' : '' }}">
                    <a href="/dashboard/tambah-produk" class="menu-link">
                        <div data-i18n="Notifications">Tambah Produk</div>
                    </a>
                </li>
                <li class="menu-item {{ $tittle === 'Tambah Stok' ? 'active' : '' }}">
                    <a href="/dashboard/tambah-stok" class="menu-link">
                        <div data-i18n="Connections">Tambah Stok</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item {{ $tittle === 'Order Masuk' || $tittle === 'Order Terkirim' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Order</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $tittle === 'Order Masuk' ? 'active' : '' }}">
                    <a href="/dashboard/order-masuk" class="menu-link">
                        <div data-i18n="Error">Order Masuk</div>
                    </a>
                </li>
                <li class="menu-item {{ $tittle === 'Order Terkirim' ? 'active' : '' }}">
                    <a href="/dashboard/order-terkirim" class="menu-link">
                        <div data-i18n="Under Maintenance">Order Terkirim </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Tables -->
        <li class="menu-item {{ $tittle === 'Akun User' ? 'active' : '' }}">
            <a href="/dashboard/user" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Tables">Akun User</div>
            </a>
        </li>

        <li class="menu-item {{ $tittle === 'Kategori Lihat' || $tittle === 'Kategori Tambah' ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Kategori</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ $tittle === 'Kategori Lihat' ? 'active' : '' }}">
                    <a href="/dashboard/kategori-lihat" class="menu-link">
                        <div data-i18n="Error">Kategori Lihat</div>
                    </a>
                </li>
                <li class="menu-item {{ $tittle === 'Kategori Tambah' ? 'active' : '' }}">
                    <a href="/dashboard/kategori-tambah" class="menu-link">
                        <div data-i18n="Under Maintenance">Kategori Tambah</div>
                    </a>
                </li>
            </ul>
        </li>

</aside>
