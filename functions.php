<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = 'psm';

// Create connection
$conn = new mysqli($host, $user, $pass,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

function daftar_pelajar($data){
  global $conn;
  $staff_name=htmlspecialchars($data["nama"]);
  $staff_phone=htmlspecialchars($data["nomatrik"]);
  $staff_position=htmlspecialchars($data["email"]);
  $staff_address=htmlspecialchars($data["NoTelefon"]);
  $staff_email=htmlspecialchars($data["fakulti"]);

  $query="INSERT INTO pelajar(NoMatrik,NamaPelajar,Email,NoTelefon,Fakulti)
  VALUES
  ('$staff_name','$staff_phone','$staff_position','$staff_address','$staff_email')
  ";
  mysqli_query($conn,$query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function daftar_pengguna($data){
  global $conn;
  $staff_name=htmlspecialchars($data["nama"]);
  $staff_id=htmlspecialchars($data["Idstaff"]);
  $staff_katalaluan=htmlspecialchars($data["KataLaluan"]);
  $staff_email=htmlspecialchars($data["email"]);
  $staff_telefon=htmlspecialchars($data["NoTelefon"]);
  $staff_fakulti=htmlspecialchars($data["fakulti"]);

  $query="INSERT INTO pengguna(NamaPengguna,IDStaff,KataLaluan,Email,NoTelefon,Fakulti)
  VALUES
  ('$staff_name','$staff_id','$staff_katalaluan','$staff_email','$staff_telefon','$staff_fakulti')
  ";
  mysqli_query($conn,$query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function daftar_peperiksaan($data){
  global $conn;
  $staff_namapensyarah=htmlspecialchars($data["Namapensyarah"]);
  $staff_subjek=htmlspecialchars($data["Subjek"]);
  $staff_tempat=htmlspecialchars($data["Tempat"]);
  $staff_tarikh=htmlspecialchars($data["Tarikh"]);
  $staff_masa=htmlspecialchars($data["Masa"]);
  $staff_fakulti=htmlspecialchars($data["Bilanganpelajar"]);

  $query="INSERT INTO peperiksaan(namapensyarah,kodsubjek,tempat,tarikh,masa,bilanganpelajar)
  VALUES
  ('$staff_namapensyarah','$staff_subjek','$staff_subjek','$staff_tarikh','$staff_masa','$staff_fakulti')
  ";
  mysqli_query($conn,$query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

?>