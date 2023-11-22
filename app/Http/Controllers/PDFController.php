<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller{
    
    public function generatePDF(){
        // $users = User::get();

        // $data = [
        //     //'title' =­­> 'Welcome to laravelTuts.com',
        //     // 'date' ­=> date('m/d/Y'),
        //     'users' => $users   
        // ];

        $pdf = Pdf::loadView('myPDF' );

        return $pdf->download('test.pdf');

    }

}
