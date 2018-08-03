<?php
if (isset($_GET["m1"])){$m1="active";}else
if (isset($_GET["m2"])){$m2="active";}else
if (isset($_GET["m3"])){$m3="active";}else
if (isset($_GET["m4"])){$m4="active";}else{$m1="active";}
?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Halaman Administrator</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="./?pengaturan"><i class="fa fa-gear fa-fw"></i> Pengaturan</a></li>
                <li class="divider"></li>
                <li><a href="./proses/logout.php"><i class="fa fa-sign-out fa-fw"></i> Keluar</a></li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a class="<?php echo $m1;?>" href="./"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
                </li>
                <li>
                    <a class="<?php echo $m2;?>" href="./?m2"><i class="fa fa-car fa-fw"></i> Data Angkot</a>
                </li>
                <li>
                    <a class="<?php echo $m3;?>" href="./?m3"><i class="fa fa-road fa-fw"></i> Data Trayek</a>
                </li>
                <li>
                    <a class="<?php echo $m4;?>" href="./?m4"><i class="fa fa-cube fa-fw"></i> Data Wilayah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>