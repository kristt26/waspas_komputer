<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div ng-controller="laptopController">
    <div class="row">
        <div class="col-md-12" ng-show="setShow=='laptop'">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Daftar Laptop</h4>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId" ng-click="clear()"><i class="fas fa-plus"></i></button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table pmd-table table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merek</th>
                                    <th>Type</th>
                                    <th ng-repeat="item in kriterias">{{item.nama}}</th>
                                    <th>Gambar</th>
                                    <th width="10%"><i class="fas fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in datas">
                                    <td>{{$index+1}}</td>
                                    <td>{{item.merk}}</td>
                                    <td>{{item.jenis}}</td>
                                    <td ng-if="item.detail.length>0" ng-repeat="nilai in item.detail">{{nilai.nilai}}</td>
                                    <td ng-if="item.detail.length==0" ng-repeat="item in kriterias"></td>
                                    <td><img ng-src="<?= base_url()?>assets/berkas/{{item.file}}" alt=""></td>
                                    <td>
                                        <button type="submit" class="btn btn-warning pmd-ripple-effect btn-sm" ng-click="edit(item)"><i class="fas fa-edit fa-sm fa-fw"></i></button>
                                        <button type="submit" class="btn btn-danger pmd-ripple-effect btn-sm" ng-click="delete(item)"><i class="fas fa-trash-alt fa-sm fa-fw"></i></button>
                                        <button type="submit" class="btn btn-info pmd-ripple-effect btn-sm" ng-click="showDetail(item)"><i class="fas fa-list"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12" ng-show="setShow=='detail'">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3>Input Data Detail Laptop</h3>
                        </div>
                        <form ng-submit="saveDetail()">
                            <div class="card-body">
                                <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">Nama Spesifikasi</label>
                                    <select class="form-control" id="nama" ng-options="item as item.nama for item in datasKriterias" ng-model="itemKriteria">
                                    </select>
                                </div>
                                <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">Nilai</label>
                                    <input type="text" class="form-control" id="nilai" ng-model="model.nilai" required>
                                </div>
                                <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">Satuan</label>
                                    <input type="text" class="form-control" id="satuan" ng-model="model.satuan" required>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary pmd-ripple-effect btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Daftar Kriteria</h3>
                            <button class="btn btn-secondary btn-sm" ng-click="back()"><i class="typcn typcn-arrow-back"></i>Kembali</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table pmd-table table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Nilai</th>
                                            <th width="20%"><i class="fas fa-cogs"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="item in laptop.detail">
                                            <td>{{$index+1}}</td>
                                            <td>{{item.nama}}</td>
                                            <td ng-if="item.nama!='Harga'">{{item.nilai}}{{item.satuan}}</td>
                                            <td ng-if="item.nama=='Harga'">{{item.satuan}}{{item.nilai}}</td>
                                            <td>
                                                <button type="button" class="btn btn-warning pmd-ripple-effect btn-sm" ng-click="editDetail(item)"><i class="fas fa-edit fa-sm fa-fw"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Kriteria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form ng-submit="save()">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                <label class="control-label">Merek</label>
                                <input type="text" class="form-control" id="merk" ng-model="model.merk" required>
                            </div>
                            <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                <label class="control-label">Type</label>
                                <input type="text" class="form-control" ng-model="model.jenis" required>
                            </div>
                            <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                <label class="control-label">Gambar</label>
                                <input type="file" class="form-control form-control-sm" name="gambar" ng-change="tampil(model.gambar)" accept="image/*, application/pdf" id="gambar" ng-model="model.gambar" base-sixty-four-input>
                                <span ng-if="model.file && !model.gambar"><img ng-src="<?= base_url()?>assets/berkas/{{model.file}}" alt="" width="50%"></span>
                                <span ng-if="model.gambar"><img data-ng-src="data:{{model.gambar.filetype}};base64,{{model.gambar.base64}}" alt="" width="50%"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>