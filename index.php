<?php
session_start();

$page = $_GET['page'] ?? 'login';
if ($page == 'logout') {
    session_destroy();
    header("Location: ?page=login");
    exit;
}
else if (isset($_POST['username']) && isset($_POST['password'])) {
    // login sederhana (hardcode dulu)
    if ($_POST['username'] == '0724040048' && $_POST['password'] == '12345678') {
        $_SESSION['login'] = true;
        header("Location: ?page=dashboard");
        exit;
    } 
}
else if (!isset($_SESSION['login']) && $page != 'login') {
    header("Location: ?page=login");
    exit;
}
$allowed = [
    'dashboard',
    'akademik',
    'asuransi',
    'beasiswa',
    'daftarulang',
    'formulir',
    'informasi',
    'kontak',
    'login',
    'pengajuan',

    // akademik
    'absensi',
    'bebaspinjam',
    'jadwal',
    'kalender',
    'kemahasiswaan',
    'materi',
    'ojt',
    'pendaftaran',
    'penilaian',
    'tugasakhir',
    'ujian',
    'wisudawan',

    // pengajuan
    'prosedur',
    'suratbaru'
];

if (!in_array($page, $allowed)) {
    echo "404 - Page not found";
    exit;
}

// mapping file
$map = [
    // utama
    'dashboard' => 'dashboard.html',
    'akademik' => 'akademik.html',
    'pengajuan' => 'pengajuan.html',
    'informasi' => 'informasi.html',
    'asuransi' => 'asuransi.html',
    'beasiswa' => 'beasiswa.html',
    'daftarulang' => 'daftarulang.html',
    'formulir' => 'formulir.html',
    'kontak' => 'kontak.html',
    'login' => 'login.html',
    'logout' => 'logout.html',

    // akademik folder
    'absensi' => 'akademik/absensi.html',
    'bebaspinjam' => 'akademik/bebaspinjam.html',
    'jadwal' => 'akademik/jadwal.html',
    'kalender' => 'akademik/kalender.html',
    'kemahasiswaan' => 'akademik/kemahasiswaan.html',
    'materi' => 'akademik/materi.html',
    'ojt' => 'akademik/ojt.html',
    'pendaftaran' => 'akademik/pendaftaran.html',
    'penilaian' => 'akademik/penilaian.html',
    'tugasakhir' => 'akademik/tugasakhir.html',
    'ujian' => 'akademik/ujian.html',
    'wisudawan' => 'akademik/wisudawan.html',

    // pengajuan folder
    'prosedur' => 'pengajuan/prosedur.html',
    'suratbaru' => 'pengajuan/suratbaru.html'
    
];
if ($page == 'logout') {
    session_destroy();
    header("Location: ?page=logout");
    exit;
}
else if (!isset($_SESSION['login']) && $page != 'login') {
    header("Location: ?page=login");
    exit;
}

include $map[$page];
?>