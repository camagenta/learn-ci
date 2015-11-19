<?php
class Pages extends CI_Controller {
		/*
			Belajar Static Pages
			http://www.codeigniter.com/user_guide/tutorial/static_pages.html

		*/

        public function view($page = 'home') // kalo tidak ada yang dipanggil, home akan dieksekusi
        {
        	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php')) // mengecek apakah halaman statik yg dipanggil ada
	        {
	                // Whoops, we don't have a page for that!
	                show_404();
	        }

	        // data "title" akan dikirim ke view, dipanggil layaknya variabel biasa.
	        $data['title'] = ucfirst($page); // Capitalize the first letter

	        $this->load->view('templates/header', $data);	// memanggil header view
	        $this->load->view('pages/'.$page, $data);		// $data adalah kumpulan variabel yang akan dikirim ke view
	        $this->load->view('templates/footer', $data);	// memanggil footer view
        }
}