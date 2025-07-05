<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->

                    <!-- /Logo -->
                    <h4 class="mb-2">Adventure starts here 🚀</h4>
                    <p class="mb-4">Make your app management easy and fun!</p>

                    <form id="formAuthentication" class="mb-3" action="<?= base_url('auth/register') ?>" method="POST" onsubmit="return document.getElementById('terms-conditions').checked;">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus value="<?= set_value('username') ?>">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?= set_value('email') ?>" />
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <label class="form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password">
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                                <label class="form-check-label" for="terms-conditions">
                                    I agree to
                                    <a href="javascript:void(0);">privacy policy & terms</a>
                                </label>
                                <div id="terms-error" class="text-danger d-none">You must agree to the privacy policy & terms.</div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-grid w-100">Sign up</button>
                    </form>

                    <script>
                        document.getElementById('formAuthentication').addEventListener('submit', function(e) {
                            var terms = document.getElementById('terms-conditions');
                            var error = document.getElementById('terms-error');
                            if (!terms.checked) {
                                e.preventDefault();
                                error.classList.remove('d-none');
                            } else {
                                error.classList.add('d-none');
                            }
                        });
                    </script>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="<?= base_url('auth') ?>">
                            <span>Sign in instead</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Register Card -->
        </div>
    </div>
</div>

<!-- / Content -->