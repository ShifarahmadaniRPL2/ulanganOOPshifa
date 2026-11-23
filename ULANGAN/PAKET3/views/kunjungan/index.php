
<?php
function e($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan - KlinikShifa</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
          rel="stylesheet">

    <style>
        body {
            background-color: #f1f5f9;
            font-family: "Segoe UI", sans-serif;
            font-size: 14px;
            color: #334155;
        }

        /* NAVBAR */
        .navbar {
            background: linear-gradient(90deg, #0f3c68, #1265c8);
            min-height: 65px;
        }

        .navbar-brand {
            font-size: 21px;
            letter-spacing: 0.3px;
        }

        .nav-link {
            font-size: 13px;
            margin-right: 5px;
            border-radius: 7px;
            padding: 9px 12px !important;
            transition: 0.2s;
        }

        .nav-link:hover,
        .nav-link.active {
            background-color: rgba(255, 255, 255, 0.15);
            color: white !important;
        }

        /* CONTAINER */
        .container-fluid {
            padding-left: 25px;
            padding-right: 25px;
        }

        /* PAGE HEADER */
        .page-header {
            margin-bottom: 25px;
        }

        .page-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: #dbeafe;
            color: #1d4ed8;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }

        .page-header h3 {
            font-size: 23px;
            font-weight: 700;
            color: #17365d;
            margin-bottom: 5px;
        }

        .page-header p {
            color: #64748b;
            margin-bottom: 0;
        }

        /* BUTTON */
        .btn-tambah {
            background: linear-gradient(135deg, #2563eb, #0d6efd);
            color: white;
            border: none;
            border-radius: 9px;
            padding: 10px 17px;
            font-weight: 600;
            box-shadow: 0 4px 10px rgba(37, 99, 235, 0.18);
            transition: 0.2s;
        }

        .btn-tambah:hover {
            color: white;
            background: #1d4ed8;
            transform: translateY(-1px);
        }

        /* CARD */
        .card-kunjungan {
            border: none;
            border-radius: 15px;
            background: white;
            box-shadow: 0 3px 15px rgba(15, 23, 42, 0.06);
            overflow: hidden;
        }

        .card-header-custom {
            background: white;
            border-bottom: 1px solid #edf1f5;
            padding: 20px 22px;
        }

        .card-header-custom h5 {
            font-size: 16px;
            font-weight: 700;
            color: #17365d;
            margin-bottom: 4px;
        }

        .card-header-custom small {
            color: #94a3b8;
        }

        /* TABLE */
        .table-responsive {
            padding: 5px 18px 18px;
        }

        .table {
            margin-bottom: 0;
            border-collapse: separate;
            border-spacing: 0;
            min-width: 1150px;
        }

        .table thead th {
            background: #eff6ff;
            color: #1e40af;
            border-bottom: 1px solid #dbeafe;
            border-top: none;
            font-size: 12px;
            font-weight: 700;
            padding: 14px 12px;
            vertical-align: middle;
        }

        .table tbody td {
            padding: 13px 12px;
            vertical-align: middle;
            border-bottom: 1px solid #f1f5f9;
            color: #475569;
        }

        .table tbody tr {
            transition: background 0.2s;
        }

        .table tbody tr:hover {
            background-color: #f8fbff;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        /* NAMA PASIEN */
        .nama-pasien {
            font-weight: 600;
            color: #1e293b;
        }

        /* PEMBAYARAN */
        .nominal {
            font-weight: 600;
            color: #334155;
        }

        /* BADGE STATUS */
        .badge-status {
            display: inline-block;
            padding: 7px 11px;
            border-radius: 7px;
            font-size: 11px;
            font-weight: 600;
        }

        .status-lunas {
            background: #dcfce7;
            color: #15803d;
        }

        .status-belum {
            background: #fee2e2;
            color: #b91c1c;
        }

        .status-selesai {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .status-proses {
            background: #fef3c7;
            color: #b45309;
        }

        /* ACTION BUTTON */
        .btn-aksi {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin: 0 2px;
            border: none;
            transition: 0.2s;
        }

        .btn-detail {
            background: #e0f2fe;
            color: #0284c7;
        }

        .btn-detail:hover {
            background: #0284c7;
            color: white;
        }

        .btn-edit {
            background: #fef3c7;
            color: #d97706;
        }

        .btn-edit:hover {
            background: #f59e0b;
            color: white;
        }

        .btn-hapus {
            background: #fee2e2;
            color: #dc2626;
        }

        .btn-hapus:hover {
            background: #dc2626;
            color: white;
        }

        /* EMPTY DATA */
        .empty-data {
            padding: 45px 20px !important;
            text-align: center;
            color: #94a3b8 !important;
        }

        .empty-data i {
            font-size: 40px;
            display: block;
            margin-bottom: 10px;
            color: #cbd5e1;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .container-fluid {
                padding-left: 14px;
                padding-right: 14px;
            }

            .page-header h3 {
                font-size: 20px;
            }

            .page-icon {
                width: 43px;
                height: 43px;
                font-size: 20px;
            }

            .btn-tambah {
                padding: 9px 12px;
                font-size: 12px;
            }

            .card-header-custom {
                padding: 16px;
            }

            .table-responsive {
                padding: 5px 10px 12px;
            }
        }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold"
           href="index.php?module=pasien&action=index">
            <i class="bi bi-hospital me-1"></i>
            KlinikShifa
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav me-auto ms-lg-3">

                <li class="nav-item">
                    <a class="nav-link"
                       href="index.php?module=pasien&action=index">
                        <i class="bi bi-people-fill me-1"></i>
                        Data Pasien
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active"
                       href="index.php?module=kunjungan&action=index">
                        <i class="bi bi-clipboard2-pulse me-1"></i>
                        Data Kunjungan
                    </a>
                </li>

            </ul>

            <span class="navbar-text small">
                <i class="bi bi-grid-1x2-fill me-1"></i>
                Aplikasi KlinikShifa Paket 3
            </span>

        </div>
    </div>
</nav>

<!-- MAIN CONTENT -->
<div class="container-fluid py-4">

    <!-- PAGE HEADER -->
    <div class="page-header d-flex justify-content-between align-items-center flex-wrap gap-3">

        <div class="d-flex align-items-center gap-3">

            <div class="page-icon">
                <i class="bi bi-clipboard2-pulse"></i>
            </div>

            <div>
                <h3>Data Kunjungan</h3>
                <p>Kelola riwayat kunjungan dan pembayaran pasien</p>
            </div>

        </div>

        <a href="index.php?module=kunjungan&action=create"
           class="btn btn-tambah">
            <i class="bi bi-plus-circle me-1"></i>
            Tambah Kunjungan
        </a>

    </div>

    <!-- CARD TABLE -->
    <div class="card card-kunjungan">

        <!-- CARD HEADER -->
        <div class="card-header-custom d-flex justify-content-between align-items-center flex-wrap gap-2">

            <div>
                <h5>
                    <i class="bi bi-journal-medical me-2 text-primary"></i>
                    Riwayat Kunjungan
                </h5>
                <small>Informasi pemeriksaan, pembayaran, dan status kunjungan pasien</small>
            </div>

            <span class="badge rounded-pill text-bg-light border px-3 py-2">
                <i class="bi bi-database me-1 text-primary"></i>
                Data Kunjungan
            </span>

        </div>

        <!-- TABLE -->
        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>
                        <tr>
                            <th width="55">No.</th>
                            <th>Nama Pasien</th>
                            <th>Tanggal Kunjungan</th>
                            <th>Keluhan</th>
                            <th>Diagnosis</th>
                            <th>Total Kunjungan</th>
                            <th>Jumlah Bayar</th>
                            <th>Kembalian</th>
                            <th>Status Pembayaran</th>
                            <th>Status Kunjungan</th>
                            <th class="text-center" width="130">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php $no = 1; ?>

                        <?php while ($row = mysqli_fetch_assoc($dataKunjungan)) : ?>

                            <tr>

                                <td class="text-muted">
                                    <?= $no++; ?>
                                </td>

                                <td>
                                    <span class="nama-pasien">
                                        <?= e($row['namapasien']); ?>
                                    </span>
                                </td>

                                <td>
                                    <i class="bi bi-calendar3 text-primary me-1"></i>
                                    <?= e($row['tanggalkunjungan']); ?>
                                </td>

                                <td>
                                    <?= e($row['keluhan']); ?>
                                </td>

                                <td>
                                    <?= e($row['diagnosis']); ?>
                                </td>

                                <td>
                                    <span class="nominal">
                                        Rp <?= number_format((int) $row['totalkunjungan'], 0, ',', '.'); ?>
                                    </span>
                                </td>

                                <td>
                                    <span class="nominal">
                                        Rp <?= number_format((int) $row['jumlahbayar'], 0, ',', '.'); ?>
                                    </span>
                                </td>

                                <td>
                                    Rp <?= number_format((int) $row['kembalian'], 0, ',', '.'); ?>
                                </td>

                                <td>
                                    <?php if ($row['statuspembayaran'] === 'Lunas') : ?>
                                        <span class="badge-status status-lunas">
                                            <i class="bi bi-check-circle-fill me-1"></i>
                                            Lunas
                                        </span>
                                    <?php else : ?>
                                        <span class="badge-status status-belum">
                                            <i class="bi bi-exclamation-circle me-1"></i>
                                            Belum Bayar
                                        </span>
                                    <?php endif; ?>
                                </td>

                                <td>
                                    <?php if ($row['statuskunjungan'] === 'Selesai') : ?>
                                        <span class="badge-status status-selesai">
                                            <i class="bi bi-check2-all me-1"></i>
                                            Selesai
                                        </span>
                                    <?php else : ?>
                                        <span class="badge-status status-proses">
                                            <i class="bi bi-clock-history me-1"></i>
                                            Proses
                                        </span>
                                    <?php endif; ?>
                                </td>

                                <td class="text-center">

                                    <a href="index.php?module=kunjungan&action=show&id=<?= (int) $row['idkunjungan']; ?>"
                                       class="btn-aksi btn-detail"
                                       title="Detail kunjungan">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>

                                    <a href="index.php?module=kunjungan&action=edit&id=<?= (int) $row['idkunjungan']; ?>"
                                       class="btn-aksi btn-edit"
                                       title="Edit kunjungan">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <a href="index.php?module=kunjungan&action=delete&id=<?= (int) $row['idkunjungan']; ?>"
                                       class="btn-aksi btn-hapus"
                                       title="Hapus kunjungan"
                                       onclick="return confirm('Yakin ingin menghapus kunjungan ini?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>

                                </td>

                            </tr>

                        <?php endwhile; ?>

                        <?php if (mysqli_num_rows($dataKunjungan) === 0) : ?>

                            <tr>
                                <td colspan="11" class="empty-data">
                                    <i class="bi bi-clipboard-x"></i>
                                    <div class="fw-semibold">Belum ada data kunjungan</div>
                                    <small>Silakan tambahkan data kunjungan terlebih dahulu.</small>
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
