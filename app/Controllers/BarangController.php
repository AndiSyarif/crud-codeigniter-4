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
        // Show create form
    }

    public function create()
    {
        // Load the form validation library
        $validation = \Config\Services::validation();

        // If the form is submitted
        if ($this->request->getPost()) {
            // Validate input
            if (!$validation->run($this->request->getPost())) {
                // Validation failed, redirect back to the form with errors
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }

            // Validated successfully, prepare data to store
            $data = [
                'name' => $this->request->getPost('name'),
                'category' => $this->request->getPost('category'),
                'supplier' => $this->request->getPost('supplier'),
                'stock' => $this->request->getPost('stock'),
                'price' => $this->request->getPost('price'),
                'note' => $this->request->getPost('note'),
            ];

            // Create a new record using the model
            $model = new BarangModel();
            $model->insert($data);

            // Redirect to a success page or another view
            return redirect()->to('/barangs')->with('success', 'Data has been added successfully!');
        }

        // If not submitted, show the form view
        return view('barang/create');
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
