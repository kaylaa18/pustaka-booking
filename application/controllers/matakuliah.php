<?php
class matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    
    public function cetak()
    {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('kode', 'Kode Matakuliah', array('required', 'min_length[3]'));
        $this->form_validation->set_rules('nama', 'Nama Matakuliah', array('required', 'min_length[3]'));

        $this->form_validation->set_message('min_length', '<span class="error_msg">Ada kesalahan:</span> <span class="error_desc">Setidaknya terdapat {param} karakter cuk!</span>');
        $this->form_validation->set_message('required', '<span class="error_msg">Ada kesalahan:</span> <span class="error_desc">{field} harus diisi cuk!</span>');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('View-form-matakuliah');
            echo form_error('kode', '<script>alert("Ada kesalahan pada \'Kode Matakuliah\' cuk!")</script>');
            echo form_error('nama', '<script>alert("Ada kesalahan pada \'Nama Matakuliah\' cuk!")</script>');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];

            $this->load->view('View-data-matakuliah', $data);
        }
    }
}
