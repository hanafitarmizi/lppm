<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/18/2018
 * Time: 1:52 PM
 */

?>



<body>
<!-- Pre loader -->


<div id="app" class="paper-loading">

    <main>
        <div id="primary" class="p-t-b-100 height-full ">
            <div class="container">
                <?php echo $this->getContent(); ?>
                <div class="row">
                    <div class="col-lg-4 mx-md-auto">
                        <div class="text-center">
                            <img src="assets/img/dummy/u5.png" alt="">
                            <h2>Welcome Back</h2>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                for you</p>
                        </div>
                        <?php echo $this->getContent(); ?>
                        <form action="<?= $this->url->get('loginproses') ?>" method="post">
                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Email Address" name="id_user">
                            </div>
                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Password" name="password">
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
                            <small class="forget-pass">Have you forgot your username or password ?</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #primary -->
    </main>
    <!-- Login modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog width-400" role="document">
            <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                                class="paper-nav-toggle active"><i></i></a>
                <div
                    class="modal-body no-p">
                    <div class="text-center p-40 p-b-0">
                        <img src="assets/img/dummy/u4.png" alt="">
                        <h3>Welcome Back</h3>
                        <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                            for you</p>
                    </div>
                    <div class="light p-40 b-t-b">
                        <form action="dashboard2.html">
                            <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Email Address">
                            </div>
                            <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Password">
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
                            <small class="forget-pass">Have you forgot your username or password ?</small>
                        </form>
                    </div>
                    <div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook">
                            <i class="icon-facebook"></i> Login with Facebook
                        </a>
                        <a href="#" class="btn btn-lg btn-block btn-social twitter">

                            <i class="icon-twitter"></i> Login with Twitter

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SignUp modal -->
    <div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                                class="paper-nav-toggle active"><i></i></a>
                <div
                    class="modal-body no-p">
                    <div class="row">
                        <div class="col-lg-5 grid">
                            <div class="p-40">
                                <h5 class="p-t-40">Sign Up Using Social Account</h5>
                                <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                    for you</p> <a href="#" class="btn btn-lg btn-block btn-social facebook">
                                    <i class="icon-facebook"></i> Login with Facebook
                                </a>
                                <a href="#" class="btn btn-lg btn-block btn-social twitter">

                                    <i class="icon-twitter"></i> Login with Twitter

                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="light p-t-b-40">
                                <div class="p-40">
                                    <h5 class="p-b-20">Create New User Account</h5>
                                    <form action="dashboard2.html ">
                                        <div class="form-group has-icon"><i class="icon-user-circle"></i>
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Your Name">
                                        </div>
                                        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Email Address">
                                        </div>
                                        <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Password">
                                        </div>
                                        <div class="form-group has-icon"><i class="icon-repeat"></i>
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Confirm Password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
                                        <p class="forget-pass">A verification email wil be sent to you</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!--End Page page_wrrapper -->


</body>

