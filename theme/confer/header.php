<header class="header-area">
    <div class="classy-nav-container breakpoint-off">
      <div class="container">

        <nav class="classy-navbar justify-content-between" id="conferNav">

          <a class="nav-brand" href="index.php"><img src="img/res/ensamlogo.png" alt="" width="150"
              height="150"></a>
          <!-- src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJAAAAATCAMAAABIvHT8AAAABGdBTUEAALGPC/xhBQAAAYNQTFRFAAAAz0W2zUW3yka4////////////////////////////////////////zUW3y0a3x0a5xEe6////////yka4wEe7vki8////xke5w0e6uUm9tkm+v0i7vUi8skq/r0rA////uEm9tUm+qkvBqEvCsUq/rkrAo0zEoE3FqUvCpkzDm07GmE7HokzEn03Fk0/JkE/Jmk7Gi1DLmE7HlU7IiVDLhlHMlk7Ik0/Jh1HMhVHNlE/IkU/JhVHNg1HOkk/Jj0/Kg1HNgVLOkE/KjVDKglLOf1LPjlDKi1DLgFLOfVLPiVDMflLPe1PQhFHNgVLOfFPQeVPQfVLPelPQd1PR////yUa4x0a5xUe5w0e6wUe7vki7vEi8uki9t0m+tUm+s0q/sErArUvBq0vBqEvCpkzDpEzEoU3Enk3FnE3GmU7Hlk7Il07HlE/IkU/JjlDKkk/Jj0/KjFDLkE/JjVDKilDLi1DLiFHMiVDMhlHMh1HMhFHNhVHNglHOg1HNgVLOf1LPvFeBjQAAAFV0Uk5TAAOWaBFmmbuqdyKI7lUGqPxY3TOL+UjMD9L1Ohjb8C1EIuPpJC3r3xw389MVQvnPGYW+RvjjIT/15yU48uorM/DvMC3r8Dcn6fU9vfZDE8f5SgmtUsDO7lcAAAKRSURBVEjHpVZnm5AwDK4KlEJxgIrbuvfee+89cO+9T0/P89w/XbrTFu8e7vKFNyFtX5ImAaFJk6cgLRADieIEY5ySzLFmOW4aiklkLK0TLiSMW5gbpMXTY6inRC6dOu3G9BlqQ4iBFLRRQgDJXBupsQpN8iMtxAZp8XTi6WXV6jNv3ro9a7bcEGIrCdix1uGIamBNAKEmHT+hhraM5sy9c/fevPliLcRG4qbpOBs7VgIINUVIiIKUAT32CYklCxbef/Bw0WKxGGIdCpGvhCEmc8QsyzKOUEbE+wwQEklzCWGw4f90GXO+dsnSR4+fLFsu3kJs/VUEYhuikvOR6ausFUSxPyHEzPeuWPn02fNVq5GPTW5qvZYXgyGh6gnxyFFIiO86IUJozdoXL1+tWx9gfQjx7znRN9RsVGlfLGPnEioJl8zTY5cQ3HTDxtdv3m7aHGB1COsihFHgIgC/CnlnlTFPdwnXsGbQlnfvPwxsDfE4CIl0sn6Egq6ybfvHT4M7dgZ4tJRRrVQuIfnJeUfZV56ee4Soafq7dn/+MrRnb4C51KbXtS2bZ967fzD30hrxEqS9LnVdwCpB+/YPfB0+cDDApobU2Rk15KitPWBVrixIydhVltg+gg4dHvw2cuRogNV5Ipi8IBj/8saWRoN52TBqGWuU9yck+q/M4bHjQ99/nDgZYCdEbdblhK2dUVYqa+LebpG00QjJsicMvCe6eZw6Pfzz15mzwhdiOzvgGKX6D6SiHcVhYsXGIOQPV6yaP3+eG/n95/wF6QsxYJTak+0fUWbHax4FLSLvT6hQF+Lipb+XryhfiKGwVMQjjd3fAEGUJixsSDJp/QiJIcUH89Vr140zxF6YWNRhrTqtE5J/Qg5JYeNkwh8AAAAASUVORK5CYII=" -->

          <div class="classy-navbar-toggler">
            <span class="navbarToggler"><span></span><span></span><span></span></span>
          </div>

          <div class="classy-menu">

            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>

            <div class="classynav">
              <ul id="nav">
                <li <?php if($_SERVER['SCRIPT_NAME']=="/index.php") { ?>  class="active"   <?php   }  ?>><a href="index.php">Accueil</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/themes.php") { ?>  class="active"   <?php   }  ?> ><a href="themes.php">Thémes</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/inscription-soumission.php") { ?>  class="active"   <?php   }  ?>><a href="inscription-soumission.php">Inscription & Soumission</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/conferencier.php") { ?>  class="active"   <?php   }  ?>><a href="conferencier.php">Conferencier</a></li>
                <li <?php if($_SERVER['SCRIPT_NAME']=="/comite-organisation.php" || $_SERVER['SCRIPT_NAME']=="comite-scientifique.php") { ?>  class="active"   <?php   }  ?>><a href="index.php#">Comité</a>
                  <ul class="dropdown">
                    <li><a href="comite-scientifique.php">- Scientifique</a></li>
                    <li><a href="comite-organisation.php">- Organisation</a></li>
                    <!-- I need no dropdown -->
                    <!-- <li><a href="index.php#">- Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="index.php#">- Dropdown Item</a></li>
                        <li><a href="index.php#">- Dropdown Item</a></li>
                        <li><a href="index.php#">- Dropdown Item</a></li>
                        <li><a href="index.php#">- Dropdown Item</a></li>
                      </ul>
                    </li> -->
                  </ul>
                </li>
              </ul>
              <!-- I need no tickets nigga -->
              <!-- <a href="index.php#" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Get Tickets <i
                  class="zmdi zmdi-long-arrow-right"></i></a> -->
            </div>

          </div>
        </nav>
      </div>
    </div>
  </header>