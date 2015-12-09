<?php

//var_dump($this->data["content"]);
?>


<div class="container theme-showcase content" role="main">


	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<h1><?php echo($this->data["content title"]); ?></h1>

		<p>This is a template which includes Bootstrap 3.3.5 and some of the most common components listed in the page. Duplcate the page, call it index.htm for example,
			delete the bootstrap usage examples (html content) and build your template.</p>

		<?php echo($this->data["content"]); ?>
	</div>


	<div class="page-header">
		<h1>Buttons</h1>
	</div>
	<p>
		<button type="button" class="btn btn-lg btn-default">Default</button>
		<button type="button" class="btn btn-lg btn-primary">Primary</button>
		<button type="button" class="btn btn-lg btn-success">Success</button>
		<button type="button" class="btn btn-lg btn-info">Info</button>
		<button type="button" class="btn btn-lg btn-warning">Warning</button>
		<button type="button" class="btn btn-lg btn-danger">Danger</button>
		<button type="button" class="btn btn-lg btn-link">Link</button>
	</p>
	<p>
		<button type="button" class="btn btn-default">Default</button>
		<button type="button" class="btn btn-primary">Primary</button>
		<button type="button" class="btn btn-success">Success</button>
		<button type="button" class="btn btn-info">Info</button>
		<button type="button" class="btn btn-warning">Warning</button>
		<button type="button" class="btn btn-danger">Danger</button>
		<button type="button" class="btn btn-link">Link</button>
	</p>
	<p>
		<button type="button" class="btn btn-sm btn-default">Default</button>
		<button type="button" class="btn btn-sm btn-primary">Primary</button>
		<button type="button" class="btn btn-sm btn-success">Success</button>
		<button type="button" class="btn btn-sm btn-info">Info</button>
		<button type="button" class="btn btn-sm btn-warning">Warning</button>
		<button type="button" class="btn btn-sm btn-danger">Danger</button>
		<button type="button" class="btn btn-sm btn-link">Link</button>
	</p>
	<p>
		<button type="button" class="btn btn-xs btn-default">Default</button>
		<button type="button" class="btn btn-xs btn-primary">Primary</button>
		<button type="button" class="btn btn-xs btn-success">Success</button>
		<button type="button" class="btn btn-xs btn-info">Info</button>
		<button type="button" class="btn btn-xs btn-warning">Warning</button>
		<button type="button" class="btn btn-xs btn-danger">Danger</button>
		<button type="button" class="btn btn-xs btn-link">Link</button>
	</p>


	<div class="page-header">
		<h1>Tables</h1>
	</div>
	<div class="row">
		<div class="col-md-6">
			<table class="table">
				<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<table class="table table-striped">
				<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<table class="table table-bordered">
				<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td rowspan="2">1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>Mark</td>
					<td>Otto</td>
					<td>@TwBootstrap</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-6">
			<table class="table table-condensed">
				<thead>
				<tr>
					<th>#</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Username</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
				<tr>
					<td>3</td>
					<td colspan="2">Larry the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>


	<div class="page-header">
		<h1>Labels</h1>
	</div>
	<h1>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</h1>

	<h2>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</h2>

	<h3>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</h3>
	<h4>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</h4>
	<h5>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</h5>
	<h6>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</h6>

	<p>
		<span class="label label-default">Default</span>
		<span class="label label-primary">Primary</span>
		<span class="label label-success">Success</span>
		<span class="label label-info">Info</span>
		<span class="label label-warning">Warning</span>
		<span class="label label-danger">Danger</span>
	</p>


	<div class="page-header">
		<h1>Badges</h1>
	</div>
	<p>
		<a href="#">Inbox <span class="badge">42</span></a>
	</p>
	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active"><a href="#">Home <span class="badge">42</span></a></li>
		<li role="presentation"><a href="#">Profile</a></li>
		<li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
	</ul>


	<div class="page-header">
		<h1>Dropdown menus</h1>
	</div>
	<div class="dropdown theme-dropdown clearfix">
		<a id="dropdownMenu1" href="#" class="sr-only dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
				class="caret"></span></a>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li class="active"><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div>


	<div class="page-header">
		<h1>Navs</h1>
	</div>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#">Home</a></li>
		<li role="presentation"><a href="#">Profile</a></li>
		<li role="presentation"><a href="#">Messages</a></li>
	</ul>
	<ul class="nav nav-pills" role="tablist">
		<li role="presentation" class="active"><a href="#">Home</a></li>
		<li role="presentation"><a href="#">Profile</a></li>
		<li role="presentation"><a href="#">Messages</a></li>
	</ul>


	<div class="page-header">
		<h1>Navbars</h1>
	</div>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
								class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
								class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="page-header">
		<h1>Alerts</h1>
	</div>
	<div class="alert alert-success" role="alert">
		<strong>Well done!</strong> You successfully read this important alert message.
	</div>
	<div class="alert alert-info" role="alert">
		<strong>Heads up!</strong> This alert needs your attention, but it's not super important.
	</div>
	<div class="alert alert-warning" role="alert">
		<strong>Warning!</strong> Best check yo self, you're not looking too good.
	</div>
	<div class="alert alert-danger" role="alert">
		<strong>Oh snap!</strong> Change a few things up and try submitting again.
	</div>


	<div class="page-header">
		<h1>Progress bars</h1>
	</div>
	<div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"><span class="sr-only">60% Complete</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"><span class="sr-only">40% Complete (success)</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"><span class="sr-only">20% Complete</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete (warning)</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"><span class="sr-only">80% Complete (danger)</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"><span class="sr-only">60% Complete</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-success" style="width: 35%"><span class="sr-only">35% Complete (success)</span></div>
		<div class="progress-bar progress-bar-warning" style="width: 20%"><span class="sr-only">20% Complete (warning)</span></div>
		<div class="progress-bar progress-bar-danger" style="width: 10%"><span class='sr-only'>10% Complete (danger)</span></div>
	</div>


	<div class="page-header">
		<h1>List groups</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<ul class="list-group">
				<li class="list-group-item">Cras justo odio</li>
				<li class="list-group-item">Dapibus ac facilisis in</li>
				<li class="list-group-item">Morbi leo risus</li>
				<li class="list-group-item">Porta ac consectetur ac</li>
				<li class="list-group-item">Vestibulum at eros</li>
			</ul>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="list-group">
				<a href="#" class="list-group-item active">
					Cras justo odio
				</a>
				<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
				<a href="#" class="list-group-item">Morbi leo risus</a>
				<a href="#" class="list-group-item">Porta ac consectetur ac</a>
				<a href="#" class="list-group-item">Vestibulum at eros</a>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="list-group">
				<a href="#" class="list-group-item active">
					<h4 class="list-group-item-heading">List group item heading</h4>

					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">List group item heading</h4>

					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">List group item heading</h4>

					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
				</a>
			</div>
		</div><!-- /.col-sm-4 -->
	</div>


	<div class="page-header">
		<h1>Panels</h1>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Panel title</h3>
				</div>
				<div class="panel-body">
					Panel content
				</div>
			</div>
		</div><!-- /.col-sm-4 -->
	</div>


	<div class="page-header">
		<h1>Wells</h1>
	</div>
	<div class="well">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur
			adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Cras mattis consectetur purus sit amet fermentum. Duis mollis, est non
			commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
	</div>


	<div class="page-header">
		<h1>Icons and other goodies from bootstrap 3.x</h1>
	</div>
	<div>
		<div class="form-group has-success has-feedback">
			<label class="control-label" for="inputSuccess2">Input with success</label>
			<input type="text" class="form-control" id="inputSuccess2" aria-describedby="inputSuccess2Status">
			<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
			<span id="inputSuccess2Status" class="sr-only">(success)</span>
		</div>
		<div class="form-group has-warning has-feedback">
			<label class="control-label" for="inputWarning2">Input with warning</label>
			<input type="text" class="form-control" id="inputWarning2" aria-describedby="inputWarning2Status">
			<span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
			<span id="inputWarning2Status" class="sr-only">(warning)</span>
		</div>
		<div class="form-group has-error has-feedback">
			<label class="control-label" for="inputError2">Input with error</label>
			<input type="text" class="form-control" id="inputError2" aria-describedby="inputError2Status">
			<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
			<span id="inputError2Status" class="sr-only">(error)</span>
		</div>
		<div class="form-group has-success has-feedback">
			<label class="control-label" for="inputGroupSuccess1">Input group with success</label>

			<div class="input-group">
				<span class="input-group-addon">@</span>
				<input type="text" class="form-control" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
			</div>
			<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
			<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
		</div>
	</div>
	<div class="hgap50"></div>


	<div class="input-group input-group-lg">
		<span class="input-group-addon" id="sizing-addon1">@</span>
		<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
	</div>
	<div class="hgap20"></div>

	<div class="input-group">
		<span class="input-group-addon" id="sizing-addon2">@</span>
		<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
	</div>
	<div class="hgap20"></div>

	<div class="input-group input-group-sm">
		<span class="input-group-addon" id="sizing-addon3">@</span>
		<input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon3">
	</div>
	<div class="hgap20"></div>


	<div class="row">
		<div class="col-lg-6">
			<div class="input-group">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Go!</button>
			      </span>
				<input type="text" class="form-control" placeholder="Search for...">
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">Go!</button>
			      </span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
	<div class="hgap20"></div>


	<button type="button" class="btn btn-default btn-lg">
		<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
	</button>
	<button type="button" class="btn btn-default">
		<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
	</button>
	<button type="button" class="btn btn-default btn-sm">
		<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
	</button>
	<button type="button" class="btn btn-default btn-xs">
		<span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
	</button>
	<div class="hgap20"></div>


	<span class="label label-default">Default</span>
	<span class="label label-primary">Primary</span>
	<span class="label label-success">Success</span>
	<span class="label label-info">Info</span>
	<span class="label label-warning">Warning</span>
	<span class="label label-danger">Danger</span>

	<div class="hgap20"></div>


	<div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
			0%
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 2%;">
			2%
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 20%;">
			20%
		</div>
	</div>

	<div class="progress">
		<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
			<span class="sr-only">40% Complete (success)</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
			<span class="sr-only">20% Complete</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
			<span class="sr-only">60% Complete (warning)</span>
		</div>
	</div>
	<div class="progress">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
			<span class="sr-only">80% Complete (danger)</span>
		</div>
	</div>
	<div class="hgap20"></div>


	<div class="bs-example" data-example-id="list-group-badges">
		<ul class="list-group">
			<li class="list-group-item">
				<span class="badge">14</span>
				Cras justo odio
			</li>
			<li class="list-group-item">
				<span class="badge">2</span>
				Dapibus ac facilisis in
			</li>
			<li class="list-group-item">
				<span class="badge">1</span>
				Morbi leo risus
			</li>
		</ul>
	</div>
	<div class="hgap20"></div>


	<h1>Responsive video embed from youtube</h1>

	<p>NOTE: Chrome gives an error in the console from cast_sender.js, this is from youtube, so no need to worry about it. If you want to get rid of the error install the
		Chrome cast extension for chrome and it will go away.</p>

	<div class="bs-example" data-example-id="responsive-embed-16by9-iframe-youtube">
		<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="//www.youtube.com/embed/a1Y73sPHKxw?rel=0" allowfullscreen=""></iframe>
		</div>
	</div>
	<div class="hgap20"></div>


	<div class="bs-example" data-example-id="contextual-panels">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Panel title</h3>
			</div>
			<div class="panel-body">
				Panel content
			</div>
		</div>
	</div>


	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Warning!</strong> Better check yourself, you're not looking too good.
	</div>


	<div class="bs-example" data-example-id="simple-badges">
		<a href="#">Inbox <span class="badge">42</span></a>
		<br><br>
		<button class="btn btn-primary" type="button">
			Messages <span class="badge">4</span>
		</button>
	</div>
	<div class="hgap20"></div>


	<div class="alert alert-success" role="alert">...</div>
	<div class="alert alert-info" role="alert">...</div>
	<div class="alert alert-warning" role="alert">...</div>
	<div class="alert alert-danger" role="alert">...</div>


	<div class="bs-example" data-example-id="disabled-active-pagination">
		<nav>
			<ul class="pagination">
				<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
				<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			</ul>
		</nav>
	</div>


	<div class="btn-group">
		<button type="button" class="btn btn-default">Default</button>
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div><!-- /btn-group -->
	<div class="btn-group">
		<button type="button" class="btn btn-primary">Primary</button>
		<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div><!-- /btn-group -->
	<div class="btn-group">
		<button type="button" class="btn btn-success">Success</button>
		<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div><!-- /btn-group -->
	<div class="btn-group">
		<button type="button" class="btn btn-info">Info</button>
		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div><!-- /btn-group -->
	<div class="btn-group">
		<button type="button" class="btn btn-warning">Warning</button>
		<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div><!-- /btn-group -->
	<div class="btn-group">
		<button type="button" class="btn btn-danger">Danger</button>
		<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu">
			<li><a href="#">Action</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li><a href="#">Separated link</a></li>
		</ul>
	</div><!-- /btn-group -->
	<div class="hgap20"></div>


	<div class="bs-example" data-example-id="single-button-dropdown">
		<div class="btn-group">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default <span
					class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div><!-- /btn-group -->
		<div class="btn-group">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary <span
					class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div><!-- /btn-group -->
		<div class="btn-group">
			<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success <span
					class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div><!-- /btn-group -->
		<div class="btn-group">
			<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div><!-- /btn-group -->
		<div class="btn-group">
			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning <span
					class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div><!-- /btn-group -->
		<div class="btn-group">
			<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger <span
					class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="#">Separated link</a></li>
			</ul>
		</div><!-- /btn-group -->
	</div>
	<div class="hgap20"></div>


	<div class="hgap50"></div>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
								class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span
								class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div class="">
		<ul class="bs-glyphicons-list">

			<li>
				<span class="glyphicon btn-lg glyphicon-asterisk" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-asterisk</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-plus" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-plus</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-euro" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-euro</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-eur" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-eur</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-minus" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-minus</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-cloud" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-cloud</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-envelope" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-envelope</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-pencil" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-pencil</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-glass" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-glass</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-music" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-music</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-search" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-search</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-heart" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-heart</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-star" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-star</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-star-empty" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-star-empty</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-user" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-user</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-film" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-film</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-th-large" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-th-large</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-th" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-th</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-th-list" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-th-list</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ok" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ok</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-remove" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-remove</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-zoom-in" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-zoom-in</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-zoom-out" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-zoom-out</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-off" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-off</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-signal" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-signal</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-cog" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-cog</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-trash" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-trash</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-home" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-home</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-file" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-file</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-time" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-time</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-road" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-road</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-download-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-download-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-download" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-download</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-upload" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-upload</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-inbox" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-inbox</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-play-circle" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-play-circle</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-repeat" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-repeat</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-refresh" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-refresh</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-list-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-list-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-lock" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-lock</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-flag" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-flag</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-headphones" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-headphones</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-volume-off" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-volume-off</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-volume-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-volume-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-volume-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-volume-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-qrcode" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-qrcode</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-barcode" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-barcode</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tag" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tag</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tags" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tags</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-book" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-book</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bookmark" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bookmark</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-print" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-print</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-camera" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-camera</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-font" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-font</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bold" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bold</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-italic" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-italic</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-text-height" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-text-height</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-text-width" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-text-width</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-align-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-align-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-align-center" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-align-center</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-align-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-align-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-align-justify" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-align-justify</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-list" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-list</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-indent-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-indent-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-indent-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-indent-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-facetime-video" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-facetime-video</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-picture" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-picture</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-map-marker" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-map-marker</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-adjust" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-adjust</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tint" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tint</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-edit" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-edit</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-share" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-share</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-check" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-check</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-move" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-move</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-step-backward" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-step-backward</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-fast-backward" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-fast-backward</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-backward" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-backward</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-play" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-play</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-pause" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-pause</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-stop" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-stop</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-forward" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-forward</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-fast-forward" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-fast-forward</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-step-forward" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-step-forward</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-eject" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-eject</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-chevron-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-chevron-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-plus-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-plus-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-minus-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-minus-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-remove-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-remove-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ok-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ok-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-question-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-question-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-info-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-info-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-screenshot" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-screenshot</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-remove-circle" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-remove-circle</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ok-circle" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ok-circle</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ban-circle" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ban-circle</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-arrow-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-arrow-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-arrow-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-arrow-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-arrow-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-arrow-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-arrow-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-arrow-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-share-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-share-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-resize-full" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-resize-full</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-resize-small" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-resize-small</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-exclamation-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-exclamation-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-gift" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-gift</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-leaf" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-leaf</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-fire" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-fire</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-eye-open" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-eye-open</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-eye-close" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-eye-close</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-warning-sign" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-warning-sign</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-plane" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-plane</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-calendar" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-calendar</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-random" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-random</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-comment" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-comment</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-magnet" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-magnet</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-chevron-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-chevron-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-chevron-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-chevron-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-retweet" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-retweet</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-shopping-cart" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-shopping-cart</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-folder-close" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-folder-close</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-folder-open" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-folder-open</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-resize-vertical" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-resize-vertical</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-resize-horizontal" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-resize-horizontal</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hdd" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hdd</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bullhorn" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bullhorn</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bell" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bell</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-certificate" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-certificate</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-thumbs-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-thumbs-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-thumbs-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-thumbs-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hand-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hand-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hand-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hand-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hand-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hand-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hand-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hand-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-circle-arrow-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-circle-arrow-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-circle-arrow-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-circle-arrow-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-circle-arrow-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-globe" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-globe</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-wrench" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-wrench</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tasks" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tasks</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-filter" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-filter</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-briefcase" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-briefcase</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-fullscreen" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-fullscreen</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-dashboard" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-dashboard</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-paperclip" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-paperclip</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-heart-empty" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-heart-empty</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-link" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-link</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-phone" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-phone</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-pushpin" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-pushpin</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-usd" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-usd</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-gbp" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-gbp</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort-by-alphabet" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort-by-alphabet-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort-by-order" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort-by-order</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort-by-order-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort-by-order-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort-by-attributes" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sort-by-attributes-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sort-by-attributes-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-unchecked" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-unchecked</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-expand" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-expand</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-collapse-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-collapse-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-collapse-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-collapse-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-log-in" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-log-in</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-flash" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-flash</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-log-out" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-log-out</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-new-window" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-new-window</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-record" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-record</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-save" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-save</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-open" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-open</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-saved" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-saved</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-import" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-import</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-export" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-export</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-send" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-send</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-floppy-disk" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-floppy-disk</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-floppy-saved" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-floppy-saved</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-floppy-remove" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-floppy-remove</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-floppy-save" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-floppy-save</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-floppy-open" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-floppy-open</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-credit-card" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-credit-card</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-transfer" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-transfer</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-cutlery" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-cutlery</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-header" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-header</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-compressed" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-compressed</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-earphone" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-earphone</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-phone-alt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-phone-alt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tower" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tower</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-stats" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-stats</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sd-video" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sd-video</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hd-video" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hd-video</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-subtitles" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-subtitles</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sound-stereo" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sound-stereo</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sound-dolby" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sound-dolby</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sound-5-1" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sound-5-1</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sound-6-1" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sound-6-1</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sound-7-1" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sound-7-1</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-copyright-mark" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-copyright-mark</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-registration-mark" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-registration-mark</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-cloud-download" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-cloud-download</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-cloud-upload" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-cloud-upload</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tree-conifer" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tree-conifer</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tree-deciduous" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tree-deciduous</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-cd" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-cd</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-save-file" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-save-file</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-open-file" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-open-file</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-level-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-level-up</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-copy" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-copy</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-paste" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-paste</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-alert" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-alert</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-equalizer" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-equalizer</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-king" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-king</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-queen" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-queen</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-pawn" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-pawn</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bishop" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bishop</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-knight" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-knight</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-baby-formula" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-baby-formula</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-tent" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-tent</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-blackboard" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-blackboard</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bed" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bed</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-apple" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-apple</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-erase" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-erase</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-hourglass" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-hourglass</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-lamp" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-lamp</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-duplicate" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-duplicate</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-piggy-bank" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-piggy-bank</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-scissors" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-scissors</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-bitcoin" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-bitcoin</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-btc" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-btc</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-xbt" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-xbt</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-yen" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-yen</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-jpy" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-jpy</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ruble" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ruble</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-rub" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-rub</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-scale" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-scale</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ice-lolly" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ice-lolly</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-ice-lolly-tasted" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-ice-lolly-tasted</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-education" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-education</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-option-horizontal" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-option-horizontal</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-option-vertical" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-option-vertical</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-menu-hamburger" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-menu-hamburger</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-modal-window" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-modal-window</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-oil" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-oil</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-grain" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-grain</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-sunglasses" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-sunglasses</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-text-size" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-text-size</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-text-color" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-text-color</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-text-background" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-text-background</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-object-align-top" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-object-align-top</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-object-align-bottom" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-object-align-bottom</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-object-align-horizontal" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-object-align-horizontal</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-object-align-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-object-align-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-object-align-vertical" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-object-align-vertical</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-object-align-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-object-align-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-triangle-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-triangle-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-triangle-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-triangle-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-triangle-bottom" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-triangle-bottom</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-triangle-top" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-triangle-top</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-console" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-console</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-superscript" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-superscript</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-subscript" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-subscript</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-menu-left" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-menu-left</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-menu-right" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-menu-right</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-menu-down" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-menu-down</span>
			</li>

			<li>
				<span class="glyphicon btn-lg glyphicon-menu-up" aria-hidden="true"></span>
				<span class="glyphicon-class">glyphicon glyphicon-menu-up</span>
			</li>

		</ul>
	</div>


</div> <!-- /container -->