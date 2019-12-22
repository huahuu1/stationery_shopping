<style>
    tr {
        border: 1px solid red;
    }
    td {
        border: 1px solid grey;
    }
    th {
        border: 1px solid red;
    }
</style>
<table>
    <thead>
        <tr >
            <th style="border: 1">STT</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $key=>$product)
        <tr>
            <td>{{$key}}</td>
            <td>{{$product['name']}}</td>
            <td>{{$product['price']}}</td>
            <td><a href="">Them moi</a></td>

        </tr>
        @endforeach
        
    </tbody>
</table>