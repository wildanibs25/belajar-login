 <?php include "../actions/authCheck.php" ?>
 <header>
     <nav
         class="navbar navbar-expand-md navbar-light bg-light">
         <div class="container">
             <a class="navbar-brand" href="#">Navbar</a>
             <button
                 class="navbar-toggler d-lg-none"
                 type="button"
                 data-bs-toggle="collapse"
                 data-bs-target="#collapsibleNavId"
                 aria-controls="collapsibleNavId"
                 aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="collapsibleNavId">
                 <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                     <li class="nav-item">
                         <a class="nav-link active" href="#" aria-current="page">Home
                             <span class="visually-hidden">(current)</span></a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">Link</a>
                     </li>
                     <?php if ($_SESSION['role'] == 'admin') : ?>
                         <li class="nav-item dropdown">
                             <a
                                 class="nav-link dropdown-toggle"
                                 href="#"
                                 id="dropdownId"
                                 data-bs-toggle="dropdown"
                                 aria-haspopup="true"
                                 aria-expanded="false">Dropdown</a>
                             <div
                                 class="dropdown-menu"
                                 aria-labelledby="dropdownId">
                                 <a class="dropdown-item" href="#">Action 1</a>
                                 <a class="dropdown-item" href="#">Action 2</a>
                             </div>
                         </li>
                     <?php endif ?>
                 </ul>
                 <div class="d-flex">
                     <div class="me-3">
                         <span class="fw-bold d-block"><?= $_SESSION['name'] ?></span>
                         <small class="d-block"><?= $_SESSION['email'] ?></small>
                     </div>
                     <a href="../actions/signOut.php" class="btn btn-outline-secondary">Logout</a>
                 </div>
             </div>
         </div>
     </nav>

 </header>