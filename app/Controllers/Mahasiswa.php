<?php namespace App\Controllers;

class Mahasiswa extends BaseController
{
	public function dashboard()
	{
        $data = [
            'title'=> 'Siakad || Dashboard'
        ];

        echo view('mahasiswa/template/head', $data);
		echo view('mahasiswa/dashboard');
        echo view('mahasiswa/template/bottom');
	}
    
    public function viewkhs()
	{
        $data = [
            'title'=> 'Siakad || KHS'
        ];

        echo view('mahasiswa/template/head', $data);
		echo view('mahasiswa/view_khs');
        echo view('mahasiswa/template/bottom');
	}
    
    public function viewkrs()
	{
        $data = [
            'title'=> 'Siakad || KRS'
        ];

        echo view('mahasiswa/template/head', $data);
		echo view('mahasiswa/view_krs');
        echo view('mahasiswa/template/bottom');
	}
    
    public function schedule()
	{
        $data = [
            'title'=> 'Siakad || Schedule'
        ];

        echo view('mahasiswa/template/head', $data);
		echo view('mahasiswa/view_schedule');
        echo view('mahasiswa/template/bottom');
	}

    public function viewassignment()
	{
        $data = [
            'title'=> 'Siakad || Assignment Submission'
        ];

        echo view('mahasiswa/template/head', $data);
		echo view('mahasiswa/view_assignment');
        echo view('mahasiswa/template/bottom');
	}

    public function viewcourse()
	{
        $data = [
            'title'=> 'Siakad || Course List'
        ];

        echo view('mahasiswa/template/head', $data);
		echo view('mahasiswa/view_course');
        echo view('mahasiswa/template/bottom');
	}
}