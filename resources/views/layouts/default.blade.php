<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		@include('includes.head')
	</head>
	<body>
		<div class="main">
			<div class="small-12 large-12 column" id="masthead">
				<header>
					@include('includes.header')
				<div class="sub-header">
					<h1>{{ Html::link('/','CRUD Data Anggota') }}</h1>
				</div>
				</header>

				<div class="row">
					@yield('content')
				</div>
			
				@include('includes.footer')

			</div>
		</div>
	</body>
</html>