<!DOCTYPE html>
<html lang="en">
<head>
        /* Sembunyikan tabel saat halaman pertama kali dimuat */
        #example {
            display: none; /* Sembunyikan tabel */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DataTables Example</h1>
        <!-- Tambahkan tombol Belajar -->
        <button id="belajarBtn" class="btn btn-primary">Belajar</button>
        <!-- Tabel DataTables -->
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Tiger Nixon</td><td>System Architect</td><td>Edinburgh</td><td>61</td><td>2011-04-25</td><td>$320,800</td></tr>
                <tr><td>Garrett Winters</td><td>Accountant</td><td>Tokyo</td><td>63</td><td>2011-07-25</td><td>$170,750</td></tr>
                <!-- Tambahkan data lainnya sesuai kebutuhan -->
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable
            var table = $('#example').DataTable();

            // Tampilkan tabel saat tombol "Belajar" ditekan
            $('#belajarBtn').on('click', function() {
                $('#example').toggle(); // Menampilkan atau menyembunyikan tabel
                if ($('#example').is(':visible')) {
                    // Jika tabel ditampilkan, ubah teks tombol
                    $(this).text('Sembunyikan Tabel');
                } else {
                    // Jika tabel disembunyikan, ubah teks tombol kembali
                    $(this).text('Belajar');
                }
            });
        });
    </script>
</body>
</html>
