<?php 

class Mpdf extends CI_Controller{
	public function index()
	{
		$data['judul'] = 'Download';
		$this->load->view('templates/header', $data);
		$this->load->view('mpdf/mpdf_v');
		$this->load->view('templates/footer');
	}
 
	public function print()
	{
		$html = $this->load->view('mpdf/html_to_pdf', [],true);
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->Bookmark('Start of the document');

		$mpdf->WriteHTML($html);
		$mpdf->Output();
		// $mpdf->Bookmark('Start of the document');
        // $mpdf->WriteHTML('<div>Section 1 text</div>');
        // $mpdf->Output();
	}

}
?>