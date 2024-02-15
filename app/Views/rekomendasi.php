<?= $this->extend('layout/home') ?>
<?= $this->section('content') ?>
<div class="laptop1">
    <div class="container">
        <div ng-controller="hitungController">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Inputan nilai yang diinginkan</h3>
                        </div>
                        <form ng-submit="hitung()">
                            <div class="card-body">
                                <div ng-repeat="item in datas" ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">{{item.nama}}</label>
                                    <input type="text" class="form-control" id="input{{$index}}" ng-model="item.nilai" required>
                                </div>
                                <!-- <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">Kode</label>
                                    <input type="text" class="form-control" ng-model="model.kode" required>
                                </div>
                                <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">Bobot</label>
                                    <input type="number" class="form-control" ng-model="model.bobot" placeholder="Bobot dalam %" required>
                                </div>
                                <div ng-class="{'form-group pmd-textfield pmd-textfield-floating-label': !model.id, 'form-group pmd-textfield': model.id}">
                                    <label class="control-label">Type</label>
                                    <select class="form-control" ng-model="model.type">
                                        <option value="Benefits">Benefits</option>
                                        <option value="Cost">Cost</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="card-footer">
                                <button type="reset" class="btn btn-secondary">Clear</button>
                                <button type="submit" class="btn btn-primary">Hasil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="rekomendasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Daftar Rekomendasi Laptop</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Merk</th>
                                            <th>Type</th>
                                            <th ng-repeat="item in datas">{{item.nama}}</th>
                                            <th>Preferansi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="item in rekom.alternatif">
                                            <td>{{$index+1}}</td>
                                            <td>{{item.merk}}</td>
                                            <td>{{item.jenis}}</td>
                                            <td ng-repeat="set in item.nilai">{{set.nilai}}</td>
                                            <td>{{item.preferensi}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>