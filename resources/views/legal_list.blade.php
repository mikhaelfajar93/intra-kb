@extends('layout.main')
@section('legal_l_active', 'active')
@section('content')
    <div class="conatiner-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">List File Legal</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Date Modified</th>
                                        <th>Type</th>
                                        <th>size</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Data Legal 1</td>
                                        <td>4-Apr-2024</td>
                                        <td>xls</td>
                                        <td>61kb</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Data Legal 2</td>
                                        <td>5-Apr-2024</td>
                                        <td>xls</td>
                                        <td>16kb</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Date Modified</th>
                                        <th>Type</th>
                                        <th>size</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
