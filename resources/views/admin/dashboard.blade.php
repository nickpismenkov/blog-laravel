@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<br>
		<div class="row">
			<div class="col-sm-3">
				<p><span class="alert alert-primary ml-3">Категорий 0</span></p>
			</div>
			<div class="col-sm-3">
				<p><span class="alert alert-primary ml-3">Материалов 0</span></p>
			</div>
			<div class="col-sm-3">
				<p><span class="alert alert-primary ml-3">Посетителей 0</span></p>
			</div>
			<div class="col-sm-3">
				<p><span class="alert alert-primary ml-3">Сегодня 0</span></p>
			</div>
		</div>
		<hr>

		<div class="row">
			<div class="col-sm-6">
				<a href="" class="btn btn-block btn-primary mb-1">Создать категорию</a>
				<a href="" class="list-group-item">
					<h4 class="list-group-item-heading">Категория первая</h4>
					<p class="list-group-item-text">
						Кол-во материалов
					</p>
				</a>
			</div>
			<div class="col-sm-6">
				<a href="" class="btn btn-block btn-primary mb-1">Создать материал</a>
				<a href="" class="list-group-item">
					<h4 class="list-group-item-heading">Материал первый</h4>
					<p class="list-group-item-text">
						Категория
					</p>
				</a>
			</div>
		</div>
	</div>
@endsection