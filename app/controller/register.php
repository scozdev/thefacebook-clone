<?php

$meta = [
	'title' => setting('title')
];

if(post('submit')){

	$username = post('username');
	$email = post('email');
	$password = post('password');
	$password_again = post('password_again');

	if(!$username){
		$error = 'Lütfen kullanici adi gir ';
	}elseif(!$email){
		$error = 'Lütfen email  gir ';		
	}elseif(!$password){
		$error = 'Lütfen şifreleri  gir ';		
	}else{

		// üye var mı kontrol et
        $query = $db->prepare('SELECT * FROM users WHERE user_name = :username || user_email = :email');
        $query->execute([
            'username' => $username,
            'email' => $email
        ]);
        $row = $query->fetch(PDO::FETCH_ASSOC);


		if ($row){
            $error = 'Bu kullanıcı adı ya da e-posta zaten kullanılıyor. Lütfen başka bir tane deneyin.';
        } else {

            // üyeyi ekle
            $query = $db->prepare('INSERT INTO users SET user_name = :username, user_url = :url, user_email = :email, user_password = :password, user_foto = :user_foto');
            $result = $query->execute([
                'username' => $username,
                'url' => permalink($username),
                'email' => $email,
                'password' => md5($password),
                'user_foto' => public_url('images/no-image.gif')
            ]);

            if ($result){
                $success = 'Üyeliğiniz başarıyla oluşturuldu, yönlendiriliyorsunuz.';
                header('Refresh:1;url=' . site_url('login'));
            } else {
                $error = 'Bir sorun oluştu, lütfen daha sonra tekrar deneyin.';
            }

        }


	}

}


require view('register');