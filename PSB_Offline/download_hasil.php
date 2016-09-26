<?php
	include("library.php");
	session_start();
	if(($_SESSION['login_member']==true)&& 
	   ($_SESSION['username']!="")){
						include "inc/inc.db.php";
						include "inc/lib_func.php";
						$link=koneksi_db();
						$sql = "select * from registrasi order by id_daftar asc";
						$res = mysql_query($sql);
								$banyakrecord=mysql_num_rows($res);
								if($banyakrecord>0)
								{
						
									
		$id = $_REQUEST['id'];		
 
define('FPDF_FONTPATH','pdf/font/');
 
require('pdf/fpdf.php');
 
   $pdf=new FPDF('P','cm','A5');
 
   $pdf->Open();
 
   $pdf->AddPage();
  
   $pdf->Image('gambar/50268_51568206748_6483739_n.jpg',1.5,1.5,1.75,1.75);
    
   $pdf->SetFont('Arial','B',12);
   $pdf->Cell(14,1.5,'Formulir Registrasi Ulang Siswa Baru',0,0,'C');
   $pdf->Ln(1);
   $pdf->SetFont('Arial','B',10);
   $pdf->Cell(14,1,'SMA Kartika Siliwangi 1',0,0,'C');
   $pdf->Ln(1);
   $pdf->SetFont('Arial','B',6);
   $pdf->Cell(14,0.5,'Jl. Taman Pramuka No. 163 Telp. (022) 7205802 Bandung 40114',0,0,'C');
   $pdf->Ln(0.5);
   $pdf->SetFont('Arial','B',6);
   $pdf->Line(1, 4, 14, 4);
   $pdf->Ln(1); 

$select = "select * from registrasi where id_daftar = '$id'";
			$select_query = mysql_query($select);			
			while($select_result = mysql_fetch_array($select_query))
				{
       $id = $select_result['id_daftar'] ;
	   
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'No. Registrasi                :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['id_daftar'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Nama Siswa                :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['nama_pendaftar'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Tempat Tanggal Lahir          :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['ttl'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Jenis Kelamin                        :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['jns_kelamin'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Sekolah Asal                          :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['sekolah_asal'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Tahun Lulus                           :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['tahun_lulus'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Alamat                                    :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['alamat'],0,0,'L');
	   $pdf->Ln(1.00); 
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'No. Telp/HP                            :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['telp'],0,0,'L');
	   $pdf->Ln(1.00);
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Administrasi Keuangan        :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['uang_masuk'],0,0,'L');
	   $pdf->Ln(1.00);
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(4,0.5,'Petugas                                  :',0,0,'L');
	   $pdf->Cell(4,0.5,$select_result['petugas'],0,0,'L');
	   $pdf->Ln(3.5);
	   $pdf->SetFont('Arial','B',8);
	   $pdf->Cell(13,0.5,$select_result['nama_pendaftar'],0,0,'R');
	   
	}
   $pdf->Output();
						
								}
							
	}
	else
	{
		header("Location: belum_login.php");
	}
?>