<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logbook</title>
    <link rel="stylesheet" href="{{ asset('style/logbooks.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <section>
        <div class="card">
            <div class="card-body">
                <div class="head-section">
                    <div>
                        <a href="/add-logbook" class=" primary__btn">Tambah</a>
                        <!-- section convert file pdf, word, excel start -->
                        <div class="convert">
                            <div>
                                <a href="#" class="btn btn-pdf">PDF</a>
                            </div>
                            <div>
                                <a href="#" class="btn btn-word">WORD</a>
                            </div>
                            <div>
                                <a href="#" class="btn btn-excel">EXCEL</a>
                            </div>
                        </div>
                        <!-- section convert file pdf, word, excel end -->
                    </div>
                    <!-- search start -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
                        <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-search-11" viewBox="0 0 40 40">
                            <path d="M15.553 31.106c8.59 0 15.553-6.963 15.553-15.553S24.143 0 15.553 0 0 6.963 0 15.553s6.963 15.553 15.553 15.553zm0-3.888c6.443 0 11.665-5.222 11.665-11.665 0-6.442-5.222-11.665-11.665-11.665-6.442 0-11.665 5.223-11.665 11.665 0 6.443 5.223 11.665 11.665 11.665zM27.76 31.06c-.78-.78-.778-2.05.004-2.833l.463-.463c.783-.783 2.057-.78 2.834-.003l8.168 8.17c.782.78.78 2.05-.003 2.832l-.463.463c-.783.783-2.057.78-2.833.003l-8.17-8.167z" fill-rule="evenodd" />
                        </symbol>
                        <symbol xmlns="http://www.w3.org/2000/svg" id="sbx-icon-clear-5" viewBox="0 0 20 20">
                            <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10zm1.35-10.123l3.567 3.568-1.225 1.226-3.57-3.568-3.567 3.57-1.226-1.227 3.568-3.568-3.57-3.57 1.227-1.224 3.568 3.568 3.57-3.567 1.224 1.225-3.568 3.57zM10 18.272c4.568 0 8.272-3.704 8.272-8.272S14.568 1.728 10 1.728 1.728 5.432 1.728 10 5.432 18.272 10 18.272z" fill-rule="evenodd" />
                        </symbol>
                    </svg>

                    <form novalidate="novalidate" onsubmit="return false;" class="searchbox sbx-custom">
                        <div role="search" class="sbx-custom__wrapper">
                            <input type="search" name="search" placeholder="Cari kata kunci" autocomplete="off" required="required" class="sbx-custom__input">
                            <button type="submit" title="Submit your search query." class="sbx-custom__submit">
                                <svg role="img" aria-label="Search">
                                    <use xlink:href="#sbx-icon-search-11"></use>
                                </svg>
                            </button>
                            <button type="reset" title="Clear the search query." class="sbx-custom__reset">
                                <svg role="img" aria-label="Reset">
                                    <use xlink:href="#sbx-icon-clear-5"></use>
                                </svg>
                            </button>
                        </div>
                    </form>
                    <script type="text/javascript">
                        document.querySelector('.searchbox [type="reset"]').addEventListener('click', function() {
                            this.parentNode.querySelector('input').focus();
                        });
                    </script>
                    <!-- search end -->
                </div>
                <!-- ======== section table start ========== -->
                <div class="tabel-center">
                    <table contenteditable="" style="--tableWidth: 420px;">
                        <caption>
                            logbook magang</caption>
                        <thead style="--headerFontSize: 12px; --headerFontColor: #ffffff; --headerFontBGColor: #4c5caf;">
                            <tr style="--rowsBorderWidth: 2px; --rowsBorderColor: #d4d4d4;">
                                <th>no</th>
                                <th>tanggal</th>

                                <th>kegiatan</th>
                                <th>kategori</th>
                                <th>target</th>
                                <th>ruangan</th>
                                <th>dokumentasi</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody style="--bodyTextAlign: left;">



                            <tr style="--rowsBorderColor: #d4d4d4; --oddRowsBGColor: #ffffff; --oddRowsColor: #000000;">
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">1</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">03-09-2024</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">3</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">4</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">5</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">6</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);">7</td>
                                <td style="border: var(--rowsBorderWidth) solid var(--rowsBorderColor);"><a href="#" class="btn btn-hapus">hapus</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ======== section table end ========== -->
                <!-- ======== pagination start =========== -->
                <div class="pagination">
                    <a href="#" title="first page">First</a>
                    <a href="#" title="previous page"><svg fill="currentColor">
                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
                        </svg></a>
                    <a href="#">1</a>
                    <a href="#" class="page-active">2</a>
                    <a href="#">3</a>
                    <span class="page-dots">...</span>
                    <a href="#">6</a>
                    <a href="#" title="next page"><svg fill="currentColor">
                            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
                        </svg></a>
                    <a href="#" title="last page">Last</a>
                </div>
                <!-- ======== pagination end =========== -->
            </div>
        </div>
    </section>

</body>

</html>