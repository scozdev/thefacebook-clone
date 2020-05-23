<?php require view('static/header') ?>

<div class="content">

    <?php require view('static/sidebar') ?>

    <div class="sag">
      <div class="box">
        <div class="box-header">
            Registration
        </div>
        <div class="box-content mt-5">
            <h1>[ Register ]</h1>
            <p class="mt-5"> 
                To register for thefacebook.com, just fill in the four fields below. You will have a chance
            to enter additional information and submit a picture once you have registered.</p>
        </div>

        <div>
             <?php if(isset($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?=$error ?>
                </div>
            <?php endif; ?>
            <?php if(isset($success)): ?>
                <div class="alert alert-success" role="alert">
                    Giriş Başarılı Yönlendiriliyorsunz..
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="form-control">
                    <label for="">name</label>
                    <input type="text" class="form-control" name="username" id="username" value="<?=post('username') ?>">
                </div>
                <div class="form-control">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email"  value="<?=post('email') ?>">
                </div>
                <div class="form-control">
                    <label for="">Passw</label>
                    <input type="password" class="form-control"  name="password" id="password" placeholder="*******" value="<?=post('password') ?>">
                </div>
                            <input type="hidden" name="submit" value="1">

                <button>Register</button>                            

            </form>
        </div>

    </div>
</div>
</div>


<?php require view('static/footer') ?>


