<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Comic extends BaseController
{
    protected $komikModel;

    public function __construct()
    {
        $this->komikModel = new KomikModel();
    }

    public function index()
    {
        // $komik =  $this->komikModel->findAll();
        $data = [
            'title' => 'Data Komik',
            'komik' => $this->komikModel->getKomik()
        ];
        return view('Comic/index', $data);
    }
    public function detail($slug)
    {
        $komik = $this->komikModel->getKomik($slug);
        $data = [
            'title' => 'Detail Komik',
            'komik' => $this->komikModel->getbyId($komik['Id'])
        ];

        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('judul komik ' . $slug . ' tidak ditemukan');
        }
        return view('Comic/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Komik',
            'validation' => \Config\services::validation()
        ];
        return view('Comic/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[komik.judul]',
                'errors' => [
                    'required' => '{field}  komik harus diisi',
                    'is_unique' => '{field}  komik sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field}  komik harus diisi',

                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field}  komik harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\services::validation();
            return redirect()->to("/Comic/create")
                ->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        echo $slug;

        $this->komikModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to("/Comic");
    }

    public function delete($id)
    {
        $this->komikModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil Dihapus.');
        return redirect()->to("/Comic");
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Data Komik',
            'validation' => \Config\services::validation(),
            'komik' => $this->komikModel->getKomik($slug)
        ];
        return view('Comic/Edit', $data);
    }

    public function update($id)
    {
        $komiklama = $this->komikModel->getKomik($this->request->getVar('slug'));

        echo $this->request->getVar('judul');
        if ($komiklama['judul'] == $this->request->getVar('judul')) {
            $rules_judul = 'required';
        } else {
            $rules_judul = 'required|is_unique[komik.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rules_judul,
                'errors' => [
                    'required' => '{field}  komik harus diisi',
                    'is_unique' => '{field}  komik sudah terdaftar'
                ]
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field}  komik harus diisi',

                ]
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field}  komik harus diisi'
                ]
            ]
        ])) {
            $validation = \Config\services::validation();
            return redirect()->to("/Comic/edit/" . $this->request->getVar('slug'))
                ->withInput()->with('validation', $validation);
        }

        $slug = url_title($this->request->getVar('judul'), '-', true);
        echo $slug;

        $this->komikModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Diubah.');

        return redirect()->to("/Comic");
    }
}

// cara connect tanpa model
/*   $db = \Config\Database::connect();
$komik = $db->query('SELECT * FROM Komik');
foreach ($komik->getResultArray() as $row) {
    d($row);
} */
