<?php
function is_active($segment, $value) {
    $CI =& get_instance();
    return $CI->uri->segment($segment) == $value ? 'active' : '';
}

$uri2 = $this->uri->segment(2);
$submenu_penduduk = in_array($uri2, ['penduduk', 'kartu-keluarga', 'anggota-kk']);
$submenu_profile = in_array($uri2, ['sejarah-desa', 'potensi-desa', 'kegiatan-desa', 'struktur-organisasi', 'perangkat-desa']);
$submenu_berita = in_array($uri2, ['berita', 'galeri']);
$submenu_user = in_array($uri2, ['user', 'aktivitas']);
?>

<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Menu</li>

            <li class="<?php echo is_active(2, 'beranda'); ?>">
                <a href="<?php echo base_url('admin/beranda') ?>" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span class="nav-text">Beranda</span>
                </a>
            </li>

            <li class="mega-menu mega-menu-sm <?php echo $submenu_penduduk ? 'active' : ''; ?>">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-people menu-icon"></i><span class="nav-text">Data Penduduk</span>
                </a>
                <ul aria-expanded="false">
                    <li class="<?php echo is_active(2, 'penduduk'); ?>"><a
                            href="<?php echo base_url('admin/penduduk'); ?>">Penduduk</a></li>
                    <li class="<?php echo is_active(2, 'kartu-keluarga'); ?>"><a
                            href="<?php echo base_url('admin/kartu-keluarga'); ?>">Kartu Keluarga</a></li>
                    <li class="<?php echo is_active(2, 'anggota-kk'); ?>"><a
                            href="<?php echo base_url('admin/anggota-kk'); ?>">Anggota KK</a></li>
                </ul>
            </li>

            <li class="<?php echo is_active(2, 'surat'); ?>">
                <a href="<?php echo base_url('admin/surat') ?>" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i><span class="nav-text">Surat</span>
                </a>
            </li>

            <li class="<?php echo $submenu_profile ? 'active' : ''; ?>">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-tag menu-icon"></i><span class="nav-text">Profile Desa</span>
                </a>
                <ul aria-expanded="false">
                    <li class="<?php echo is_active(2, 'sejarah-desa'); ?>"><a
                            href="<?php echo base_url('admin/sejarah-desa'); ?>">Sejarah Desa</a></li>
                    <li class="<?php echo is_active(2, 'potensi-desa'); ?>"><a
                            href="<?php echo base_url('admin/potensi-desa'); ?>">Potensi Desa</a></li>
                    <li class="<?php echo is_active(2, 'kegiatan-desa'); ?>"><a
                            href="<?php echo base_url('admin/kegiatan-desa'); ?>">Kegiatan Desa</a></li>
                    <li class="<?php echo is_active(2, 'struktur-organisasi'); ?>"><a
                            href="<?php echo base_url('admin/struktur-organisasi'); ?>">Struktur Organisasi</a></li>
                    <li class="<?php echo is_active(2, 'perangkat-desa'); ?>"><a
                            href="<?php echo base_url('admin/perangkat-desa'); ?>">Perangkat Desa</a></li>
                </ul>
            </li>

            <li class="<?php echo $submenu_berita ? 'active' : ''; ?>">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-picture menu-icon"></i> <span class="nav-text">Berita Galeri</span>
                </a>
                <ul aria-expanded="false">
                    <li class="<?php echo is_active(2, 'berita'); ?>"><a
                            href="<?php echo base_url('admin/berita'); ?>">Berita</a></li>
                    <li class="<?php echo is_active(2, 'galeri'); ?>"><a
                            href="<?php echo base_url('admin/galeri'); ?>">Foto</a></li>
                </ul>
            </li>

            <li class="<?php echo is_active(2, 'pengaduan'); ?>">
                <a href="<?php echo base_url('admin/pengaduan') ?>" aria-expanded="false">
                    <i class="icon-envelope menu-icon"></i><span class="nav-text">Pengaduan Masyarakat</span>
                </a>
            </li>

            <li class="<?php echo is_active(2, 'umkm'); ?>">
                <a href="<?php echo base_url('admin/umkm') ?>" aria-expanded="false">
                    <i class="icon-briefcase menu-icon"></i><span class="nav-text">UMKM</span>
                </a>
            </li>

            <li class="<?php echo is_active(2, 'keuangan'); ?>">
                <a href="<?php echo base_url('admin/keuangan') ?>" aria-expanded="false">
                    <i class="icon-wallet menu-icon"></i><span class="nav-text">Keuangan Desa</span>
                </a>
            </li>

            <li class="<?php echo $submenu_user ? 'active' : ''; ?>">
                <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                    <i class="icon-user menu-icon"></i><span class="nav-text">User & Aktivitas</span>
                </a>
                <ul aria-expanded="false">
                    <li class="<?php echo is_active(2, 'user'); ?>"><a
                            href="<?php echo base_url('admin/user'); ?>">Manajemen User</a></li>
                    <li class="<?php echo is_active(2, 'aktivitas'); ?>"><a
                            href="<?php echo base_url('admin/aktivitas'); ?>">Log Aktivitas</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>