@extends('layouts.master')

@section('content')
	<form id="expense-form">
		<input type="text" name="description" placeholder="description">
		<input type="text" name="price" placeholder="price">
		<input type="text" name="date" placeholder="date">
		<input type="submit" value="add to expense">
	</form>
@endsection