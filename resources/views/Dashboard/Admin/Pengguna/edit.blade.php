@extends('layout.main')
@section('content')

<div class="card  mb-10 border border-primary">
    <div class="card-header">
        <div class="card-title">
            <h2>{{$title}}</h2>
        </div>
        <div class="card-toolbar">
            <a href="{{route('pengguna.index')}}" class="btn btn-danger btn-sm">Back</a>
        </div>
    </div>
</div>
<div class="card rounded border border-primary">
    <!--begin::Modal header-->
    <div class="card-body">
        <!--begin:Form-->
        <form class="form" action="#">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <input type="text" class="form-control form-control-solid"
                            placeholder="Masukan Nama Pengguna" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column mb-5 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                            <span class="required">Masukan Role </span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Select-->
                        <select name="role" data-control="select2"
                            data-placeholder="Pilih Role Yang di inginkan"
                            class="form-select form-select-solid">
                            <option value="">Pilih Role ....</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                            <option value="Guru">Guru</option>
                        </select>
                        <!--end::Select-->
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Email</span>
                </label>
                <input type="email" class="form-control form-control-solid"
                    placeholder="Masukan Email Pengguna" />
            </div>
            <div class="d-flex flex-column mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                    <span class="required">Password</span>
                </label>
                <input type="password" class="form-control form-control-solid"
                    placeholder="Masukan Password" />
            </div>

            <!--begin::Actions-->
            <div class="text-end">
                <button class="btn btn-secondary me-3 btn-sm" type="submit"><i
                        class="bi bi-pencil-square"></i>Draft</button>
                <button type="reset" id="kt_modal_new_target_cancel"
                    class="btn btn-danger me-3 btn-sm"><i
                        class="bi bi-x-lg"></i>Batal</button>
                <button type="submit" id="kt_modal_new_target_submit"
                    class="btn btn-primary btn-sm">
                    <span class="indicator-label"><i
                            class="bi bi-check-lg"></i>Submit</span>
                    <span class="indicator-progress">Please wait...
                        <span
                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end:Form-->
    </div>
    <!--end::Modal body-->
</div>

@endsection