const detail = () => {
    document.querySelectorAll('.detail').forEach(detail => {
        detail.addEventListener('click', e => {
            e.preventDefault();
            const id = detail.dataset.id;

            document.querySelector('#detailLoader').innerHTML = `<div class="progress"><div class="indeterminate"></div></div>`;
            document.querySelector('#detailNama').innerHTML = ``;
            document.querySelector('#detailUmur').innerHTML = ``;
            document.querySelector('#detailJenisKelamin').innerHTML = ``;
            document.querySelector('#detailAlamat').innerHTML = ``;
            document.querySelector('#detailPekerjaan').innerHTML = ``;
            document.querySelector('#detailNoHp').innerHTML = ``;

            fetch(`http://localhost/php-master/member/detail/${id}`).then(res => res.json()).then(member => {
                document.querySelector('#detailNama').innerHTML = member.nama;
                document.querySelector('#detailUmur').innerHTML = member.umur;
                document.querySelector('#detailJenisKelamin').innerHTML = member.jenis_kelamin;
                document.querySelector('#detailAlamat').innerHTML = member.alamat;
                document.querySelector('#detailPekerjaan').innerHTML = member.pekerjaan;
                document.querySelector('#detailNoHp').innerHTML = member.no_hp;
                document.querySelector('#detailLoader').innerHTML = ``;
            }).catch(err => console.log(err));
        })
    })
}

const hapus = () => {
    document.querySelectorAll('.hapus').forEach(hapus => {
        hapus.addEventListener('click', e => {
            e.preventDefault();
            const id = hapus.dataset.id;
            document.querySelector('#yakin-hapus').setAttribute('href', `http://localhost/php-master/member/hapus/${id}`);
        })
    })
}

const edit = () => {
    document.querySelectorAll('.edit').forEach(edit => {
        edit.addEventListener('click', e => {
            e.preventDefault;
            const id = edit.dataset.id;
            document.querySelector('#form-edit').setAttribute('action', `http://localhost/php-master/member/edit/${id}`);
            document.querySelector('#editLoader').innerHTML = `<div class="progress"><div class="indeterminate"></div></div>`;
            document.querySelector('#editNama').value =``;
            document.querySelector('#editUmur').value = ``;
            document.querySelector('#editAlamat').value = ``;
            document.querySelector('#editPekerjaan').value =``;
            document.querySelector('#editNoHp').value = ``;
            

            fetch(`http://localhost/php-master/member/detail/${id}`).then(res => res.json()).then(member => {
                document.querySelector('#id').value = member.id;
                document.querySelector('#editNama').value = member.nama;
                document.querySelector('#editUmur').value = member.umur;
                document.querySelector('#editJenisKelamin').value = member.jenis_kelamin;
                document.querySelector('#editAlamat').value = member.alamat;
                document.querySelector('#editPekerjaan').value = member.pekerjaan;
                document.querySelector('#editNoHp').value = member.no_hp;

                var elems = document.querySelectorAll('select');
                M.FormSelect.init(elems);

                document.querySelector('#editLoader').innerHTML = ``;
            })
        })
    })
}

detail();
hapus();
edit();