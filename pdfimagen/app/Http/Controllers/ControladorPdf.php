<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDF;

class ControladorPdf extends Controller
{
    //
    public function GeneraPdf()
    {
    	$data = ['foo' => 'bar'];
		$pdf = PDF::loadView('pdf.rpt', $data);
		return $pdf->stream('document.pdf');
	}
}
