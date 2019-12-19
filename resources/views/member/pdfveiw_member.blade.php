
<div class="container">

	<br/>
	
	<table class="table " id="mdatatable">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Member ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address1</th>
                <th scope="col">Address2</th>
                <th scope="col">Category</th>
                <th scope="col">NIC</th>
                <th scope="col">Mobile</th>
                <th scope="col">Registerd Date</th>
                <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
            @foreach($Mdata as $data)
                <tr>
                
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->address1}}</td>
                    <td>{{$data->address2}}</td>
                    <td>{{$data->category}}</td>
                    <td>{{$data->nic}}</td>
                    <td>{{$data->mobile}}</td>
                    <td>{{$data->regdate}}</td>
                    <td>
                        
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

</div>