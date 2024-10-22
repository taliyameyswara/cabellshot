@extends('layouts.admin')

@section('content')
    <h2 class="content-heading">Manage Event Type</h2>

    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Manage Event Type</h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Event Name</th>
                        <th>Creation Date</th>
                        <th class="d-none d-sm-table-cell">Creation Date</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($event_types as $event_type)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="font-w600">{{ $event_type->type }}</td>
                            <td class="d-none d-sm-table-cell">{{ $event_type->created_at }}</td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge badge-primary">{{ $event_type->created_at }}</span>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <form action="{{ route('admin.event-types.destroy', $event_type->id) }}" method="POST"
                                    onsubmit="return confirm('Do you really want to Delete?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
