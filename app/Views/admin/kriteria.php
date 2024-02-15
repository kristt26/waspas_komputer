<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>
<div ng-controller="kriteriaController">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Kriteria</h4>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId" ng-click="clear()"><i class="fas fa-plus"></i></button>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table pmd-table table-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kriteria</th>
                                    <th>Kode</th>
                                    <th>Bobot</th>
                                    <th>Type</th>
                                    <th width="15%"><i class="fas fa cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="item in datas">
                                    <td>{{$index+1}}</td>
                                    <td>{{item.nama}}</td>
                                    <td>{{item.kode}}</td>
                                    <td>{{item.bobot}}</td>
                                    <td>{{item.type}}</td>
                                    <td>
                                        <button type="submit" class="btn btn-warning pmd-ripple-effect btn-sm" ng-click="edit(item)"><i class="fas fa-edit fa-sm fa-fw"></i></button>
                                        <button type="submit" class="btn btn-danger pmd-ripple-effect btn-sm" ng-click="delete(item)"><i class="fas fa-trash-alt fa-sm fa-fw"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                                <label class="control-label">Nama Kriteria</label>
                                <input type="text" class="form-control" id="nama" ng-model="model.nama" required>
                            </div>
                            <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                <label class="control-label">Kode</label>
                                <input type="text" class="form-control" ng-model="model.kode" required>
                            </div>
                            <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                <label class="control-label">Bobot</label>
                                <input type="text" class="form-control" ng-model="model.bobot" placeholder="Bobot dalam %" required>
                            </div>
                            <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                <label class="control-label">Type</label>
                                <select class="form-control" ng-model="model.type">
                                    <option value="Benefits">Benefits</option>
                                    <option value="Cost">Cost</option>
                                </select>
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