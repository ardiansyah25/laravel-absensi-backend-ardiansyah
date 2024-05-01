@extends('layouts.app')

@section('title', 'Attendance')

@push('style')
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
                <h1>Attendances</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Attendances</a></div>
                    <div class="breadcrumb-item">All Attendances</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Attendances</h2>
                <p class="section-lead">
                    You can manage all Attendances, such as editing, deleting and more.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-striped table" id="table-1">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Latlong In</th>
                                            <th>Latlong Out</th>
                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendances as $attendance)
                                            <tr>

                                                <td>{{ $attendance->user->name }}
                                                </td>
                                                <td>
                                                    {{ $attendance->date }}
                                                </td>
                                                <td>
                                                    {{ $attendance->time_in }}
                                                </td>
                                                <td>
                                                    {{ $attendance->time_out }}
                                                </td>
                                                <td>
                                                    {{ $attendance->latlon_in }}
                                                </td>
                                                <td>
                                                    {{ $attendance->latlon_out }}
                                                </td>

                                                {{-- <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('attendances.edit', $attendance->id) }}'
                                                            class="btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <form action="{{ route('attendances.destroy', $attendance->id) }}"
                                                            method="POST" class="ml-2">
                                                            <input type="hidden" name="_method" value="DELETE" />
                                                            <input type="hidden" name="_token"
                                                                value="{{ csrf_token() }}" />
                                                            <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                                <i class="fas fa-times"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td> --}}
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
    <script src="{{asset('modules/datatables/dataTables.min.js') }}"></script>
    <script src="{{ asset('modules/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('modules/datatables/dataTables.select.min.js') }}"></script>
    {{-- <script src="{{ asset('library/datatables/media/js/jquery.dataTables.min.js') }}"></script> --}}
    <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/modules-datatables.js') }}"></script>
@endpush