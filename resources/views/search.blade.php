<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel search</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top:40px">
            <h4>Search Everything</h4><hr>
            <form action="{{ route('web.search')}}" method="GET">
                <div class="form-group">
                    <label for="">Enter keyword</label>
                    <input type="text" class="form-control" name="query" placeholder="Search here...">
                </div>
                <div class="form-group">
                    <label for="">Choose Column Name</label>
                    <select class="form-control" name="parame">
                    <option value="STATUS">STATUS</option>
                    <option value="DDC_CODE">DDC_CODE</option>
                    <option value="TRADE_NAME">TRADE_NAME</option>
                    <option value="SCIENTIFIC_CODE">SCIENTIFIC_CODE</option>
                    <option value="SCIENTIFIC_NAME">SCIENTIFIC_NAME</option>
                    <option value="INGREDIENT_STRENGTH">INGREDIENT_STRENGTH</option>
                    <option value="DOSAGE_FORM_PACKAGE">DOSAGE_FORM_PACKAGE</option>
                    <option value="ROUTE_OF_ADMIN">ROUTE_OF_ADMIN</option>
                    <option value="PACKAGE_PRICE">PACKAGE_PRICE</option>
                    <option value="GRANULAR_UNIT">GRANULAR_UNIT</option>
                    <option value="MANUFACTURER">MANUFACTURER</option>
                    <option value="REGISTERED_OWNER">REGISTERED_OWNER</option>
                    <option value="UPDATED_DATE">UPDATED_DATE</option>
                    <option value="SOURCE">SOURCE</option>

                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            <br>
            <br>
            <hr>
            <br>
            @if(isset($searchs))
            <table border = "1">
            <tr>
            <td>ID</td>
            <td>STATUS</td>
            <td>DDC_CODE</td>
            <td>TRADE_NAME</td>
            <td>SCIENTIFIC_CODE</td>
            <td>SCIENTIFIC_NAME</td>
            <td>INGREDIENT_STRENGTH</td>
            <td>DOSAGE_FORM_PACKAGE</td>
            <td>ROUTE_OF_ADMIN</td>
            <td>PACKAGE_PRICE</td>
            <td>GRANULAR_UNIT</td>
            <td>MANUFACTURER</td>
            <td>REGISTERED_OWNER</td>
            <td>UPDATED_DATE</td>
            <td>SOURCE</td>
        </tr>
        
        @foreach ($searchs as $search)
        <tr>
            <td>{{ $search['_id'] }}</td>
            <td>{{ $search['STATUS'] }}</td>
            <td>{{ $search['DDC_CODE'] }}</td>
            <td>{{ $search['TRADE_NAME'] }}</td>
            <td>{{ $search['SCIENTIFIC_CODE'] }}</td>
            <td>{{ $search['SCIENTIFIC_NAME'] }}</td>
            <td>{{ $search['INGREDIENT_STRENGTH'] }}</td>
            <td>{{ $search['DOSAGE_FORM_PACKAGE'] }}</td>
            <td>{{ $search['ROUTE_OF_ADMIN'] }}</td>
            <td>{{ $search['PACKAGE_PRICE'] }}</td>
            <td>{{ $search['GRANULAR_UNIT'] }}</td>
            <td>{{ $search['MANUFACTURER'] }}</td>
            <td>{{ $search['REGISTERED_OWNER'] }}</td>
            <td>{{ $search['UPDATED_DATE'] }}</td>
            <td>{{ $search['SOURCE'] }}</td>
            </tr>
            @endforeach
            @else
                <tr><td>No result</td></tr>
            @endif
            </table>
            <h5>Pages:</h5>
                {{ $searchs->links() }}
        </body>
        </html>
        <!-- <input type="text" class="form-control" name="parame" placeholder="Column name"> -->