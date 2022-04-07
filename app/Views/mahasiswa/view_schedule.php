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
        <h1 class="h3 mb-0 text-gray-800">SCHEDULE</h1>
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
        <a href="#" onclick="printDiv('printableArea')" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Print PDF</a>
            
    </div> 
    <div class="col-xl-12 col-md-12 mb-4">
        <div id="printableArea" class="card border-F5CB5C shadow h-100 py-2">
            <div class="card-body">
                <center><h5>6th Semester Schedule</h5></center>
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
                                        <div class="col-4">
                                            <h6>Nama</h6>
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
                                    <div class="row">
                                        <div class="col-4">
                                            <h6>SKS</h6>
                                        </div>
                                        <h6>:</h6>
                                        <div class="col-7">
                                            <h6 id="txt_total_sks">24</h6>
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
                                    <th scope="col">NO</th>
                                    <th scope="col">SUBJECT CODE</th>
                                    <th scope="col">SUBJECT NAME</th>
                                    <th scope="col">SKS</th>
                                    <th scope="col">TIME</th>
                                    <th scope="col">DAY</th>
                                    <th scope="col">LECTURE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1.</th>
                                    <td>13017A</td>
                                    <td>TECHNOPRENEURSHIP</td>
                                    <td>3</td>
                                    <td>16.00</td>
                                    <td>SUNDAY</td>
                                    <td>DR. ASU EDAN KANG NYERUAT, S.Pd., M.T</td>
                                </tr>
                                <tr>
                                    <th scope="row">2.</th>
                                    <td>13017A</td>
                                    <td>TECHNOPRENEURSHIP</td>
                                    <td>3</td>
                                    <td>16.00</td>
                                    <td>SUNDAY</td>
                                    <td>DR. ASU EDAN KANG NYERUAT, S.Pd., M.T</td>
                                </tr>
                                <tr>
                                    <th scope="row">3.</th>
                                    <td>13017A</td>
                                    <td>TECHNOPRENEURSHIP</td>
                                    <td>3</td>
                                    <td>16.00</td>
                                    <td>SUNDAY</td>
                                    <td>DR. ASU EDAN KANG NYERUAT, S.Pd., M.T</td>
                                </tr>
                                <tr>
                                    <th scope="row">4.</th>
                                    <td>13017A</td>
                                    <td>TECHNOPRENEURSHIP</td>
                                    <td>3</td>
                                    <td>16.00</td>
                                    <td>SUNDAY</td>
                                    <td>DR. ASU EDAN KANG NYERUAT, S.Pd., M.T</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr style="border-width: 5px;">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="row">
                                <div class="col-9">
                                    <h6>TOTAL SKS</h6>
                                </div>
                                <h6>:</h6>
                                <div class="col-2">
                                    <h6 id="txt_total_sks">24</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <h6>TOTAL SUBJECTS</h6>
                                </div>
                                <h6>:</h6>
                                <div class="col-2">
                                    <h6 id="txt_total_subjects">8</h6>
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
