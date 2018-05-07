<ul class="sidebar-menu" data-widget="tree">

  <li class="header">MAIN SIDEBAR</li>
  
  <li class="<?php if ($_GET['tampil'] == 'beranda'){ echo "active"; }?>">
    <a href="?tampil=beranda">
      <i class="fa fa-dashboard"></i> <span>Beranda</span>
    </a>
  </li>
  
  <li class="<?php if ($_GET['tampil'] == 'mitrapln'){ echo "active"; }?>">
    <a href="?tampil=mitrapln">
      <i class="fa fa-users"></i> <span>Mitra PLN</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'kategori'){ echo "active"; }?>">
    <a href="?tampil=kategori">
      <i class="fa fa-cogs"></i> <span>Kategori</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'kemampuan'){ echo "active"; }?>">
    <a href="?tampil=kemampuan">
      <i class="fa fa-shield"></i> <span>Kemampuan</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'produk'){ echo "active"; }?>">
    <a href="?tampil=produk">
      <i class="fa fa-briefcase"></i> <span>Produk</span>
    </a>
  </li>

  <li class="<?php if ($_GET['tampil'] == 'faq'){ echo "active"; }?>">
    <a href="?tampil=faq">
      <i class="fa fa-comment"></i> <span>FAQ</span>
    </a>
  </li>

  <li class="treeview <?php if ($_GET['tampil'] == 'pesan' || $_GET['tampil'] == 'pesanper' ){ echo "active"; }?>">
    <a href="#">
      <i class="fa fa-commenting"></i> <span>Pesan</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="<?php if ($_GET['tampil'] == 'pesan'){echo "active";} ?>">
        <a href="?tampil=pesan">
          <i class="fa fa-circle-o text-red"></i> Global
        </a>
      </li>
      <li class="<?php if ($_GET['tampil'] == 'pesanper'){echo "active";} ?>">
        <a href="?tampil=pesanper">
          <i class="fa fa-circle-o text-red"></i> Personal
        </a>
      </li>
    </ul>
  </li>

</ul>
