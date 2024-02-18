@extends('layout.main')
@section('content')
<div class="card card-flush border border-primary mb-5 mt-xl-9">
    <div class="card-header">
        <div class="card-title">
            <h3 class="fw-bolder mb-1">{{$title}}</h3>
        </div>
        <div class="card-toolbar">
            <div class="d-flex flex-warp">
            <button class="btn btn-primary btn-sm me-2">import Excel</button>
            <button class="btn btn-primary btn-sm me-2">import PDF</button>
            <a href="{{route('ruangan.add')}}" class="btn btn-primary btn-sm me-2"><i class="fa fa-plus-circle"></i>Tambah
                    Data</a>
            </div>
        </div>
    </div>
</div>
<div class="card border border-success rounded mb-5">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6 bg-success">
        <!--begin::Card title-->
        <div class="card-title">
            <div class="d-flex align-items-center position-relative my-1">
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                            height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                            fill="black" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-data-table-filter="search"
                    class="form-control form-control-solid w-250px ps-14"
                    placeholder="Search" />
            </div>
        </div>
        <div class="card-toolbar">
            <div class="d-flex justify-content-end" data-kt-data-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-primary me-3 btn-sm"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <path
                                d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter</button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px"
                    data-kt-menu="true">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Content-->
                    <div class="px-7 py-5" data-kt-data-table-filter="form">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <label class="form-label fs-6 fw-bold">Status Permohonan :
                            </label>
                            <select class="form-select form-select-solid fw-bolder"
                                data-kt-select2="true" data-placeholder="---Pilih---"
                                data-allow-clear="true" data-kt-data-table-filter="role"
                                data-hide-search="true">
                                <option></option>
                                <option value="Skema PPKA v2">Skema PPKA v2</option>
                                <option value="Skema Percobaan">Skema Percoaan</option>
                                <option value="Skema Dua Percobaa">Skema Dua Percobaan
                                </option>
                                <option value="Skema RPK">Skema RPK</option>
                            </select>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset"
                                class="btn btn-light btn-active-light-primary fw-bold me-2 px-6"
                                data-kt-menu-dismiss="true"
                                data-kt-data-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary fw-bold px-6"
                                data-kt-menu-dismiss="true"
                                data-kt-data-table-filter="filter">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
            </div>
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datas_table">
            <!--begin::Table head-->
            <thead>
                <!--begin::Table row-->
                <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">#</th>
                    <th class="min-w-200px">Dokumen Persyaratan</th>
                    <th class="min-w-125px">Aktif</th>
                    <th class="min-w-150px">Mandatory</th>
                    <th class="min-w-200px">Sub Jenis</th>
                    <th class="min-w-125px">Nomor</th>
                    <th class="min-w-200px">Tanggal Mulai</th>
                    <th class="min-w-200px">Tanggal Akhir</th>
                    <th class="min-w-125px">Dapat Diubah</th>
                    <th class="min-w-200px">Indoneisa</th>
                    <th class="text-start min-w-200px">Aksi</th>
                </tr>
                <!--end::Table row-->
            </thead>
            <!--end::Table head-->
            <tbody class="text-gray-600 fw-bold">
                <tr>
                    <td>1</td>
                    <td>Identitias Narahubung</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                    <td>
                        <select name="" id="" class="form-select">
                            <option value="KTP">KTP</option>
                            <option value="Passport">Passport</option>
                            <option value="SIM">SIM</option>
                        </select>
                    </td>
                    <td>Ya(hanya text)</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                    <td>Ya</td>
                    <td>Tidak</td>
                    <td class="d-flex text-start">
                        <button class="btn btn-warning btn-sm me-2"
                            data-bs-target="#kt_modal_update" data-bs-toggle="modal">
                            <i class="fa fa-edit"></i>
                            <span class="d-none d-lg-inline">Update</span>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="fa fa-trash-alt"></i>
                            <span class="d-none d-lg-inline">Delete</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
@endsection