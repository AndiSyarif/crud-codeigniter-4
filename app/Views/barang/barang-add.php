<?= $this->extend('template/main') ?>
<?= $this->section('title') ?>
Add Barang
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $this->renderSection('title') ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/barang">Barang</a></li>
                        <li class="breadcrumb-item active">Add Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/barang" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" novalidate action="/barang" method="POST">
                            <?= csrf_field() ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control <?= session('errors.name') ? 'is-invalid' : '' ?>" id="name" placeholder="Name Barang" value="<?= old('name') ?>" required>
                                            <?php if (session('errors.name')) : ?>
                                                <span class="invalid-feedback text-danger"><?= session('errors.name') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" name="category" class="form-control <?= session('errors.category') ? 'is-invalid' : '' ?>" id="category" placeholder="Category" value="<?= old('category') ?>" required>
                                            <?php if (session('errors.category')) : ?>
                                                <span class="invalid-feedback text-danger"><?= session('errors.category') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="supplier">Supplier</label>
                                            <input type="text" name="supplier" class="form-control <?= session('errors.supplier') ? 'is-invalid' : '' ?>" id="supplier" placeholder="Supplier" value="<?= old('supplier') ?>" required>
                                            <?php if (session('errors.supplier')) : ?>
                                                <span class="invalid-feedback text-danger"><?= session('errors.supplier') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="stock">Stock</label>
                                            <input type="number" min="1" name="stock" class="form-control <?= session('errors.stock') ? 'is-invalid' : '' ?>" id="stock" placeholder="Stock" value="<?= old('stock') ?>" required>
                                            <?php if (session('errors.stock')) : ?>
                                                <span class="invalid-feedback text-danger"><?= session('errors.stock') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" name="price" class="form-control <?= session('errors.price') ? 'is-invalid' : '' ?>" id="price" placeholder="Price" value="<?= old('price') ?>" required>
                                            <?php if (session('errors.price')) : ?>
                                                <span class="invalid-feedback text-danger"><?= session('errors.price') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="note">Note</label>
                                            <textarea name="note" id="note" class="form-control <?= session('errors.note') ? 'is-invalid' : '' ?>" cols="10" rows="5" placeholder="Note"><?= old('note') ?></textarea>
                                            <?php if (session('errors.note')) : ?>
                                                <span class="invalid-feedback text-danger"><?= session('errors.note') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                                    Reset</button>
                                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>