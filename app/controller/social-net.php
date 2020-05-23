<?php



	$sayfada =8; 
	$sorgu = $db->prepare("select * from users");
	$sorgu->execute();
	$toplam_icerik = $sorgu->rowCount();
	$toplam_sayfa = ceil($toplam_icerik / $sayfada);
	$sayfa = isset($_GET['sayfa']) ? (int) $_GET['sayfa'] : 1;
	if ($sayfa < 1) $sayfa = 1;
	if ($sayfa > $toplam_sayfa) $sayfa = $toplam_sayfa;
	$limit = ($sayfa - 1) * $sayfada;


	$usersor = $db->prepare("SELECT * FROM users order by user_date DESC limit $limit,$sayfada");
	$usersor->execute();

	




require view('social-net');