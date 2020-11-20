<div class="container app-gua">
    <div class="content-gua z-depth-3">
        <h3>Registrasi</h3>
        <div class="row form-gua">
            <div class="col m12 s12 form-gua">
                <form action="<?= BASEURL; ?>/registrasi/verifikasi" method="post">
                    <div class="input-field col s12 m12">
                        <input id="email" type="email" class="validate" name="email" value="<?php if (isset($_SESSION['valueRegistrasiEmail'])) echo $_SESSION['valueRegistrasiEmail'] ?>" required>
                        <label for="email">Email</label>
                        <?php Flasher::validasiEmail(); ?>
                    </div>
                    <div class="input-field col s12 m12">
                        <input id="username" type="text" class="validate" name="username" value="<?php if (isset($_SESSION['valueUsername'])) echo $_SESSION['valueUsername'] ?>" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="input-field col s12 m12">
                        <input id="password" type="password" class="validate" name="password" required minlength="5">
                        <label for="password">Password</label>
                        <?php Flasher::validasiPassword(); ?>
                    </div>
                    <div class="input-field col s12 m12">
                        <input id="password2" type="password" class="validate" name="password2" minlength="5">
                        <label for="password2">Konfirmasi Password</label>
                    </div>
                    <div class="input-field col s12 m12">
                        <button class="btn" type="submit">Registrasi</button>
                        <a class="right" href="<?= BASEURL; ?>/login">Sudah Punya Akun? Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>