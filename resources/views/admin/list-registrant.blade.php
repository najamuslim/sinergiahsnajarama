<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Kelas</th>
                <th scope="col">NISN</th>
                <th scope="col">Sekolah Sebelumnya</th>
                <th scope="col">Alasan Homeschooling</th>
                <th scope="col">Nomor HP</th>
                <th scope="col">tanggal pendaftaran</th>
            </tr>
        </thead>


        @foreach($registrants as $index => $registrant)
            <tr>
                <td>{{ $registrants->firstItem() + $index }}</td>
                <td>{{ $registrant->nama_lengkap }}</td>
                <td>{{ $registrant->kelas }}</td>
                <td>{{ $registrant->nisn }}</td>
                <td>{{ $registrant->sekolah_sebelumnya }}</td>
                <td>{{ $registrant->alasan_homeschooling }}</td>
                <td>{{ $registrant->no_hp }}</td>
                <td>{{ $registrant->created_at }}</td>
            </tr>
        @endforeach
    </table>
    {{ $registrants->links() }}

</div>