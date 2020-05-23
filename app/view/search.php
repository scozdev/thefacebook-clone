<?php require view('static/header') ?>

<div class="content">

    <?php require view('static/sidebar') ?>

    <div class="sag">
        <div class="box">
            <div class="box-header">
                Welcome to Thefacebook

            </div>


            <?php   while ($usercek = $usersor->fetch(PDO::FETCH_ASSOC)) { ?>
                <div class="box2 p1">
                    <div class="box-header"><span><a href="<?=site_url('profil/'.$usercek['user_url']) ?>" style="color: #fff;">Profil View</a></span>
                        <span><a style="color: white; float: right;" href="edit"></a></span>
                    </div>
                    <div class="box-content" style="overflow: auto;">

                        <div class="sol25">

                            <div class="box2 p1">
                                <div class="box-header">Profil</div>
                                <div class="box-content">
                                    <img src="<?=$usercek['user_foto'] ?>"  width="200px" height="250px"  alt="">
                                </div>
                            </div>



                        </div>  
                        <div class="sag75">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Account Info:</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td class="align-right"><?=$usercek['user_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Member Since:</td>
                                        <td class="align-right"><?=$usercek['user_date'] ?></td>
                                    </tr>
                                </tbody>
                            </table>

                            <table>
                                <tbody>
                                    <tr>
                                        <th>Basic Info:
                                        :</th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td class="align-right">selçuk özdemir</td>
                                    </tr>
                                    <tr>
                                        <td>Status:</td>
                                        <td class="align-right">May 21, 2020</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>  



                    </div>
                </div>

            <?php } ?>

        </div>

    </div>
</div>
</div>


<?php require view('static/footer') ?>


