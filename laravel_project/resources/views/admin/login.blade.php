<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Login</title>
	 @include('admin.include.head')
</head>

<body>

	<div class="card px-3 py-3 ">
	  <form class="row g-3 needs-validation" novalidate>
			<div class="col-12">
			  <label for="yourUsername" class="form-label">Username</label>
			  <div class="input-group has-validation">
				<input type="text" name="username" class="form-control" id="yourUsername" required>
				<div class="invalid-feedback">Please enter your username.</div>
			  </div>
			</div>

			<div class="col-12">
			  <label for="yourPassword" class="form-label">Password</label>
			  <input type="password" name="password" class="form-control" id="yourPassword" required>
			  <div class="invalid-feedback">Please enter your password!</div>
			</div>

			<div class="col-12">
			  <div class="form-check">
				<input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
				<label class="form-check-label" for="rememberMe">Remember me</label>
			  </div>
			</div>
			<div class="col-12">
			  <button class="btn btn-primary w-100" type="submit">Login</button>
			</div>
			<div class="col-12">
			  <p class="small mb-0 text-center">Don't have account? <a href="pages-register.html">Create an account</a></p>
			</div>
	  </form>
	</div>
  
  @include('admin.include.scripts')
    
</body>
</html>