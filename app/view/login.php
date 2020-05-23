<?php require view('static/header') ?>

<div class="content">

    <?php require view('static/sidebar') ?>

    <div class="sag">
       <div class="box">
        <div class="box-header">
            Login
        </div>
        <div class="box-content mt-5">
            <h1>[ Login ]</h1>

        </div>

        <div>
            <form action="" method="post">
                
                <?php if(isset($error)) echo $error; ?>
                <?php if(isset($success)) echo $success; ?>

                <div class="form-control">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="usermail" id="username"value="<?=post('usermail') ?>">
                </div>
                <div class="form-control">
                    <label for="">Passw</label>
                    <input type="password" class="form-control"  name="password" id="password" placeholder="*******" value="<?=post('password') ?>">
                </div>
                <input type="hidden" name="submit" value="1">
                <button type="submit">Login</button>

            </form>
        </div>

    </div>
</div>
</div>


<?php require view('static/footer') ?>


