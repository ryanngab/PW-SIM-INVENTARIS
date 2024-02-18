@extends('layout.main')
@section('content')
    <div class="card  mb-10 border border-primary">
        <div class="card-header">
            <div class="card-title">
                <h2>{{ $title }}</h2>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('pengguna.index') }}" class="btn btn-danger btn-sm">Back</a>
            </div>
        </div>
    </div>
    <div class="card rounded border border-primary">
        <!--begin::Modal header-->
        <div class="card-body">
            <!--begin:Form-->
            <form class="form" action="#">

                <div class="d-flex flex-column mb-8 fv-row">
                    <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                        <span class="required">Nama Tanah</span>
                    </label>
                    <input type="text" class="form-control form-control-solid" placeholder="Masukan Nama Tanah" />
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Luas</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="luas" placeholder="panjang" />
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Lebar</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="lebar" placeholder="panjang" />
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">Panjang</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="panjang" placeholder="panjang" />
                        </div>

                    </div>
                </div>


                <!--begin::Actions-->
                <div class="text-end">
                    <button type="reset" class="btn btn-danger me-3 btn-sm"><i class="bi bi-x-lg"></i>Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm">
                        <span class="indicator-label"><i class="bi bi-check-lg"></i>Submit</span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
        </div>
        <!--end::Modal body-->
    </div>
@endsection
