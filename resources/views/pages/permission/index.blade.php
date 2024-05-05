@extends('layouts.app')

@section('title', 'Permissions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
     <!-- CSS Libraries -->
     <link rel="stylesheet" href=" {{asset('modules/datatables/datatables.min.css')}} ">
     <link rel="stylesheet" href="{{asset('modules/datatables/dataTables.bootstrap4.min.css')}} ">
     <link rel="stylesheet" href="{{asset('modules/datatables/select.bootstrap4.min.css')}} ">
     {{-- <link rel="stylesheet" href="{{ asset('library/datatables/media/css/jquery.dataTables.min.css') }}"> --}}
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Permissions</h1>
                {{-- <div class="section-header-button">
                    <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add New</a>
                </div> --}}
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Permissions</a></div>
                    <div class="breadcrumb-item">All Permissions</div>
                </div>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                <h2 class="section-title">Permissions</h2>
                <p class="section-lead">
                    You can manage all Permissions, such as editing, deleting and more.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table" id="table-1">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Department</th>
                                            <th>Date Permission</th>
                                            <th>Is Approval</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($permissions as $permission)
                                            <tr>

                                                <td>{{ $permission->user->name }}
                                                </td>
                                                <td>
                                                    {{ $permission->user->position }}
                                                </td>
                                                <td>
                                                    {{ $permission->user->department }}
                                                </td>
                                                <td>
                                                    {{ $permission->date_permission }}
                                                </td>
                                                <td>
                                                    @if ($permission->is_approved == 1)
                                                        Approved
                                                    @else
                                                        Not Approved
                                                    @endif
                                                </td>


                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('permissions.show', $permission->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Detail
                                                        </a>

                                                        <form action="{{ route('permissions.destroy', $permission->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
      <!-- JS Libraies -->
      <script src="{{asset('modules/datatables/dataTables.min.js') }}"></script>
      <script src="{{ asset('modules/datatables/dataTables.bootstrap4.min.js') }}"></script>
      <script src="{{asset('modules/datatables/dataTables.select.min.js') }}"></script>
      {{-- <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script> --}}
      <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>
      <!-- Page Specific JS File -->
      <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush