<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;

class BarangController extends BaseController
{
    public function index()
    {
        $model = new BarangModel();
        $barang = $model->findAll();
        $title  = 'Barang';

        return view('barang/barang', [
            'barang' => $barang,
            'title' => $title
        ]);
    }

    public function new()
    {

        $title  = 'Add Barang';

        return view('barang/barang-add', [
            'title' => $title,
            'validation' => \Config\Services::validation(),
        ]);
    }

    public function create()
    {

        //validasi
        if (!$this->validate([
            'name' => 'required|is_unique[barangs.name]',
            'category' => 'required',
            'supplier' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'note' => 'required',
        ])) {
            $validation = \Config\Services::validation();

            //dd($validation);

            return redirect()->back()->withInput()->with('validation', $validation);
        };




        $data = [
            'name' => $this->request->getPost('name'),
            'category' => $this->request->getPost('category'),
            'supplier' => $this->request->getPost('supplier'),
            'stock' => $this->request->getPost('stock'),
            'price' => $this->request->getPost('price'),
            'note' => $this->request->getPost('note'),
        ];

        $model = new BarangModel();
        $model->insert($data);

        session()->setFlashdata('save', 'Barang has been saved !');

        return redirect()->to('/barang');
    }

    public function edit($id)
    {
        // Show edit form for a specific record
    }

    public function update($id)
    {
        // Handle form submission to update data for a specific record
    }

    public function delete($id)
    {
        // Handle record deletion
    }
}
