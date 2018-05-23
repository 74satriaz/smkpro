
<!--pundak-->

  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('/temacode/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Heri Suharyanto</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">UPDATE</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-home"></i><span>Beranda</span></a></li>

        <li class=""><a href="#"><i class="fa fa-window-maximize"></i><span>Banner</span></a></li>

        <li class=""><a href="{{ route ('berita.index') }}"><i class="fa fa-paper-plane"></i><span>Berita</span></a></li>
        <li class=""><a href="{{ route ('berita.index') }}"><i class="fa fa-paper-plane"></i><span>Pengumuman</span></a></li>
        <li class=""><a href="{{ route ('berita.index') }}"><i class="fa fa-paper-plane"></i><span>Agenda</span></a></li>

        <li class="header">STATIS</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-address-card"></i><span>Profil</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span> 
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('visimisi.index') }}">Visi & Misi</a></li>
            <li><a href="#">Struktur Organisasi</a></li>
            <li><a href="#">Kepala Sekolah</a></li>
            <li><a href="{{ route('sejarah.index') }}">Sejarah</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#"><i class="fa fa-briefcase"></i><span>Program Keahlian</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Multimedia</a></li>
            <li><a href="#">Pertanian</a></li>
            <li><a href="#">Perikanan</a></li>
            <li><a href="#">Akuntansi</a></li>
            <li><a href="#">Teknik Gambar Bangunan</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>