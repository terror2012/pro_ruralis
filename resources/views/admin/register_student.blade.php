<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Creare Cont Sponsor</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="{{url('/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/admin/css/style_choice.css')}}" rel="stylesheet">
   

  </head>
  <body>
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  @include('flash::message')
    <div class="container-fluid">
		<form action="{{url('/register/student')}}" id="form_student" method="POST">
            @csrf
	<div class="row">
		<div class="col-md-12">
			<h3 class="title">Creare cont elev</h3>
			<div class="row">
				<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
                				<div class="form-group">
					 
					<label class="label" for="exampleInputEmail1">
						Nume <b style="color: red">(*)</b>
					</label>
					<input type="text" name="name" class="form-control" id="name" max="25" required/>
				</div>
                
                
				<div class="form-group">
					 
					<label class="label" for="exampleInputEmail1">
						Email <b style="color: red">(*)</b>
					</label>
					<input type="email" name="email" class="form-control" id="email" required/>
				</div>
				<div class="form-group">
					 
					<label class="label" for="exampleInputPassword1">
						Parola <b style="color: red">(*)</b>
					</label>
					<input type="password" name="password" class="form-control" id="password" min="8" max="16" required/>
				</div>
                <div class="form-group">
					 
					<label class="label" for="exampleInputPassword1">
						 Repeta Parola <b style="color: red">(*)</b>
					</label>
					<input type="password" name="confirm_password" class="form-control" id="confirm_password" min="8" max="16" required/>
				</div>



		</div>
		<div class="col-lg-6">
            <div class="form-group">
					 
					<label class="label" for="exampleInputPassword1">
						Numar Telefon <b style="color: red">(*)</b>
					</label>
					<input type="text" name="phone" class="form-control" id="phone" required min="1" max="10"/>
				</div>
                 <div class="form-group">
					 
                    
					<label class="label" for="exampleInputEmail1">
						Oras <b style="color: red">(*)</b>
					</label>
					<input type="text" name="city" class="form-control" id="city" required/>
				</div>
				<div class="form-group">
					 
                    
					<label class="label" for="exampleInputEmail1">
						Adresa
					</label>
					<input type="text" name="address" class="form-control" id="address" />
				</div>
                 <div class="form-group">
					 
					<label class="label" for="exampleInputEmail1">
						Scoala Curenta 
					</label>
					<input type="text" name="school" class="form-control" id="school"/>
				</div>

		</div>
	</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">

									<label class="label" for="exampleInputEmail1">
										Varsta <b style="color: red">(*)</b>
									</label>
									<input type="number" name="age" min="1" max="80" step="1" class="form-control" value="16" id="age" required/>
								</div>
							</div>
						</div>
</div>
				
			</div>
			<div class="row">
				<div class="col-md-4">

				</div>
				<div class="col-md-4">
                    <div id="errors" style="color: red"></div>
					<button type="submit" class="btn btn-success btn-block button button-final">
						Creare Cont
					</button>
				</div>
				<div class="col-md-4">
				</div>
			</div>
		</div>
	</div>
		</form>
</div>
    <script src="{{url('/admin/js/jquery.min.js')}}"></script>
    <script src="{{url('/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{url('/admin/js/scripts.js')}}"></script>
  </body>
</html>