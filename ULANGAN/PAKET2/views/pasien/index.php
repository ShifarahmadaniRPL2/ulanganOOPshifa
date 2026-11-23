
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien - KlinikShifa</title>

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>

<div class="container pasien-container">

    <div class="page-header">
        <div class="page-header-icon">
            <i class="fa-solid fa-hospital-user"></i>
        </div>

        <div class="page-header-text">
            <h1>Data Pasien</h1>
            <p>Manajemen dan informasi data pasien KlinikShifa</p>
        </div>
    </div>

    <div class="navigation">
        <a href="index.php?module=pasien" class="active">
            <i class="fa-solid fa-users"></i>
            Data Pasien
        </a>

        <a href="index.php?module=kunjungan">
            <i class="fa-solid fa-file-medical"></i>
            Data Kunjungan
        </a>
    </div>

    <div class="toolbar">

        <div class="toolbar-info">
            <h3>
                <i class="fa-solid fa-users"></i>
                Daftar Pasien
            </h3>
            <span>Data pasien yang terdaftar di KlinikShifa</span>
        </div>

        <a href="index.php?module=pasien&action=create"
           class="btn btn-primary btn-tambah">
            <i class="fa-solid fa-plus"></i>
            Tambah Pasien
        </a>

    </div>

    <div class="table-card">

        <div class="table-header">
            <div>
                <h3>Informasi Pasien</h3>
                <p>Daftar lengkap pasien KlinikShifa</p>
            </div>

            <div class="table-header-icon">
                <i class="fa-solid fa-database"></i>
            </div>
        </div>

        <div class="table-wrapper">
            <table class="table-pasien">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama Pasien</th>
                        <th>Username</th>
                        <th>Usia</th>
                        <th>Jenis Kelamin</th>
                        <th>No. HP</th>
                        <th class="kolom-aksi">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1; ?>

                    <?php while ($row = $dataPasien->fetch_assoc()) : ?>
                    <tr>
                        <td class="nomor-tabel"><?= $no++; ?></td>

                        <td>
                            <img
                                src="assets/images/pasien/<?= htmlspecialchars($row['foto'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                class="foto-tabel"
                                alt="Foto pasien"
                                onerror="this.style.display='none'"
                            >
                        </td>

                        <td class="nama-pasien">
                            <?= htmlspecialchars($row['namapasien'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                        </td>

                        <td>
                            <span class="username-pasien">
                                <?= htmlspecialchars($row['username'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        </td>

                        <td>
                            <span class="badge-usia">
                                <?= htmlspecialchars($row['usia'] ?? '', ENT_QUOTES, 'UTF-8'); ?> tahun
                            </span>
                        </td>

                        <td>
                            <?= htmlspecialchars($row['jeniskelamin'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                        </td>

                        <td>
                            <span class="nomor-hp">
                                <i class="fa-solid fa-phone"></i>
                                <?= htmlspecialchars($row['nohp'] ?? '', ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        </td>

                        <td class="aksi">
                            <a href="index.php?module=pasien&action=show&id=<?= (int) $row['idpasien']; ?>"
                               class="btn btn-info"
                               title="Detail pasien">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="index.php?module=pasien&action=edit&id=<?= (int) $row['idpasien']; ?>"
                               class="btn btn-warning"
                               title="Edit pasien">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <a href="index.php?module=pasien&action=delete&id=<?= (int) $row['idpasien']; ?>"
                               class="btn btn-danger"
                               title="Hapus pasien"
                               onclick="return confirm('Yakin ingin menghapus pasien ini?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>

                    <?php if ($dataPasien->num_rows === 0) : ?>
                    <tr>
                        <td colspan="8" class="data-kosong">
                            <div class="empty-icon">
                                <i class="fa-solid fa-user-sl"></i>
                            </div>
                            <h4>Belum Ada Data Pasien</h4>
                            <p>Silakan tambahkan data pasien terlebih dahulu.</p>
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
