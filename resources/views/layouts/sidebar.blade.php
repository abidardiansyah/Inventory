<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
     <style>
    .sidebar-menu li a span {
        font-weight: normal;
    }
    .gray-line {
    border: none;
    border-top: 1px solid #ccc;
    background-color: #ccc;
    height: 1px;
    margin: 10px ;
    }


    </style>
 
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                </a>
            </li>
            <hr class="gray-line">
            @if (auth()->user()->level == 1)
            <li class="header">MASTER DATA</li>
             <li>
                <a href="{{ route('supplier.index') }}">
                    <i class="fa fa-users"></i> <span>Supplier</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-folder"></i> <span>Master</span>
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('kategori.index') }}">Kategori</a>
                    </li>
                    <li>
                        <a href="{{ route('produk.index') }}">Produk</a>
                    </li>
                    <li>
                        <a href="{{ route('member.index') }}">Member</a>
                    </li>
                </ul>
            </li>
 <hr class="gray-line">
           
            <li class="header">TRANSAKSI</li>
            <li>
                <a href="{{ route('pengeluaran.index') }}">
                    <i class="fa fa-money"></i> <span>Transaksi Pengeluaran</span>
                </a>
            </li>
            <li>
                <a href="{{ route('pembelian.index') }}">
                    <i class="fa fa-download"></i> <span>Pembelian</span>
                </a>
            </li>
            <li>
                <a href="{{ route('penjualan.index') }}">
                    <i class="fa fa-upload"></i> <span>Penjualan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li>
             <hr class="gray-line">
            <li class="header">LAPORAN</li>
            <li>
                <a href="{{ route('laporan.index') }}">
                    <i class="fa fa-print"></i> <span>Cetak Laporan</span>
                </a>
            </li>
             <hr class="gray-line">
            <li class="header">PENGATURAN</li>
            <li>
                <a href="{{ route('user.index') }}">
                    <i class="fa fa-users"></i> <span>Manajemen Pengguna</span>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route("setting.index") }}">
                    <i class="fa fa-cogs"></i> <span>Pengaturan</span>
                </a>
            </li> --}}
            @else
            <li>
                <a href="{{ route('transaksi.index') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Aktif</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaksi.baru') }}">
                    <i class="fa fa-cart-arrow-down"></i> <span>Transaksi Baru</span>
                </a>
            </li>
            @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>