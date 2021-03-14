<?php 
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$nilai_tugas = $_POST['nilai_tugas'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

function jumlah_nilai($tugas, $uts, $uas){
    $n_tugas = 0.35 * $tugas;
    $n_uts = 0.30 * $uts;
    $n_uas = 0.35 * $uas;
    $n_akhir = $n_tugas + $n_uts + $n_uas;
    
    return $n_akhir;
}

function kelulusan($nilai_akhir){
    if($nilai_akhir > 55){
        $lulus = 'Lulus';
    }
    else{
        $lulus = 'Tidak Lulus';
    }
    return $lulus;
}

function grade($nilai_grade){
    if($nilai_grade <= 35){
        $grade = "E";
    }
    elseif($nilai_grade > 35 && $nilai_grade <= 55){
        $grade = "D";
    }
    elseif($nilai_grade > 55 && $nilai_grade <= 69){
        $grade = "C";
    }
    elseif($nilai_grade > 69 && $nilai_grade <= 84){
        $grade = "B";
    }
    elseif($nilai_grade > 84 && $nilai_grade <= 100){
        $grade = "A";
    }
    else{
        $grade = "Tidak Ada";
    }
    return $grade;
}

function predikat($n_grade){
    if($n_grade == "A"){
        $pre = "Sangat Memuaskan";
    }
    elseif ($n_grade == "B") {
        $pre = "Memuaskan";
    }
    elseif ($n_grade == "C") {
        $pre = "Cukup";
    }
    elseif ($n_grade == "D") {
        $pre = "Kurang";
    }
    elseif ($n_grade == "E") {
        $pre = "Sangat Kurang";
    }
    else{
        $pre = "Tidak Ada";
    }
    return $pre;
}

if(!empty($proses)){
    $a = jumlah_nilai($nilai_tugas, $nilai_uts, $nilai_uas);
    $b = kelulusan($a);
    $c = grade($a);
    $d = predikat($c);
}
else{
    echo 'Masukkan Data';
}

$data1 = ['nim' => 1001, 'nama'=>'Fulan', 'matkul'=>'Basis Data', 'tugas'=>90, 'uts'=>88, 'uas'=>77, 'akhir'=>84, 'grade'=>"B", 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$data2 = ['nim' => 1002, 'nama'=>'Fulanah', 'matkul'=>'Web', 'tugas'=>80, 'uts'=>78, 'uas'=>57, 'akhir'=>84, 'grade'=>"B", 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$data3 = ['nim' => 1003, 'nama'=>'Siti', 'matkul'=>'Matematika', 'tugas'=>90, 'uts'=>88, 'uas'=>77, 'akhir'=>84, 'grade'=>"B", 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$data4 = ['nim' => 1004, 'nama'=>'Arya', 'matkul'=>'Sains', 'tugas'=>80, 'uts'=>78, 'uas'=>77, 'akhir'=>84, 'grade'=>"B", 'predikat'=>'Memuaskan', 'status'=>'Lulus'];
$data5 = ['nim' => $nim, 'nama'=>$nama, 'matkul'=>$matkul, 'tugas'=>$nilai_tugas, 'uts'=>$nilai_uts, 'uas'=>$nilai_uas, 'akhir'=>$a, 'grade'=>$c, 'predikat'=>$d, 'status'=>$b];
$array = [$data1, $data2, $data3, $data4, $data5];
include_once 'header.php';
require_once 'main.php';
include_once 'footer.php';
?>
    

