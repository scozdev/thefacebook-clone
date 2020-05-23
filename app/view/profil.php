

<?php require view('static/header') ?>

<div class="content">

    <?php require view('static/sidebar') ?>

    <div class="sag">
      <div class="box2">

        <div class="sol25">

            <div class="box2 p1">
                <div class="box-header">Profil
                    <span>
                        <?php if(isset($_SESSION['user_id'])&& $_SESSION['user_id']==$kullanicicek['user_id']) {?>
                            <a style="color: white; float: right;" href="<?=site_url('profil/'.$kullanicicek['user_url'].'?pageedit=ok')?>">[edit]</a>
                        <?php } ?>
                    </span>
                </div>
                <div class="box-content">
                    <img width="200px" height="250px" src="<?=$kullanicicek['user_foto'] ?>" alt="">
                </div>
            </div>

            <?php if(!get('pageedit')){ ?>

                <ul class="clearul">

                    <li><a href="<?=site_url('') ?>">Visualize My Friends</a></li>
                    <li>
                        <?php if(isset($_SESSION['user_id'])&& $_SESSION['user_id']==$kullanicicek['user_id']) {?>
                            <a href="<?=site_url('profil/'.$kullanicicek['user_url'].'?pageedit=ok&edit=ok')?>">Edit My Profile</a>
                            <?php } ?></li>
                            <li><a href="">My Account Preferences</a></li>
                            <li><a href="">My Privacy Preferences</a></li>
                        </ul>

                        <div class="box2 p1">
                            <div class="box-header">Connection</div>
                            <div class="box-content">
                               
                            </div>
                        </div>

                        <div class="box2 p1">
                            <div class="box-header">Access</div>
                            <div class="box-content">
                            </div>
                        </div>

                    <?php }else{ ?>

                        <div class="box2 p1">
                            <div class="box-header">Page Choise</div>
                            <div class="box-content">
                                <form enctype="multipart/form-data" action=""  method="POST">

                                  <input type="FILE" name="dosya">

                                  <input type="hidden" name="imageupdate" value="1">
                                  <input type="submit" value="Yukle">

                              </form>
                          </div>
                      </div>

                  <?php } ?>

              </div>
              <div class="sag75">


                <?php if(!get('edit')){ ?>

                    <div class="box2 p1">
                        <div class="box-header"><span>Information</span>
                            <span>
                                <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$kullanicicek['user_id']) {?>
                                    <a style="color: white; float: right;" href="<?=site_url('profil/'.$kullanicicek['user_url'].'?edit=ok')?>">[edit]</a>
                                <?php } ?>
                            </span></div>
                            <div class="box-content">


                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Account Info:</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <td>Name:</td>
                                            <td class="align-right"><?=$kullanicicek['user_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Member Since:</td>
                                            <td class="align-right"><?=$kullanicicek['user_date'] ?></td>
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
                                            <td class="align-right"><?=$kullanicicek['user_email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status:</td>
                                            <td class="align-right"><?=$kullanicicek['user_status'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table>
                                 <tbody><tr><th>Extended Info:</th>
                                 </tr><tr>
                                     <td>Screenname:</td>
                                     <td><?=$kullanicicek['user_screenname'] ?></td>
                                 </tr>
                                 <tr>
                                     <td>Looking For:</td>
                                     <td><?=$kullanicicek['user_looking_for'] ?></td>
                                 </tr>
                                 <tr>
                                     <td>Interested In:</td>
                                     <td><?=$kullanicicek['user_interests'] ?></td>
                                 </tr>
                                 <tr>
                                     <td>Relationship Status:</td>
                                     <td><?=$kullanicicek['user_relationship'] ?></td>
                                 </tr>
                                 <tr>
                                     <td>Political Views:</td>
                                     <td><?=$kullanicicek['user_political_view'] ?></td>
                                 </tr>
                                 <tr>
                                     <td>Interests:</td>
                                     <td><?=$kullanicicek['user_interests'] ?></td>
                                 </tr>
                             </tbody></table>

                         </div>
                     </div>

                 <?php }else{ ?>


                    <div class="box2 p1">
                        <div class="box-header"><span>Information</span>
                        </div>
                        <div class="box-content">

                            <table>
                                <tbody>
                                    <tr>
                                        <th>Account Info:</th>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><?=$kullanicicek['user_name'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>Member Since:</td>


                                        <td><?=$kullanicicek['user_date'] ?></td>
                                    </tr>
                                </tbody>
                            </table>



                            <form action="" method="post" style="margin: 0;" class="profil-edit">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Basic Info:</th>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><?=$kullanicicek['user_email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status:</td>
                                            <td>
                                                <select name="status">
                                                    <option value="Student">Student</option>
                                                    <option value="Student">Student </option>
                                                    <option value="Alumnus">Alumnus/Alumna</option>
                                                    <option value="Faculty">Faculty</option>
                                                    <option value="Staff">Staff</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sex:</td>
                                            <td>
                                                <select name="sex">
                                                    <option value=""></option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Couple">Couple</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Year:</td>
                                            <td>
                                                <select name="year">
                                                    <option value=""></option>
                                                    <option value="2016">2016</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Concentration:</td>
                                            <td><input type="text" name="concentration" value=""></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Extended Info:</th>
                                        </tr>
                                        <tr>
                                            <td>Screenname:</td>
                                            <td><input type="text" name="screenname" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Looking For:</td>
                                            <td><input type="text" name="looking_for" value=""></td>
                                        </tr>
                                        <tr>
                                            <td>Interested In:</td>
                                            <td>
                                                <select name="interested_in">
                                                    <option value=""></option>
                                                    <option value="Women">Women</option>
                                                    <option value="Men">Men</option>
                                                    <option value="Couple">Couple</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Relationship Status:</td>
                                            <td>
                                                <select name="relationship">
                                                    <option value=""></option>
                                                    <option value="Single">Single</option>
                                                    <option value="In a relationship">In a Relationship</option>
                                                    <option value="Married">Married</option>
                                                    <option value="It's Complicated">It's Complicated</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Political Views:</td>
                                            <td>
                                                <select name="political_view">
                                                    <option value=""></option>
                                                    <option value="Liberal">Liberal</option>
                                                    <option value="Conservative">Conservative</option>
                                                    <option value="Moderate">Moderate</option>
                                                    <option value="Libertarian">Libertarian</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Interests:</td>
                                            <td><input type="text" name="interests" value=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="text-align: center;"> <input type="submit" name="submit"
                                    value="Update Profile"></div>
                                </form>



                            </div>
                        </div>

                    <?php } ?>



                </div>



            </div>
        </div>
    </div>


    <?php require view('static/footer') ?>


