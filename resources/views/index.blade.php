<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	
</head>
<body>


	<div class="jumbotron">
		<div class="container">
		  <h1>Hello, Alegra!</h1>
		  <p> Test</p>
		  <a class="btn btn-primary btn-lg" href="/facturas" role="button">Get All</a>
      <a class="btn btn-primary btn-lg" href="/facturasUp" role="button">Get Upper to $ 100000</a>
      <a class="btn btn-primary btn-lg" href="/draft" role="button">Only draft State</a>
	  	</div>
	</div>


	 <h2 class="sub-header">Facturas</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre Cliente</th>
                  <th>Estado</th>
                  <th>Factura No.</th>
                  <th>Fecha</th>
                  <th>Vence</th>
                  <th>Total</th>
                  <th>Factura Creada</th>
                </tr>
              </thead>
              <tbody>
          <!-- -->
             @if(isset($facturas))
              @foreach ($facturas['invoices'] as $factura)
                <tr>
                  <td>{{$factura ['customer_name']}}</td>
                  <td>{{$factura ['status']}}</td>
                  <td>{{$factura ['invoice_number']}}</td>
                  <td>{{$factura ['date']}}</td>
                  <td>{{$factura ['due_date']}}</td>
                  <td>{{$factura ['total']}}</td>
                  <td>{{$factura ['created_time']}}</td>
                </tr>
                @endforeach
              @else
                <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Atención! </strong> Obten los últimos datos de las facturas actualizados<a href="/facturas" class="alert-link">Actualiza ahora</a>
                </div>
              @endif
              </tbody>
            </table>
          </div>  

	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>