<<<<<<< HEAD
<script> function fullDateTime() {
            var d = new Date();          
            var n = d.toLocaleString([], { hour12: true});
            window.location='../logout.php?time='+n;
        }
</script>
=======
     <script>
   function fullDateTime() {
            var d = new Date();          
            var time = d.toLocaleString([], { hour12: true});
            document.cookie = "time = " + time;
        }
</script>

>>>>>>> b41f37b51315938cb0880efd8bedee0f7e7811ab
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
             <a class="navbar-brand" href="index.html">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
<<<<<<< HEAD
                        <input value="logout" id="sub" name="sub" type="submit" class="dropdown-item" onclick="fullDateTime();">
=======
                         <form action="../logout.php">
                        <input type="submit" class="dropdown-item" onclick="fullDateTime()" value="Logout">
                        </form>
>>>>>>> b41f37b51315938cb0880efd8bedee0f7e7811ab
                    </div>
                
                </li>
            </ul>
        </nav>
        