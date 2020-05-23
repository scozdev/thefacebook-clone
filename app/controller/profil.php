<?php 





if($sef = get('sef')){
	$sef = explode('/', $sef);

	$girisyapanadi = $kullanicicek['user_url'];


	$kullanicisor=$db->prepare("SELECT * FROM users where user_url=:user_url");
	$kullanicisor->execute(array(
		'user_url' => $sef[1]
	));

	$say=$kullanicisor->rowCount();

	if ($say==0 && route(0)=='profil') {

		Header("Location:".site_url(404));
	}

	$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);


}




if (post('imageupdate')) {

	
	$dizin = 'yuklenendosyalar/';
	$yuklenecek_dosya = $dizin . basename($_FILES['dosya']['name']);
	@$name = $_FILES['dosya']["name"];

	move_uploaded_file($_FILES['dosya']['tmp_name'], $yuklenecek_dosya);
	$refimgyol=$dizin.$name;

	$duzenle=$db->prepare("UPDATE users SET
		user_foto=:user_foto
		WHERE user_id={$_SESSION['user_id']}");
	$update=$duzenle->execute(array(
		'user_foto' => $refimgyol
	));



	if ($update) {
		header('Location:' . site_url('profil')."/".$kullanicicek['user_url']);
		// Header("Location:site_url('profil')");

	} else {
		header('Location:' . site_url('profil')."/".$kullanicicek['user_url'].'?durum=hata');
		// Header("Location:site_url('profil?durum=no')");
	}

}



if (post('submit')) {

	

	
	$ayarkaydet=$db->prepare("UPDATE users SET
		user_status=:status,
		user_sex=:sex,
		user_year=:year,
		user_concentration=:concentration,
		user_looking_for=:looking_for,
		user_screenname=:screenname,
		user_interested_in=:interested_in,
		user_interests=:interests,
		user_relationship=:relationship,
		user_political_view=:political_view
		WHERE user_id={$_SESSION['user_id']}");

	$update=$ayarkaydet->execute(array(
		'status' => $_POST['status'],
		'sex' => $_POST['sex'],
		'year' => $_POST['year'],
		'concentration' => $_POST['concentration'],
		'looking_for' => $_POST['looking_for'],
		'screenname' => $_POST['screenname'],
		'interested_in' => $_POST['interested_in'],
		'interests' => $_POST['interests'],
		'relationship' => $_POST['relationship'],
		'political_view' => $_POST['political_view'],

	));


	if ($update) {

		header('Location:' . site_url('profil')."/".$kullanicicek['user_url']);

	} else {

		header('Location:' . site_url('profil')."/".$kullanicicek['user_url']);
	}

}




require view('profil');


?>