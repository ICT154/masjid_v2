<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Api/JadwalSholat_model', 'jadwalSholat');
		$this->load->model('M_gzl', 'GZL');
		$this->load->model('Back/Kaskas', 'KAS');
	}


	public function index()
	{

		$arrayName = array(
			'JadwalSholat' => $this->jadwalSholat->getJadwalSholat(),
			'JumatSekarang' => $this->GZL->getFridayFromDate(date("Y-m-d")),
			'JumatSebelumDanSelanjut' => $this->GZL->getPreviousAndNextFriday(date("Y-m-d")),
			'GetImamKhatibSekarang' => $this->jadwalSholat->getImamKhatib($this->GZL->getFridayFromDate(date("Y-m-d"))),
			'GetImamKhatibSebelumDanSelanjut' => $this->jadwalSholat->getImamKhatib($this->GZL->getPreviousAndNextFriday(date("Y-m-d"))['next_friday']),
			// 'GetSaldoMingguKemarin' => $this->KAS->getSaldoMingguan($this->jadwalSholat->getImamKhatib($this->GZL->getPreviousAndNextFriday(date("Y-m-d"))['previous_friday'])),
			// 'GetSaldoMingguIni' => $this->KAS->getSaldoMingguan($this->GZL->getFridayFromDate(date("Y-m-d")))
		);

		if ($arrayName['JumatSekarang'] == $arrayName['JumatSebelumDanSelanjut']['next_friday']) {
			$arrayName['JumatSebelumDanSelanjut']['next_friday'] = $this->GZL->getPreviousAndNextFriday($arrayName['JumatSebelumDanSelanjut']['next_friday'])['next_friday'];
			$arrayName['GetImamKhatibSebelumDanSelanjut'] = $this->jadwalSholat->getImamKhatib($arrayName['JumatSebelumDanSelanjut']['next_friday']);
		}

		$jumat_sekarang = $this->GZL->getFridayFromDate(date("Y-m-d"));
		$jumat_kemarin = $this->GZL->getPreviousAndNextFriday(date("Y-m-d"))['previous_friday'];
		$jumat_kemarin_kemarin = $this->GZL->getPreviousAndNextFriday($jumat_kemarin)['previous_friday'];

		$arrayName['GetSaldoMingguKemarin'] = $this->KAS->getSaldoMingguan($jumat_kemarin);
		$arrayName['GetSaldoMingguIni'] = $this->KAS->getSaldoMingguan($jumat_sekarang);
		$arrayName['GetSaldoMingguKemarinKemarinPengeluaran'] = $this->KAS->getSaldoMingguanRange($jumat_kemarin_kemarin, $jumat_kemarin, "keluar");
		$arrayName['GetSaldoMingguKemarinKemarinPemasukan'] = $this->KAS->getSaldoMingguanRange($jumat_kemarin_kemarin, $jumat_kemarin, "masuk");



		$this->load->view('templates/header', $arrayName);
		$this->load->view('display/index');
		$this->load->view('templates/footer');
		$this->load->view('display/index-js');
	}
}
