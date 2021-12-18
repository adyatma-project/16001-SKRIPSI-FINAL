<nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <?php

    date_default_timezone_set("Asia/Singapore");
    $tz_time = date("F j, Y h:i:s");
    ?>

    <h4 id="clock" class="mt-auto text-dark"> </h4>
    <script type="text/javascript">
        var currenttime =
            '<?php echo $tz_time; ?>'; // Timestamp of the timezone you want to use, in this case, it's server time
        var servertime = new Date(currenttime);



        function padlength(l) {
            var output = (l.toString().length == 1) ? "0" + l : l;
            return output;
        }

        function digitalClock() {
            servertime.setSeconds(servertime.getSeconds() + 1);
            var timestring = padlength(servertime.getHours()) + ":" + padlength(servertime.getMinutes()) + ":" + padlength(
                servertime.getSeconds());
            document.getElementById("clock").innerHTML = timestring + " WITA";
        }
        window.onload = function() {
            setInterval("digitalClock()", 1000);
        }
    </script>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Messages -->
        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-dark small"><?= user()->username; ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('uploads/' . user()->image) ?>">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo base_url('profile'); ?>">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile Akun
                </a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>
        </li>

    </ul>

</nav>