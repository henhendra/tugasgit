
<?php
    include "koneksi.php";

    //menangkap data
    $nama_foto = $_FILES['foto']['name'];
    $lokasi_foto = $_FILES['foto']['tmp_name'];
    $tipe_foto = $_FILES['foto']['type'];
    move_uploaded_file($lokasi_foto,"images/$nama_foto");
	$foto_skhu = $_FILES['foto_skhu']['name'];
    $lokasi_foto = $_FILES['foto_skhu']['tmp_name'];
    $tipe_foto = $_FILES['foto_skhu']['type'];
    move_uploaded_file($lokasi_foto,"images/$foto_skhu");
    $a = date('Y-m-d-h-i-s');
            $krr = explode('-',$a);
            $nopen = implode("",$krr);
    $tgl = date('Y-m-d');
    $nisn = $_POST['nisn'];
    $nm = $_POST['nm_lengkap'];
    $tmpt = $_POST['tmpt_lahir'];
    $tgl_l = $_POST['tgl_lahir'];
    $jk = $_POST['jenis'];
    $agama = $_POST['agama'];
    $asl = $_POST['asl_sk'];
    $nmayh = $_POST['nm_ayah'];
    $nmibu = $_POST['nm_ibu'];
    $kerja = $_POST['kerja'];
    $bi = $_POST['bi'];
    $ipa = $_POST['ipa'];
    $mtk = $_POST['mtk'];
    $bhs = $_POST['bhs_inggris'];
    $almt = $_POST['almt_lkp'];
    $no_tlp = $_POST['no_tlp'];
    $id_register = $_POST['id_register'];
   


    //input datanya

    $daftar = mysqli_query($koneksi,"INSERT INTO `tbl_pendaftar`(`id_register`, `no_pendaftaran`, `tgl_daftar`, `NISN`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `asal_sekolah`, `nm_ayah`, `nm_ibu`, `pekerjaan`, `bahasa_indonesia`, `ipa`, `matematika`, `bahasa_inggris`, `pas_foto`, `foto_skhu`, `alamat`, `no_tlp`, `konfirmasi`)
                                                         VALUES ('$id_register','NP-$nopen','$tgl','$nisn','$nm','$tmpt','$tgl_l','$jk','$agama','$asl','$nmayh','$nmibu','$kerja','$bi','$ipa','$mtk','$bhs','$nama_foto','$foto_skhu','$almt','$no_tlp','-')");
    	
    if($daftar){
        echo "<script>alert('Data Udah Di Simpan');  </script>";
       echo "<script> location ='index.php?page=homeMember';</script>";
      
    }
    else{
        echo "<script>alert('Data Gagal Simpan');  </script>";
        echo "<script>location ='index.php?page=homeMember';</script>"; 
    }
  
    ?>


