<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg card-login">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-10 col-sm-10 form-login">
                            <div class="px-3 py-4">
                                <div class="text-center">
                                    <div class="mb-4 sidebar-brand d-flex align-items-center justify-content-center">
                                        <div class="sidebar-brand-icon">
                                            <img src="<?= base_url('assets/img/Logo.png') ?>" width="100px" alt="">
                                        </div>
                                        <div class="sidebar-brand-text mx-3">
                                            <h4 class="h4 text-gray-900">SMCI</h4>
                                        </div>
                                    </div>
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleFirstName" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleLastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password">
                                        </div>
                                    </div>
                                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= site_url('auth/sign_in') ?>">Already have an account?
                                        Login!</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= site_url('home') ?>">Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>