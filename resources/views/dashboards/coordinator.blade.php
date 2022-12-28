<main class="col-md-8 col-lg-12 px-md-2">
    <div class="card mb-2 mt-6">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All Software
            <a href="{{ route('exportExcel')}}" class="float-end btn btn-sm btn-success">Export Excel</a>
            @if (!empty(Auth::user()->privilege->privilege_id))
            @if(Auth::user()->privilege->privilege_id == 2)
            <a href="{{ route('software.add')}}" class="float-end btn btn-sm btn-success">Add Software</a>
            @endif
            @endif
        </div>
        <div class="card-body">
            @csrf
            <table id="datatablesSimple" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Academic Year</th>    
                    <th>Software Name</th>
                    <th>Department </th>
                    <th>Software Vendor</th>
                    <th>Software Type</th>
                    <th>Company </th>
                    <th>Purchase Date</th>
                    <th>Price</th>
                    <th>Expiry Date</th>
                    <th>Warranty End Date</th>
                    <th>License </th>
                    <th>Available</th>
                    <th>Custodian Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach ( $software as $software )
                <tr>
                    <td>{{ $software->ay->name }}</td>
                    <td>{{ $software->name }}</td>  
                    <td>{{ $software->dept->name}}</td> 
                    <td>{{ $software->vendor->name }}</td>
                    <td>{{ $software->type->name }}</td>
                    <td>{{ $software->comp->name }}</td>
                    <td>{{ \carbon\carbon::parse($software->purchase_date)->format('d-M-Y') }}</td>
                    <td>{{ $software->price }} .OMR</td>
                    <td>{{ \carbon\carbon::parse($software->expiry_date)->format('d-M-Y') }}</td>
                    <td>{{ \carbon\carbon::parse($software->warranty_end_date)->format('d-M-Y') }}</td>
                    <td>{{ $software->li->name }}</td>
                    <td>{{ ($software->installer_is_available)? 'Yes':'No' }}</td>
                    <td>{{ $software->custodian_name }}</td>    
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>