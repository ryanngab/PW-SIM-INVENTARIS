@extends('layout.main')
@section('content')

<div class="card  mb-10 border border-primary">
    <div class="card-header">
        <div class="card-title">
            <h2>{{$title}}</h2>
        </div>
        <div class="card-toolbar">
            <a href="{{route('barang.index')}}" class="btn btn-danger btn-sm">Back</a>
        </div>
    </div>
</div>
<div class="card rounded border border-primary">
    <!--begin::Modal header-->
    <div class="card-body">
        <!--begin:Form-->
        <form class="form" action="{{route('barang.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name Barang</span>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Masukan Nama Barang" name="nama_barang" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Pilih Kondisi barang </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select name="kondisi_barang" data-control="select2"
                            data-placeholder="Pilih kondisi barang"
                            class="form-select form-select-solid">
                            <option value="">Pilih Status ....</option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak">Rusak</option>
                        </select>
                        <!--end::Select-->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Jumlah Barang</span>
                        </label>
                        <input type="number" class="form-control form-control-solid"
                            placeholder="Masukan Jumlah Barang" name="jmlh_barang" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Pilih Nomor Ruangan</span>
                        </label>
                        <select name="nomor_ruangan" data-control="select2"
                            data-placeholder="Pilih nomor ruangan"
                            class="form-select form-select-solid">
                            <option value="">Pilih Status ....</option>
                            <option value="Baik">Baik</option>
                            <option value="Buruk">Buruk</option>
                        </select>
                        <!--end::Select-->
                    </div>
                </div>
            </div>
            <!--begin::Actions-->
            <div class="text-end">
                <button type="reset"
                    class="btn btn-danger me-3 btn-sm"><i
                        class="bi bi-x-lg"></i>Batal</button>
                <button type="submit"
                    class="btn btn-primary btn-sm">
                    <span class="indicator-label"><i
                            class="bi bi-check-lg"></i>Submit</span>
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end:Form-->
    </div>
    <!--end::Modal body-->
</div>
@endsection