<?= Flasher::toasts(); ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s4 m4">
                <button data-target="tambah" class="modal-trigger btn blue btn-floating pulse"><i class="material-icons">add</i></button>
            </div>
            <div class="col s8 m8">
                <form action="<?= BASEURL; ?>/member/cari" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">search</i>
                            <input type="text" id="autocomplete-input" class="autocomplete" name="keyword">
                            <label for="autocomplete-input">cari..</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Pekerjaan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php $i = 1;
                    foreach ($data['daftarMember'] as $member) :
                    ?>
                        <tbody>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $member['nama']; ?></td>
                                <td><?= $member['pekerjaan']; ?></td>
                                <td>
                                    <button data-id="<?= $member['id']; ?>" data-target="hapus" data-tooltip="hapus" data-position="top" class="tooltipped hapus btn red modal-trigger ">
                                        <i class="material-icons">delete</i>
                                    </button>
                                    <button data-id="<?= $member['id']; ?>" data-target="detail" data-tooltip="detail" data-position="top" class="tooltipped detail btn blue modal-trigger ">
                                        <i class="material-icons">visibility</i>
                                    </button>
                                    <button data-id="<?= $member['id']; ?>" data-target="edit" data-tooltip="edit" data-position="top" class="tooltipped edit btn teal modal-trigger ">
                                        <i class="material-icons">edit</i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
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

    <!-- modal Detail -->
    <div id="detail" class="modal">
        <div class="modal-content">
            <div id="detailLoader"></div>
            <div class="row">
                <div class="col s4 m4">
                    <h6>Nama: </h6>
                </div>
                <div class="col s8 m8">
                    <h6 id="detailNama"> </h6>
                </div>
            </div>
            <div class="row">
                <div class="col s4 m4">
                    <h6>Umur: </h6>
                </div>
                <div class="col s8 m8">
                    <h6 id="detailUmur"></h6>
                </div>
            </div>
            <div class="row">
                <div class="col s4 m4">
                    <h6>Jenis Kelamin: </h6>
                </div>
                <div class="col s8 m8">
                    <h6 id="detailJenisKelamin"></h6>
                </div>
            </div>
            <div class="row">
                <div class="col s4 m4">
                    <h6>Alamat: </h6>
                </div>
                <div class="col s8 m8">
                    <h6 id="detailAlamat"> </h6>
                </div>
            </div>
            <div class="row">
                <div class="col s4 m4">
                    <h6>Pekerjaan: </h6>
                </div>
                <div class="col s8 m8">
                    <h6 id="detailPekerjaan"></h6>
                </div>
            </div>
            <div class="row">
                <div class="col s4 m4">
                    <h6>No handphone: </h6>
                </div>
                <div class="col s8 m8">
                    <h6 id="detailNoHp"> </h6>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a class="modal-close waves-effect waves-green btn blue">Kembali</a>
        </div>
    </div>

    <!-- Modal Hapus -->
    <div id="hapus" class="modal">
        <div class="modal-content">
            <h4>Hapus</h4>
            <h5>Yakin Mau Hapus?</h5>
        </div>
        <div class="modal-footer">
            <a class="modal-close waves-effect waves-green btn blue">Batal</a>
            <a id="yakin-hapus" class="modal-close waves-effect waves-green btn ">Ya</a>
        </div>
    </div>

    <!-- Modal tambah -->
    <div id="tambah" class="modal">
        <form action="<?= BASEURL; ?>/member/tambah" method="post">
            <div class="modal-content">
                <h4>Forms Tambah Data</h4>
                <div class="input-field col s6">
                    <input id="nama" name="nama" type="text" class="validate" required>
                    <label for="nama">Nama</label>
                </div>
                <div class="input-field col s6">
                    <input id="umur" name="umur" type="number" class="validate" required>
                    <label for="umur">Umur</label>
                </div>
                <div class="input-field col s12">
                    <select name="jenisKelamin">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                    <label>Jenis Kelamin</label>
                </div>
                <div class="input-field col s6">
                    <input id="alamat" name="alamat" type="text" class="validate" required>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="input-field col s6">
                    <input id="pekerjaan" name="pekerjaan" type="text" class="validate" required>
                    <label for="pekerjaan">Pekerjaan</label>
                </div>
                <div class="input-field col s6">
                    <input id="noHp" name="noHp" type="number" class="validate" required minlength="12">
                    <label for="noHp">No Handphone</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-close waves-effect waves-green btn">Tambah</button>
            </div>
        </form>
    </div>

    <!-- Modal edit -->
    <div id="edit" class="modal">
        <form id="form-edit" method="post">
            <input type="hidden" name="id" id="id">
            <div class="modal-content">
                <h4>Forms Edit Data</h4>
                <div id="editLoader"></div>
                <div class="input-field col s6">
                    <input id="editNama" name="nama" type="text" class="validate" required placeholder>
                    <label for="nama">Nama</label>
                </div>
                <div class="input-field col s6">
                    <input id="editUmur" name="umur" type="number" class="validate" required placeholder>
                    <label for="umur">Umur</label>
                </div>
                <div class="input-field col s12">
                    <select name="jenisKelamin" id="editJenisKelamin">
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                    <label>Jenis Kelamin</label>
                </div>
                <div class="input-field col s6">
                    <input id="editAlamat" name="alamat" type="text" class="validate" required placeholder>
                    <label for="alamat">Alamat</label>
                </div>
                <div class="input-field col s6">
                    <input id="editPekerjaan" name="pekerjaan" type="text" class="validate" required placeholder>
                    <label for="pekerjaan">Pekerjaan</label>
                </div>
                <div class="input-field col s6">
                    <input id="editNoHp" name="noHp" type="number" class="validate" required minlength="12" placeholder>
                    <label for="noHp">No Handphone</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="modal-close waves-effect waves-green btn">Edit</button>
            </div>
        </form>
    </div>
</div>