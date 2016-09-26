$(document).ready(function(){
	$(".tampil_info").hide();
	$(".info_email").hide();
});

function aksi_daftar(){
	
	var cek = cek_kosong();
	
	var email = $(".input_email").val();
	
	if(cek_kosong()==1){
		$(".tampil_info").html("Maaf, data harus diisi semua.");
		$(".tampil_info").fadeIn();
	}else if(cek_email(email)==1){
		$(".tampil_info").html("Maaf, email anda tidak valid.");
		$(".tampil_info").fadeIn();
	}else{
		var username 	= $(".input_username").val();
		var password 	= $(".input_password").val();
		var nama 	= $(".input_nama").val();
		var email 	= $(".input_email").val();
		var telp 	= $(".input_telp").val();
		var input_data = "username="+username+"&password="+password+"&nama="+nama+"&email="+email+"&telp="+telp;
		
		//alert(username+' - '+email+' - '+password);
		
		$.ajax({
			url:"daftar_operator.php",
			type:"POST",
			data:input_data,
			success:function(data){
				$(".tampil_info").html(data);
				$(".tampil_info").fadeIn(data);
				//alert('ada');
			}
		});
	}
	
	return false;
}

function cek_kosong(){
	var cek;
	$(function(){
		
		data_username = $(".input_username").val().length;
		data_password = $(".input_password").val().length;
		data_nama = $(".input_nama").val().length;
		data_email = $(".input_email").val().length;
		data_telp = $(".input_telp").val().length;
		
		if((data_username<1) || (data_password<1) || (data_nama<1) || (data_email)<1 || (data_telp<1)){
			cek = 1;
		}else{
			cek = 0;
		}
		
	});
	
	return cek;	
}

function cek_email(data){
	var regex_email= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
	
	isi_email = data;
	
	if(regex_email.test(isi_email)){
		return 0;
	}else{
		return 1;
	}
}