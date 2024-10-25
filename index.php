<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses belajar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>"PERPUSTAKAAN PINTAR MEMBACA"</h1>
        <h3>Pendaftaran Anggota Secara Online</h3>
        <h5>Jl. Sejahtera no.11 Bekasi Tenggara</h5>
        <h5>Muhammad fauzi punya</h5>
        <hr color="green">
        <form action="proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" size="30">
            </div>
            <div class="form-group">
                <label for="tempatlahir">Tempat Lahir:</label>
                <input type="text" id="tempatlahir" name="tempatlahir" size="20">
            </div>
            <div class="form-group">
                <label for="tgllahir">Tanggal Lahir:</label>
                <div style="display: flex; gap: 5px;">
                    <!-- Perulangan While untuk Tanggal -->
                    <select name="tgllahir" size="2">
                        <option value="2" disabled selected>Pilih Tanggal</option> <!-- Placeholder untuk tanggal -->
                        <?php
                        $tgl = 1;
                        while ($tgl <= 31) {
                            echo "<option value='$tgl'>$tgl</option>";
                            $tgl++;
                        }
                        ?>
                    </select>
                    <!-- Perulangan For untuk Bulan -->
                    <select name="bulanlahir" size="2">
                        <option value="2" disabled selected>Pilih Bulan</option>
                        <?php
                        $bulan = [
                            1 => "Januari",
                            "Februari",
                            "Maret",
                            "April",
                            "Mei",
                            "Juni",
                            "Juli",
                            "Agustus",
                            "September",
                            "Oktober",
                            "November",
                            "Desember"
                        ];
                        for ($i = 1; $i <= 12; $i++) {
                            echo "<option value='$i'>{$bulan[$i]}</option>";
                        }
                        ?>
                    </select>
                    <!-- Perulangan Do-while untuk Tahun -->
                    <select name="tahunlahir" size="2">
                        <option value="2" disabled selected>Pilih Tahun</option>
                        <?php
                        $tahun = 1900;
                        $tahun_sekarang = date("Y");
                        do {
                            echo "<option value='$tahun'>$tahun</option>";
                            $tahun++;
                        } while ($tahun <= $tahun_sekarang);
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" rows="3" cols="35"></textarea>
            </div>

            <div class="form-group">
                <label for="telp">No. Telp:</label>
                <input type="text" id="telp" name="telp" size="15" maxlength="15">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <div class="gender-group">
                    <label><input type="radio" name="jk" value="L"> Laki-laki</label>
                    <label><input type="radio" name="jk" value="P"> Perempuan</label>
                </div>
            </div>

            <div class="buttons">
                <input type="submit" value="KIRIM">
                <input type="reset" value="BERSIH">
            </div>
            <hr color="red">
            <marquee direction="right">
                <i> Pendaftaran Anggota Perpustakaan secara Online ---</i>
            </marquee>
        </form>
    </div>
</body>

</html>