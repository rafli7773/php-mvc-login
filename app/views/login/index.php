<?= Flasher::toasts(); ?>
<div class="container app-gua">
    <div class="content-gua z-depth-3">
        <h3>Login</h3>
        <div class="row form-gua">
            <div class="col m12 s12 ">
                <form action="<?= BASEURL; ?>/login/verifikasi" method="post">
                    <div class="input-field col s12 m12">
                        <input id="email" type="email" class="validate" name="email" value="<?php if (isset($_SESSION['valueRegistrasiEmail'])) echo $_SESSION['valueRegistrasiEmail'] ?>" required>
                        <label for="email">Email</label>
                        <?php Flasher::validasiEmail(); ?>
                    </div>
                    <div class="input-field col s12 m12">
                        <input id="password" type="password" class="validate" name="password" required minlength="5">
                        <label for="password">Password</label>
                        <?php Flasher::validasiPassword(); ?>
                    </div>
                    <div class="input-field col s12 m6">
                        <button class="btn" type="submit">Login</button>
                    </div>
                    <div class="input-field col s12 m6">
                        <a class="right" href="<?= BASEURL; ?>/registrasi">Tidak Punya Akun? Registrasi</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>