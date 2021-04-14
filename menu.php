<div class="row">
    <div class="col-md-12">
        <!-- AWAL MENU  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <?= $member['fullname']; ?>
            <a class="navbar-brand" href="#"><img src="images/dac.png" width="35px" height="35px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=aboutUs">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?hal=dataPegawai"><i class="fa fa-user-circle"
                                    style="width:0.5cm;"></i> Pegawai</a>
                        </div>
                    </li>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </ul>
                <ul class="navbar-nav ml-md-auto">
                    <?php
                    $member = $_SESSION['MEMBER'];
                    if(!isset($member)) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-info" href="index.php?hal=formLogin" role="button">Login</a>
                    </li>
                    <?php }
                    else {
                    ?>
                    <li class="nav-item dropdown">
                        <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            <?= $member['fullname']; ?>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?hal=dataUser"><i class="fa fa-user-o"
                                    style="width:0.5cm;"></i> Users</a>
                            <a class="dropdown-item" href="#"><i class="fa fa-user" style="width:0.5cm;"></i>
                                Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"
                                    style="width:0.5cm;"></i> Logout</a>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- AKHIR MENU -->
    </div>
</div>