<div class="sol">


    <?php if(!isset($_SESSION['user_id'])){ ?>
       <form method="post" action="<?= site_url('login') ?>">
        <div class="form-control2">
            <label for="">Email :</label>
            <input type="email" name="usermail" id="username"value="<?=post('usermail') ?>">
        </div>
        <div class="form-control2">
            <label for="">Password :</label>
            <input type="password"  name="password" id="password" placeholder="*******" value="<?=post('password') ?>">        </div>
            <div class="btn2">
                <input type="hidden" name="login2" value="1">

                <button type="submit" >Login</button>
                <a href="<?=site_url('register') ?>">Register</a>      
            </div>

        </form>
    <?php }else{ ?>
        <div style="border: 1px dashed blue;padding: 10px; margin-top: 15px;">

            <form action="<?=site_url('search')?>" method="get" class="form-inline my-2 my-lg-0 mr-3">
                <input name="q" value="<?=get('q')?>" type="search">
                <span>
                    quick search
                </span><button  type="submit">Ara</button>
            </form>

        </div>
        <div class="links2">
            <a href="<?=site_url('profil/'.$kullanicicek['user_url']) ?>">My Profile [Edit]</a>
            <a href="<?=site_url('profil') ?>">My Groups</a>
            <a href="<?=site_url('profil') ?>">My Friends</a>
            <a href="<?=site_url('profil') ?>">My Messages</a>
            <a href="<?=site_url('profil') ?>">My Away Messages </a>
            <a href="<?=site_url('profil') ?>">My Account</a>
            <a href="<?=site_url('profil') ?>">My Privacy</a>
        </div>
    <?php } ?>


    <div style="border: 1px dashed blue;padding: 10px; margin-top: 15px;">



    </div>

</div>