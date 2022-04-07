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
                        <h1 class="h3 mb-0 text-gray-800">KHS (Kartu Hasil Studi)</h1>
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

                    <!-- KHS Mahasiswa -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <div class="col-8 justify-content-end">
                                <div class="small mb-1">Filter by Semester:</div>
                                    <div class="dropdown mb-4">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="cb_semester" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Semester
                                        </button>
                                    <div class="dropdown-menu animated--fade-in" aria-labelledby="cb_semester">
                                        <a class="dropdown-item" href="#">1st Semester</a>
                                        <a class="dropdown-item" href="#">2nd Semester</a>
                                        <a class="dropdown-item" href="#">3rdSemester</a>
                                        <a class="dropdown-item" href="#">4th Semester</a>
                                        <a class="dropdown-item" href="#">5th Semester</a>
                                        <a class="dropdown-item" href="#">6th Semester</a>
                                        <a class="dropdown-item" href="#">7th Semester</a>
                                        <a class="dropdown-item" href="#">8th Semester</a>
                                    </div>
                                </div>        
                            </div>
                        <a href="#" type="button" onclick="printDiv('printableArea')" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Print PDF</a>
                    </div> 

                    <div class="row">
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div id="printableArea" class="card border-F5CB5C shadow h-100 py-2">
                                <div class="card-body">
                                    <center><h5>Statement of Result</h5></center>
                                    <br>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-xl-2 col-md-2 mb-4">
                                                <div class="row align-items-center" style="text-align: center;">
                                                    <div class="col mr-2 align-items-center text-align-center">
                                                        <img src="assets/image/logo-campus.png" alt="student" srcset="" style="margin-top: 10px; width: 40%;">                    
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-10 col-md-10 mb4" style="text-align: center;">
                                                <div class="row" style="text-align: left;">
                                                    <div class="col-xl-6 col-md-6 mb-2 align-items-center text-align-left">
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <h6>Nama</h6>
                                                            </div>
                                                            <h6>:</h6>
                                                            <div class="col-9">
                                                                <h6>Angelista Dewi</h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <h6>NIM</h6>
                                                            </div>
                                                            <h6>:</h6>
                                                            <div class="col-9">
                                                                <h6>092019030009</h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-2">
                                                                <h6>Alamat</h6>
                                                            </div>
                                                            <h6>:</h6>
                                                            <div class="col-9">
                                                                <h6>Jl. Wahana Bakti Desa.Mangunjaya Kecamatan.Tambun Selatan Kabupaten.Bekasi </h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-6 col-md-6 mb-2 align-items-center text-align-left">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <h6>Program</h6>
                                                            </div>
                                                            <h6>:</h6>
                                                            <div class="col-7">
                                                                <h6>Bachelor of Ecomonic & Bussiness</h6>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <h6>Semester</h6>
                                                            </div>
                                                            <h6>:</h6>
                                                            <div class="col-7">
                                                                <h6>6</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr style="border-width: 5px;">
                                        <div class="table-responsive">
                                            <table class="table text-dark" style="text-align: center;">
                                                <thead style="background-color: #F5CB5C;">
                                                    <tr>
                                                    <th scope="col">SUBJECT CODE</th>
                                                    <th scope="col">SUBJECT DESCRIPTION</th>
                                                    <th scope="col">TYPE</th>
                                                    <th scope="col">CREDIT HOUR</th>
                                                    <th scope="col">GRADE</th>
                                                    <th scope="col">POINT</th>
                                                    <th scope="col">TOTAL POINT</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">13017A</th>
                                                        <td>TECHNOPRENEURSHIP</td>
                                                        <td>N</td>
                                                        <td>2</td>
                                                        <td>A</td>
                                                        <td>4</td>
                                                        <td>8</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">13417A</th>
                                                        <td>INDUSTRIAL INTERNSHIP</td>
                                                        <td>N</td>
                                                        <td>4</td>
                                                        <td>A</td>
                                                        <td>4</td>
                                                        <td>16</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">10017A</th>
                                                        <td>PENDIDIKAN AGAMA</td>
                                                        <td>N</td>
                                                        <td>2</td>
                                                        <td>A</td>
                                                        <td>4</td>
                                                        <td>8</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr style="border-width: 5px;">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h6>TOTAL NUMBER OF SUBJECT TAKEN</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-2">
                                                        <h6>3</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h6>CREDIT HOUR</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-2">
                                                        <h6>8</h6>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-9">
                                                        <h6>TOTAL CREDIT HOUR</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-2">
                                                        <h6>80</h6>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-xl-6 col-md-6">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>SESSION</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-4">
                                                        <h6>202209</h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>GPA</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-4">
                                                        <h6>4</h6>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-3">
                                                        <h6>CGPA</h6>
                                                    </div>
                                                    <h6>:</h6>
                                                    <div class="col-4">
                                                        <h6>3.6</h6>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->