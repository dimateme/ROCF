@extends('admin.template')
@section('admin')
    <div class="page-content">

        <div class="page-content">
            <div class="row">
                <div class="col-xl-12">

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ajouter une concertation
                    </button>

                    <!-- Modal -->

                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>

                            </div>

                            <h4 class="card-title mb-4">La liste des membres</h4>

                            <div class="table-responsive">
                                <table id="donneesDeLaTable" class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                    <thead class="table-light">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Telephone</th>
                                        <th>Famille</th>
                                        <th>Code postal</th>
                                        <th style="width: 120px;">Courriel</th>
                                    </tr>
                                    </thead><!-- end thead -->
                                    <tbody>
                                        <tr>
                                            <td><h6 class="mb-0"></h6></td>
                                            <td><h6 class="mb-0"></h6></td>
                                            <td><h6 class="mb-0"></h6></td>
                                            <td><h6 class="mb-0"></h6></td>
                                            <td><h6 class="mb-0"></h6></td>
                                            <td><h6 class="mb-0"></h6></td>
                                        </tr>
                                    </tbody><!-- end tbody -->
                                </table> <!-- end table -->
                            </div>
                        </div><!-- end card -->
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>
            @include('admin.ajouter_concertation')
        </div>
    </div>
@endsection
