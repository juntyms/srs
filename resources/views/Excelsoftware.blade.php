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
</body>
</html>