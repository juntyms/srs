<main class="col-md-9 ms-sm-auto col-lg-12 px-md-5">
</br>
</br>
</br>
</br>
<h4 class="h4">Software Record System</h4>
</br>
      <div class="card mb-2 mt-2">

        <div class="card-header">
        <i class="fas fa-table me-1"></i>
        All Software
        <a href="{{ route('downloadPDF') }}" class="float-end btn btn-sm btn-primary">Export PDF</a>
        </div>
        <div class="card-body">
            @csrf
            <table class="table table-bordered">
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
            </table>
        </div>
    </div>
</main>