angular.module('adminctrl', [])
    // Admin
    .controller('dashboardController', dashboardController)
    .controller('periodeController', periodeController)
    .controller('kriteriaController', kriteriaController)
    .controller('laptopController', laptopController)
    .controller('hitungController', hitungController)
    ;

function dashboardController($scope, dashboardServices) {
    $scope.$emit("SendUp", "Dashboard");
    $scope.datas = {};
    $scope.title = "Dashboard";
    // dashboardServices.get().then(res=>{
    //     $scope.datas = res;
    // })
}

function periodeController($scope, periodeServices, pesan, helperServices) {
    $scope.setTitle = "Periode";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    periodeServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            if ($scope.model.id) {
                periodeServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                })
            } else {
                periodeServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                })
            }
        })
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("periode").focus();
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            klasifikasiServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }

    $scope.subKlasifikasi = (param) => {
        document.location.href = helperServices.url + "admin/sub_klasifikasi/data/" + param.id;
    }
}

function kriteriaController($scope, kriteriaServices, pesan, helperServices) {
    $scope.setTitle = "Kriteria";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    kriteriaServices.get().then((res) => {
        $scope.datas = res;
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            if ($scope.model.id) {
                kriteriaServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $('#modelId').modal('hide');
                })
            } else {
                kriteriaServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $('#modelId').modal('hide');
                })
            }
        })
    }

    $scope.clear = ()=>{
        $scope.model = {};
    }

    $scope.edit = (item) => {
        item.bobot = parseInt(item.bobot);
        $scope.model = angular.copy(item);
        $('#modelId').modal('show');
        // document.getElementById("nama").focus();
    }

    $scope.showRange = (param) => {
        $.LoadingOverlay("show");
        setTimeout(() => {
            $.LoadingOverlay("hide");
            $scope.$applyAsync(x => {
                $scope.kriteria = param;
                $scope.model.kriteria_id = $scope.kriteria.id;
                $scope.setTitle = "Range";
            })
        }, 200);
    }

    $scope.saveRange = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            if ($scope.model.id) {
                RangeServices.put($scope.model).then(res => {
                    var data = $scope.kriteria.range.find(x=>x.id ==$scope.model.id);
                    if(data){
                        data.range = $scope.model.range;
                        data.bobot = $scope.model.bobot;
                    }
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                })
            } else {
                RangeServices.post($scope.model).then(res => {
                    $scope.model.id = res;
                    $scope.kriteria.range.push($scope.model);
                    $scope.model = {};
                    $scope.model.kriteria_id = $scope.kriteria.id;
                    pesan.Success("Berhasil menambah data");
                })
            }
        })
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            kriteriaServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
    $scope.deleteRange = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            RangeServices.deleted(param).then(res => {
                var index = $scope.kriteria.range.indexOf(param);
                $scope.kriteria.range.splice(index, 1);
                pesan.Success("Berhasil menghapus data");
            })
        });
    }
    $scope.back = () => {
        $.LoadingOverlay("show");
        setTimeout(() => {
            $.LoadingOverlay("hide");
            $scope.$applyAsync(x => {
                $scope.kriteria = {};
                $scope.setTitle = "Kriteria";
            })
        }, 200);
    }
}

function laptopController($scope, laptopServices, kriteriaServices, detailServices, pesan, helperServices) {
    $scope.setTitle = "Client";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.kriterias = {};
    $scope.model = {};
    $scope.setShow = 'laptop';
    $scope.back = ()=>{
        $scope.setShow = 'laptop';
    }
    laptopServices.get().then((res) => {
        $scope.datas = res;
        console.log(res);
        var count;
        $scope.datas.forEach(element => {
            element.detail.length > 0 ? count = true : count = false;
        });
        if(count){
            kriteriaServices.get().then((res) => {
                $scope.kriterias = res;
            })
        }
    })
    $scope.save = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            if ($scope.model.id) {
                laptopServices.put($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil mengubah data");
                    $('#modelId').modal('hide');
                })
            } else {
                laptopServices.post($scope.model).then(res => {
                    $scope.model = {};
                    pesan.Success("Berhasil menambah data");
                    $('#modelId').modal('hide');
                })
            }
        })
    }

    $scope.saveDetail = () => {
        pesan.dialog('Yakin ingin?', 'Yes', 'Tidak').then(res => {
            detailServices.put($scope.model).then(res => {
                var data = $scope.laptop.detail.find(x=>x.id ==$scope.model.id);
                if(data){
                    data.nilai = $scope.model.nilai;
                    data.satuan = $scope.model.satuan;
                }
                $scope.model = {};
                pesan.Success("Berhasil mengubah data");
            })
        })
    }

    $scope.edit = (item) => {
        $scope.model = angular.copy(item);
        document.getElementById("merk").focus();
        $('#modelId').modal('show');
    }

    $scope.editDetail = (param)=>{
        $scope.model = angular.copy(param);
        document.getElementById("nama").focus();
        $scope.itemKriteria = $scope.datasKriterias.find(x=>x.id==$scope.model.kriteria_id);
        console.log($scope.itemKriteria);
    }

    $scope.delete = (param) => {
        pesan.dialog('Yakin ingin?', 'Ya', 'Tidak').then(res => {
            laptopServices.deleted(param).then(res => {
                pesan.Success("Berhasil menghapus data");
            })
        });
    }

    $scope.showDetail = (param) => {
        $.LoadingOverlay("show");
        setTimeout(() => {
            $.LoadingOverlay("hide");
            $scope.$applyAsync(x => {
                kriteriaServices.get().then((res) => {
                    $scope.laptop = param;
                    $scope.setShow = 'detail';
                    $scope.datasKriterias = res;
                })
            })
        }, 200);
    }

    $scope.tampil = (param)=>{
        console.log(param);
    }
}

function hitungController($scope, hitungServices, pesan, helperServices) {
    $scope.setTitle = "Penilaian";
    $scope.$emit("SendUp", $scope.setTitle);
    $scope.datas = {};
    $scope.model = {};
    $scope.setShow = "client";
    hitungServices.get().then((res) => {
        $scope.datas = res;
        console.log(res);
    })

    $scope.hitung = ()=>{
        $.LoadingOverlay("show");
        hitungServices.hitung($scope.datas).then((res)=>{
            $scope.rekom = res;
            console.log(res);
            $.LoadingOverlay("hide");
            $("#rekomendasi").modal('show');
        })
    }
}
