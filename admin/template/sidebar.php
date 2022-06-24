   
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
<?php 
  $id = $_SESSION['admin']['id_member'];
  $hasil_profil = $lihat -> member_edit($id);
?>
    <aside>
>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                
                    <p class="centered"><a><img src="assets/img/user/<?php echo $hasil_profil['gambar'];?>" class="img-circle" width="200" height="200"></a></p>
                    <h2 class="centered"><?php echo $hasil_profil['nm_member'];?></h2>
                    <h5 class="centered">( <?php echo $hasil_profil['NIK'];?> )</h5>
                        
                    <li class="mt">
                        <a href="index.php">
                            <i class="fa fa-dashboard" style="font-size: 38px;"></i>
                            <span style="font-size: 15px;">Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop" style="font-size: 34px;"></i>
                            <span style="font-size: 15px;">Master <span style="padding-left: 2px;"> <i class="fa fa-angle-down"></i></span></span>
                        </a>

                        <ul class="sub">
                            <li><a  href="index.php?page=pelanggan" style="font-size: 10px;">Pembeli</a></li>
                            <li><a  href="index.php?page=barang" style="font-size: 10px;">Barang</a></li>
                            <li><a  href="index.php?page=kategori" style="font-size: 10px;">Kategori</a></li>
                            <li><a  href="index.php?page=user" style="font-size: 10px;">Petugas</a></li>
                        </ul>

                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop" style="font-size: 34px;"></i>
                            <span style="font-size: 15px;">Transaksi <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                        </a>
                        <ul class="sub">
                            <li><a  href="index.php?page=jual">Penjualan</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-desktop" style="font-size: 34px;"></i>
                            <span style="font-size: 15px;">Laporan<span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                        </a>
                        <ul class="sub" style="font-size: 10px;">
                            <li><a  href="index.php?page=laporan">Laporan Penjualan</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu"> 
                        <a href="javascript:;" >
                            <i class="fa fa-cog"></i>
                            <span style="font-size: 15px;">Setting <span style="padding-left:2px;"> <i class="fa fa-angle-down"></i></span></span>
                        </a>
                        <ul class="sub">
                            <li><a href="index.php?page=pengaturan">Pengaturan Toko</a></li>
                        </ul>

                        <ul class="sub">
                            <li><a href="index.php?page=pengaturan">Tentang Kami</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
</body>
     
      <!--sidebar end-->
      
