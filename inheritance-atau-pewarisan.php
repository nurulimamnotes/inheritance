<?php
/*
* Pewarisan
*/
class Mahasiswa
{
  public $nim;
  private $nama;
  protected $nilai;

  function __construct($nim, $nama, $nilai)
  {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->nilai = $nilai;
  }

  public function NamaMhs()
  {
    return $this->nama;
  }

  protected function StatusNilai()
  {
    if ($this->nilai >= 60) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }
}

class MataKuliah extends Mahasiswa
{
  public $matakuliah;
  public $dosen;
  public $status;

  public function Matkul($matkul, $dosen)
  {
    $this->matakuliah = $matkul;
    $this->dosen      = $dosen;
  }

  // Mengambil property dari class turunan
  public function NilaiMhs()
  {
    return $this->nilai;
  }
  public function Grade()
  {
    if ($this->nilai >= 90) {
      $grade = "A";
    } elseif ($this->nilai >= 80) {
      $grade = "B";
    } elseif ($this->nilai >= 60) {
      $grade = "C";
    } elseif ($this->nilai >= 50) {
      $grade = "D";
    } else {
      $grade = "E";
    }
    return $grade;
  }

  // Mengambil method dari class turunan
  public function StatusNilaiMhs()
  {
    $this->status = $this->StatusNilai();
    return $this->status;
  }
}

$data = new MataKuliah(11212262, 'Nurul Imam', 90);
$data->Matkul("Pemrograman PHP", "Agus Irawan");
echo "NIM : ".$data->nim."<br />";
echo "Nama : ".$data->NamaMhs()."<br />";
echo "Mata Kuliah : ".$data->matakuliah."<br />";
echo "Dosen : ".$data->dosen."<br />";
echo "Nilai : ".$data->NilaiMhs()."<br />";
echo "Grade : ".$data->Grade()."<br />";
echo "Status : ".$data->StatusNilaiMhs()."<br />";
?>