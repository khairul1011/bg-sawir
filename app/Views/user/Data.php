
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
         
          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
             

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">John Doe</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">Billing</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="auth-login-basic.html">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tabel/</span> Data</h4>

               <!-- Basic Bootstrap Table -->
               <div class="card">
               <div class="row">
                <div class="col-md-6">
                      <h5 class="card-header"><?= $judul; ?></h5>
                </div>
                 <div class="col-md-6 px-5 py-3">
                      <button type="button" 
                              class="btn btn-primary float-end" 
                              data-bs-toggle="modal"
                              data-bs-target="#basicModal">
                              Tambah Data
                      </button>
                 </div>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Terdakwa</th>
                        <th>Jenis</th>
                        <th>Pasal</th>
                        <th>Status</th>
                        <th>Aksi</th>
                        <th>Detail</th>

                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php foreach($unit as $row) : ?>
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $row['nama_terdakwa'] ?></strong></td>
                        <td><?= $row['merek'] ?></td>
                        <td>
                        <?= $row['pasal'] ?>
                        </td>
                        <td>
                            <?php if ($row['status'] === 'pending') : ?>
                              <span class="badge bg-label-warning me-1"><?= $row['status'] ?>
                            <?php elseif ($row['status'] === 'selesai') : ?>
                              <span class="badge bg-label-primary me-1"><?= $row['status'] ?>
                            <?php else : ?>
                                <span class="badge bg-label-danger me-1"><?= $row['status'] ?>
                            <?php endif; ?>
                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                        <td>
                        <button type="button" 
                              class="btn btn-info btn-sm " 
                              data-bs-toggle="modal"
                              data-bs-target="#fullscreenModal">
                              <i class='bx bx-info-circle'></i>
                      </button>
                        </td>
                      </tr>
                      <?php endforeach; ?>

                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">khy</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Modal Tambah Data Unit -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="/user/tambah" method="post">
            <div class="row">
              <div class="col mb-3">
                <label for="namaTerdakwa" class="form-label">Nama Terdakwa</label>
                <input type="text" name="namaTerdakwa" class="form-control" placeholder="Nama Lengkap" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="merek" class="form-label">Merek Unit</label>
                <input type="text" name="merek" class="form-control" placeholder="Honda" />
              </div>
            </div>
            <div class="row g-2">
              <div class="col mb-0">
                <label for="noRangka" class="form-label">No Rangka</label>
                <input type="number" name="noRangka" class="form-control" placeholder="8234872" />
              </div>
              <div class="col mb-0">
                <label for="noMesin" class="form-label">No Mesin</label>
                <input type="number" name="noMesin" class="form-control" placeholder="1391813" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="pasal" class="form-label">Pasal</label>
                <input type="text" name="pasal" class="form-control" placeholder="Pasal 1" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="pasal" class="form-label">Putusan</label>
                <input type="text" name="pasal" class="form-control" placeholder="pending" />
              </div>
            </div>
            <div class="row">
              <div class="col mb-3">
                <label for="tanggalMasuk" class="form-label">Tanggal Masuk</label>
                <input type="date" name="tanggalMasuk" class="form-control" placeholder="" />
              </div>
            </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Full Screen Modal -->
    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFullTitle">Detail</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p>
              Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
              facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum
              at eros.
            </p>
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>