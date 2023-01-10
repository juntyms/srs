<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table> 
    
<thead>
    <tr>
        <th>AY</th>    
        <th>License Name</th>
        <th>License Type</th>
        <th>Subscription Type</th>
        <th>Version</th>
        <th>Quantity</th>
        <th>Purchase Date</th>
        <th>Total Cost</th>
        <th>Expiry Date</th>
        <th>Warranty End Date</th>
        <th>Supplier</th>
        <th>Available</th>
        <th>Company</th>
        <th>Custodian Name</th>
        <th>Department</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach ( $software as $software )
        <td>{{ $software->ay->name }}</td>
        <td>{{ $software->name }}</td>
        <td>{{ $software->type->name }}</td>  
        <td>{{ $software->li->name }}</td>
        <td>{{ $software->version }}</td>  
        <td>{{ $software->quantity }}</td>  
        <td>{{ \carbon\carbon::parse($software->purchase_date)->format('d-M-Y') }}</td> 
        <td>{{ $software->price }} .OMR</td>
        <td>{{ \carbon\carbon::parse($software->expiry_date)->format('d-M-Y') }}</td>
        <td>{{ \carbon\carbon::parse($software->warranty_end_date)->format('d-M-Y') }}</td>
        <td>{{ $software->vendor->name }}</td>
        <td>{{ ($software->installer_is_available)? 'Yes':'No' }}</td>
        <td>{{ $software->comp->name }}</td>
        <td>{{ $software->custodian_name }}</td> 
        <td>{{ $software->dept->name}}</td>  
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>