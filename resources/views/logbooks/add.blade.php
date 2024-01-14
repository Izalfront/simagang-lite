<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Logbook</title>
    <link rel="stylesheet" href="{{ asset('style/addlogbooks.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="head-section">
                    <h1 class="head__title">Tambah Logbook</h1>
                    <div class="btn__submit">
                        <a href="#" class="btn" style="margin-left: 1rem;">Tambah</a>
                        <a href="#" class="btn-pdf btn">Kembali</a>
                    </div>
                    <div>
                        <!-- section tambah logbook start -->
                        <form method="post" class="convert__input">
                            <table>

                                <tr class="input__group">
                                    <td>
                                        <h5>kegiatan magang</h5>
                                    </td>
                                    <td>
                                        <input class="input__data" type="text" name="kegiatan" id="kegiatan" placeholder="kegiatan..." required>
                                    </td>
                                </tr>
                                <tr class="input__group">
                                    <td>
                                        <h5>kategori magang</h5>
                                    </td>
                                    <td>
                                        <input class="input__data" type="text" name="kategori" id="kategori" placeholder="kategori..." required>
                                    </td>
                                </tr>
                                <tr class="input__group">
                                    <td>
                                        <h5>target magang</h5>
                                    </td>
                                    <td>
                                        <input class="input__data" type="text" name="target" id="target" placeholder="target..." required>
                                    </td>
                                </tr>
                                <tr class="input__group">
                                    <td>
                                        <h5>ruangan magang</h5>
                                    </td>
                                    <td>
                                        <input class="input__data" type="text" name="ruangan" id="ruangan" placeholder="ruangan..." required>
                                    </td>
                                </tr>
                                <tr class="input__group">
                                    <td>
                                        <h5>tanggal magang</h5>
                                    </td>
                                    <td>
                                        <input class="input__data" type="date" name="tanggal" id="tanggal" placeholder="tanggal..." required>
                                    </td>
                                </tr>
                                <tr class="input__group">
                                    <td>
                                        <h5>dokumentasi magang</h5>
                                    </td>
                                    <td>
                                        <input class="input__data" type="file" name="dokumentasi" id="dokumentasi" placeholder="dokumentasi..." required>
                                    </td>
                                </tr>
                            </table>

                        </form>
                        <!-- section tambah logbook end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>