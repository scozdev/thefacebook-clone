<?php

$meta = [
	'title' => setting('title')
];

if(post('submit') || post('login2')){
	$usermail = post('usermail');
	$password = post('password');

	if(!$usermail){
		$error = 'Lütfen email adresinizi giriniz.. ';
	}elseif(!$password){
		$error = 'Lütfen şifrenizi  gir ';		
	}else{

		// üye var mı kontrol et
        $query = $db->prepare('SELECT * FROM users WHERE user_email = :usermail');
        $query->execute([
            'usermail' => $usermail
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);


        if ($row){

            // parola kontorl
            // $password_verify = password_verify($password, $row['user_password']);
            $password_verify = (md5($password) == $row['user_password']);

            if($password_verify){

                $success = 'Başarılı şekilde giriş yaptınız yönlendiriliyorusnuz';
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['user_name'] = $row['user_name'];
                

                header('Location:' . site_url('profil/'.$row['user_url']));

            }else{
                $error = 'Şifreniz hatalı lütfen tekrar deneyiniz';
            }

        } else {

            $error = 'Böyle bir kayıt bulunamadı';

        }


    }

}





require view('login');