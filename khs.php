<?php
// ============================================================
// KARTU HASIL STUDI - Replika 1:1 dari source HTML asli PPNS
// ============================================================

// ---- DATA MAHASISWA ----
$mahasiswa = [
    'nama'           => 'Maheswara Adiyatma Putra',
    'nrp'            => '0724040048',
    'tingkat'        => '1',
    'tahun_ajaran'   => '2024/2025',
    'semester_kelas' => '1 / B',
    'jurusan'        => 'Teknik Bangunan Kapal',
    'program_studi'  => 'D4 - TEKNIK PENGELASAN',
];

// ---- DATA MATA KULIAH ----
$mata_kuliah = [
    ['no'=>1, 'kode'=>'KK46010', 'nama'=>'Dasar-dasar K3',               'sks'=>2, 'nilai'=>'C+', 'n_sks'=>'5.00'],
    ['no'=>2, 'kode'=>'KK46020', 'nama'=>'Pengantar Teknologi Kelautan',  'sks'=>2, 'nilai'=>'B',  'n_sks'=>'6.00'],
    ['no'=>3, 'kode'=>'KK46060', 'nama'=>'Matematika Dasar',              'sks'=>4, 'nilai'=>'C',  'n_sks'=>'8.00'],
    ['no'=>4, 'kode'=>'KU45010', 'nama'=>'Agama',                         'sks'=>2, 'nilai'=>'B+', 'n_sks'=>'6.50'],
    ['no'=>5, 'kode'=>'NS47020', 'nama'=>'Kimia',                         'sks'=>2, 'nilai'=>'B',  'n_sks'=>'6.00'],
    ['no'=>6, 'kode'=>'WE48010', 'nama'=>'Fabrikasi Dasar',               'sks'=>4, 'nilai'=>'A-', 'n_sks'=>'14.00'],
    ['no'=>7, 'kode'=>'WE48020', 'nama'=>'Gambar Teknik ',                'sks'=>4, 'nilai'=>'A-', 'n_sks'=>'14.00'],
    ['no'=>4, 'kode'=>'KU45020', 'nama'=>'Pancasila',                     'sks'=>2, 'nilai'=>'B',  'n_sks'=>'6.00'],
];

// ---- HITUNG TOTAL & IPS ----
$total_sks  = array_sum(array_column($mata_kuliah, 'sks'));
$total_nsks = array_sum(array_column($mata_kuliah, 'n_sks'));
$ips        = ($total_sks > 0) ? number_format($total_nsks / $total_sks, 2) : '0.00';
$total_nsks_fmt = $total_nsks; // asli: 59.5

$logo_url = 'http://sim.ppns.ac.id/index.php/plugin.json?plugin=db_file&id=institution_logo/__e5564a2e7f8d9d7a6587aa2b4eabb0d36b57a27b.jpg';
?>
<html>
<head>
    <link href="https://sim.ppns.ac.id//assets/js/ext/resources/css/ext-all-gray.css" rel="stylesheet" type="text/css" />
    <link href="https://sim.ppns.ac.id//assets/css/ppns/report-print.css" rel="stylesheet" type="text/css" />
    <title>student.ppns.ac.id/?q=/academic/score/khs/1</title>
    <style>
        @media print { .no-print { display: none !important; } }
    </style>
</head>
<body>

<div class="report-class"><div style="width:21cm;"><table style="width: 21cm; margin: auto;">
    <tbody>
        <tr>
            <td>
                <table style="width: 100%; margin-bottom: 0.25cm;">
                    <tbody>
                        <tr>
                            <td style="width: 1px; padding: 10px;"><img src="<?= htmlspecialchars($logo_url) ?>" height="98" alt="Logo PPNS" onerror="this.style.display='none'"></td>
                            <td>
                                <div style="font-family: Trebuchet; font-size: 12pt;">KEMENTERIAN PENDIDIKAN TINGGI, SAINS, DAN TEKNOLOGI</div>
                                <div style="font-family: Trebuchet; font-size: 12pt; font-weight: bold;">POLITEKNIK PERKAPALAN NEGERI SURABAYA</div>
                                <div style="float:right;position: relative;right: 25px;top: 50px;font-size: 10px;margin-top: -80px;">F.BAKPSI.056<br>01/23 Agustus 2013</div>
                                <div style="font-family: Trebuchet; font-size: 10pt;">Jl. Teknik Kimia, Kampus ITS Sukolilo<br>Telp. (031) 5947186, 5942887 Fax. (031) 5942887<br>Laman: www.ppns.ac.id</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%; margin: 1cm 0px 0.75cm;">
                    <tbody>
                        <tr>
                            <td style="font-family: Trebuchet; font-size: 14pt; font-weight: bold; text-align: center;">KARTU HASIL STUDI</td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%; margin: 0px 0px 0.5cm;">
                    <tbody>
                        <tr>
                            <td style="width: 40%; padding: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 2.75cm; font-size: 11pt; vertical-align: top;">NAMA</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['nama']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="width: 55%; margin: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 4cm; font-size: 11pt; vertical-align: top;">TAHUN AJARAN</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['tahun_ajaran']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 2.75cm; font-size: 11pt; vertical-align: top;">NRP</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['nrp']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="margin: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 4cm; font-size: 11pt; vertical-align: top;">SEMESTER / KELAS</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['semester_kelas']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 2.75cm; font-size: 11pt; vertical-align: top;">TINGKAT</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['tingkat']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="margin: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 4cm; font-size: 11pt; vertical-align: top;">JURUSAN</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['jurusan']) ?>&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0px 2px;"><br></td>
                            <td style="margin: 0px 2px; vertical-align: top;">
                                <table style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td style="font-family: Trebuchet; width: 4cm; font-size: 11pt; vertical-align: top;">PROGRAM STUDI</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;" width="1px">:&nbsp;</td>
                                            <td style="font-family: Trebuchet; font-size: 11pt; vertical-align: top;"><?= htmlspecialchars($mahasiswa['program_studi']) ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                        
                        
                       
                        
                        
                        
                        
                        
                         
                        <table class="academic-score-grid" style="width: 97%; margin: 0cm 0cm 0.25cm;">
                    <tbody>
                        <tr>
                            <td style="border: 1px solid; padding: 3px; width: 1cm; text-align: center; font-size: 11pt; font-weight: bold;">NO</td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-weight: bold; font-size: 11pt; width: 2.5cm;">KODE</td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-weight: bold; font-size: 11pt;">MATA KULIAH</td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-weight: bold; font-size: 11pt; width: 1.5cm;">SKS</td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-weight: bold; font-size: 11pt; width: 1.5cm;">NILAI</td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-weight: bold; font-size: 11pt; width: 1.5cm;">N*SKS</td>
                        </tr>
                        <?php foreach ($mata_kuliah as $mk): ?>
                        <tr>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-size: 11pt;"><?= $mk['no'] ?></td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-size: 11pt;"><?= htmlspecialchars($mk['kode']) ?></td>
                            <td style="border: 1px solid; padding: 3px; font-size: 11pt;"><?= htmlspecialchars($mk['nama']) ?></td>
                            <td style="border: 1px solid; padding: 0px; text-align: center; font-size: 11pt;"><?= $mk['sks'] ?></td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-size: 11pt;"><?= htmlspecialchars($mk['nilai']) ?></td>
                            <td style="border: 1px solid; padding: 3px; text-align: center; font-size: 11pt;"><?= $mk['n_sks'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td style="border: 1px solid;"><br></td>
                            <td style="border: 1px solid;"><br></td>
                            <td style="border: 1px solid; text-align: center; font-size: 11pt;">JUMLAH</td>
                            <td style="border: 1px solid; padding: 0px; text-align: center; font-size: 11pt;"><?= $total_sks ?></td>
                            <td style="border: 1px solid;"><br></td>
                            <td style="border: 1px solid; padding: 2px; text-align: center; font-size: 11pt;"><?= $total_nsks_fmt ?></td>
                        </tr>
                        <tr>
                            <td colspan="6" style="padding-top: 0.5cm; text-align: center; font-size: 11pt; font-family: Trebuchet;">Indeks Prestasi Semester (IPS) : <?= $ips ?> </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table style="width: 100%; margin-top: 1cm;">
                    <tbody>
                        <tr>
                            <td style="font-family: Trebuchet; font-size: 11pt; color:blue">
                                Dokumen ini merupakan hasil cetak dari SIM Akademik Politeknik Perkapalan Negeri Surabaya 
                                <br>
                                Kebenaran data yang tertulis didalamnya harus mendapatkan pengesahan dari Kepala Bagian Akademik dan Kemahasiswaan </td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table></div></div>

</body>
</html>