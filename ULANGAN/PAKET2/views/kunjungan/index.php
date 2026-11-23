
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kunjungan - KlinikShifa</title>

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div class="container kunjungan-container">

    <div class="page-header">
        <div class="page-header-icon">
            <i class="fa-solid fa-file-medical"></i>
        </div>

        <div class="page-header-text">
            <h1>Data Kunjungan</h1>
            <p>Manajemen riwayat kunjungan pasien KlinikShifa</p>
        </div>
    </div>

    <div class="navigation">
        <a href="index.php?module=pasien">
            <i class="fa-solid fa-users"></i>
            Data Pasien
        </a>

        <a href="index.php?module=kunjungan" class="active">
            <i class="fa-solid fa-file-medical"></i>
            Data Kunjungan
        </a>
    </div>

    <div class="toolbar">

        <div class="toolbar-info">
            <h3>
                <i class="fa-solid fa-clipboard-list"></i>
                Daftar Kunjungan
            </h3>
            <span>Riwayat pemeriksaan dan pembayaran pasien</span>
        </div>

        <a href="index.php?module=kunjungan&action=create"
           class="btn btn-primary btn-tambah">
            <i class="fa-solid fa-plus"></i>
            Tambah Kunjungan
        </a>

    </div>

    <div class="table-card">

        <div class="table-header">
            <div>
                <h3>Informasi Kunjungan</h3>
                <p>Data pemeriksaan, diagnosis, biaya, dan status pasien</p>
            </div>

            <div class="table-header-icon">
                <i class="fa-solid fa-heart-pulse"></i>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="table-kunjungan">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th>Tanggal</th>
                        <th>Keluhan</th>
                        <th>Diagnosis</th>
                        <th>Total</th>
                        <th>Status Pembayaran</th>
                        <th>Status Kunjungan</th>
                        <th class="kolom-aksi">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>

                    <?php while ($row = $dataKunjungan->fetch_assoc()) : ?>
                    <tr>
                        <td class="nomor-tabel">
                            <?= $no++; ?>
                        </td>

                        <td class="nama-pasien">
                            <?= htmlspecialchars($row['namapasien'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                        </td>

                        <td>
                            <span class="tanggal-kunjungan">
                                <i class="fa-solid fa-calendar-days"></i>
                                <?= htmlspecialchars($row['tanggalkunjungan'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        </td>

                        <td class="kolom-keterangan">
                            <?= htmlspecialchars($row['keluhan'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                        </td>

                        <td class="kolom-keterangan">
                            <?= htmlspecialchars($row['diagnosis'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                        </td>

                        <td class="total-biaya">
                            Rp <?= number_format((int) ($row['totalkunjungan'] ?? 0), 0, ',', '.'); ?>
                        </td>

                        <td>
                            <?php if (($row['statuspembayaran'] ?? '') === 'Lunas') : ?>
                                <span class="badge-status status-lunas">
                                    <i class="fa-solid fa-circle-check"></i>
                                    Lunas
                                </span>
                            <?php else : ?>
                                <span class="badge-status status-belum">
                                    <i class="fa-solid fa-circle-exclamation"></i>
                                    <?= htmlspecialchars($row['statuspembayaran'] ?? 'Belum Bayar', ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endif; ?>
                        </td>

                        <td>
                            <?php if (($row['statuskunjungan'] ?? '') === 'Selesai') : ?>
                                <span class="badge-status status-selesai">
                                    <i class="fa-solid fa-check"></i>
                                    Selesai
                                </span>
                            <?php else : ?>
                                <span class="badge-status status-proses">
                                    <i class="fa-solid fa-clock"></i>
                                    <?= htmlspecialchars($row['statuskunjungan'] ?? 'Proses', ENT_QUOTES, 'UTF-8'); ?>
                                </span>
                            <?php endif; ?>
                        </td>

                        <td class="aksi">
                            <a href="index.php?module=kunjungan&action=show&id=<?= (int) $row['idkunjungan']; ?>"
                               class="btn btn-info"
                               title="Detail kunjungan">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="index.php?module=kunjungan&action=edit&id=<?= (int) $row['idkunjungan']; ?>"
                               class="btn btn-warning"
                               title="Edit kunjungan">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <a href="index.php?module=kunjungan&action=delete&id=<?= (int) $row['idkunjungan']; ?>"
                               class="btn btn-danger"
                               title="Hapus kunjungan"
                               onclick="return confirm('Yakin ingin menghapus kunjungan ini?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                    <?php if ($dataKunjungan->num_rows === 0) : ?>
                    <tr>
                        <td colspan="9" class="data-kosong">
                            <div class="empty-icon">
                                <i class="fa-solid fa-file-circle-xmark"></i>
                            </div>
                            <h4>Belum Ada Data Kunjungan</h4>
                            <p>Silakan tambahkan kunjungan terlebih dahulu.</p>
                        </td>
                    </tr>
                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>
