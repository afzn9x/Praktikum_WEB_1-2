<div class="kotak">
        <div class="container kotak1">
                <table class="table tabel">
                    <thead>
                        <tr>
                        <th>No</th><th>NIM</th><th>Nama</th><th>Matakuliah</th><th>Nilai Tugas</th><th>Nilai UTS</th>
                        <th>Nilai UAS</th><th>Nilai Akhir</th><th>Grade</th><th>Predikat</th><th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $nomor = 1;
                    foreach($array as $data){
                        echo '<tr><td>' .$nomor. '</td>';
                        echo '<td>' .$data['nim']. '</td>';
                        echo '<td>' .$data['nama']. '</td>';
                        echo '<td>' .$data['matkul']. '</td>';
                        echo '<td>' .$data['tugas']. '</td>';
                        echo '<td>' .$data['uts']. '</td>';
                        echo '<td>' .$data['uas']. '</td>';
                        echo '<td>' .$data['akhir']. '</td>';
                        echo '<td>' .$data['grade']. '</td>';
                        echo '<td>' .$data['predikat']. '</td>';
                        echo '<td>' .$data['status']. '</td>';
                        $nomor++;
                    }
                    ?>   
                    </tbody>
                </table>
        </div>
    </div>