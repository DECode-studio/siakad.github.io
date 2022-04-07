<!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <?php include "template/navigation.php"; ?>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">KRS (Kartu Rencana Studi)</h1>
                        <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-4 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->
                    </div> 

                    <!-- Data Mahasiswa Row -->
                    <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card border-primary border-left-secondary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-2 col-md-2 mb-4">
                                        <div class="row align-items-center" style="text-align: center;">
                                            <div class="col mr-2 align-items-center text-align-center">
                                                <img src="assets/image/student.png" alt="student" srcset="" class="profile">                    
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-10 col-md-10 mb4">
                                        <div class="row">
                                            <div class="col-xl-4 col-md-4 mb-2 align-items-center text-align-left">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Student Name</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>Angelista Dewi</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>NIM</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>092019030009</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-md-4 mb-2 align-items-center text-align-left">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Faculty</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>Economics & Bussiness</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Study Program</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>Bachelor of Economics</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Max SKS</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>22</h6>
                                                    </div>
                                                </div>
                                                <div class="row" style="color: red;">
                                                    <div class="col-4">
                                                        <h6>SKS Added</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>0</h6>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-4 col-md-4 mb-2 align-items-center text-align-left">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Angkatan</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>2019</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <h6>Dosen Wali</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-7">
                                                        <h6>Robert Joseph S.E</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">List Course</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead style="background-color: #F5CB5C;">
                                            <tr>
                                                <th scope="col">SUBJECT CODE</th>
                                                <th scope="col">SUBJECT DESCRIPTION</th>
                                                <th scope="col">LECTURE</th>
                                                <th scope="col">CREDIT</th>
                                                <th scope="col">SEMESTER</th>
                                                <th scope="col">ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">13017A</td>
                                                <td>TECHNOPRENEURSHIP</td>
                                                <td>HADI WIJAYA S.E</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Checklist</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">13017A</td>
                                                <td>TECHNOPRENEURSHIP</td>
                                                <td>HADI WIJAYA S.E</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Checklist</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="row">13017A</td>
                                                <td>TECHNOPRENEURSHIP</td>
                                                <td>HADI WIJAYA S.E</td>
                                                <td>2</td>
                                                <td>1</td>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">Checklist</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->