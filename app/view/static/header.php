<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost/thefacebook/">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?=public_url('styles/style.css')?>">
  <title>TheFacebook</title>
</head>

<body>

  <div class="container">
    <header>
      <img src="<?=public_url('images/pacino2.png')?>" alt="">
      <div class="top_links">
        <div>
          <a href="<?=site_url('index')?>"><img src="<?=public_url('images/logo.png')?>" alt=""></a>
        </div>

        <?php if(!isset($_SESSION['user_id'])){ ?>
          <a href="<?=site_url('login')?>">Login</a>
          <a href="<?=site_url('register')?>">Register</a>
          <a href="<?=site_url('about')?>">About</a>
          <a href="<?=site_url('faq')?>">Faq</a>
        <?php }else{ ?>
         <a href="<?=site_url('home')?>">Home</a>
         <a href="<?=site_url('search')?>">search</a>
         <a href="<?=site_url('social-net')?>">social net</a>
         <a href="<?=site_url('faq')?>">faq</a>
         <a href="<?=site_url('logout')?>">logout</a>
       <?php } ?>


     </div>
   </header>
