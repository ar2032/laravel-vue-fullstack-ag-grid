<!DOCTPE html>
<html>
<head>
<title>View Records</title>
</head>
<body>
<table border = "1">
<tr>
<td>STATUS</td>
<td>DDC_CODE</td>
<td>TRADE_NAME</td>
<td>SCIENTIFIC_CODE</td>
<td>SCIENTIFIC_NAME</td>
<td>SCIENTIFIC_CODE</td>
<td>INGREDIENT_STRENGTH</td>
<td>DOSAGE_FORM_PACKAGE</td>
<td>ROUTE_OF_ADMIN</td>
<td>PACKAGE_PRICE</td>
<td>GRANULAR_UNIT</td>
<td>MANUFACTURER</td>
<td>UPDATED_DATE</td>
<td>SOURCE</td>
</tr>
@foreach ($posts as $post)
<tr>

<td>{{ $post['STATUS'] }}</td>
<td>{{ $post['DDC_CODE'] }}</td>
<td>{{ $post['TRADE_NAME'] }}</td>
<td>{{ $post['SCIENTIFIC_CODE'] }}</td>
<td>{{ $post['SCIENTIFIC_NAME'] }}</td>
<td>{{ $post['INGREDIENT_STRENGTH'] }}</td>
<td>{{ $post['DOSAGE_FORM_PACKAGE'] }}</td>
<td>{{ $post['ROUTE_OF_ADMIN'] }}</td>
<td>{{ $post['PACKAGE_PRICE'] }}</td>
<td>{{ $post['GRANULAR_UNIT'] }}</td>
<td>{{ $post['MANUFACTURER'] }}</td>
<td>{{ $post['REGISTERED_OWNER'] }}</td>
<td>{{ $post['UPDATED_DATE'] }}</td>
<td>{{ $post['SOURCE'] }}</td>
</tr>
@endforeach
</table>
<h5>Pages:</h5>
    {{ $posts->links() }}
</body>
</html>
