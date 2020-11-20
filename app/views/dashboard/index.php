<main>
    <div class="container">
        <div class="row">
            <div class="col s12 m4">
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Member</span>
                        <h5>Jumlah member: <?= $data['jumlahMember']; ?></h5>
                    </div>
                    <div class="card-action">
                        <a href="<?= BASEURL; ?>/member" class="btn-floating btn-large waves-effect waves-light blue">
                            <i class="material-icons">forward</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<div class="modal-modalan">
    <!-- Modal Logout -->
    <div id="logout" class="modal">
        <div class="modal-content">
            <h4>Logout</h4>
            <h5>Yakin Mau Logout?</h5>
        </div>
        <div class="modal-footer">
            <a class="modal-close waves-effect waves-green btn blue">Batal</a>
            <a href="<?= BASEURL; ?>/dashboard/logout" class="modal-close waves-effect waves-green btn">Ya</a>
        </div>
    </div>

</div>