<header>
    <nav class="blue">
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?= BASEURL; ?>/dashboard" class="brand-logo <?php if (isset($data['dashboard'])) echo 'black-text' ?>">Dashboard</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= BASEURL; ?>/member" class="<?php if (isset($data['member'])) echo 'black-text' ?>">Member</a></li>
                    <li><a href="<?= BASEURL; ?>/mobil">Mobil</a></li>
                    <li><a href="collapsible.html">Transaksi</a></li>
                    <li><a class="modal-trigger" data-target="logout">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <h4 class="center">Kuple</h4>
        <li><a href="<?= BASEURL; ?>/dashboard" class="<?php if (isset($data['dashboard'])) echo 'blue white-text' ?>">Dashboard</a></li>
        <li><a href="<?= BASEURL; ?>/member" class="<?php if (isset($data['member'])) echo 'blue white-text' ?>">Member</a></li>
        <li><a href="collapsible.html">Mobil</a></li>
        <li><a href="mobile.html">Transaksi</a></li>
        <li><a href="<?= BASEURL; ?>/dashboard/logout" class="modal-trigger" data-target="logout">Logout</a></li>
    </ul>
</header>