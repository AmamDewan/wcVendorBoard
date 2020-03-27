@extends('layout')

@section('content')
	<?php 
		$sum = 0; 
		$itemCount = 1;
		$count = 0;

	?>	
	{{-- @if($reports->isEmpty())
		<div class="notification is-disabled">
			<h1 class="title">You don't have any sale this month</h1>
		</div>
	@else --}}
	<div class="container">
		<div class="notification has-text-centered">
			<p class="title is-3">Your Monthly Sales</p>
			<p class="title is-4">Vendor Name: {{$user->display_name}}</p>
			<p class="subtitle is-5">{{date('M Y', strtotime($reports->first()->balance_date))}}</p>
		</div>
	</div>
	<table class="table is-bordered is-striped is-hoverable is-fullwidth">
	<thead>
		<tr class="tr">
			<th class="th">Items</th>
			<th class="th">Order Number</th>
			<th class="th">Earnings</th>
			<th class="th">Order Date</th>
		</tr>
	</thead>
	<tfoot>
		<tr class="tr">
			<th class="th">Items</th>
			<th class="th">Order Number</th>
			<th class="th">Earnings</th>
			<th class="th">Order Date</th>
		</tr>
	</tfoot>
		

	@foreach($reports as $item)
		@if($item->status == 'wc-processing')
			<?php $count = $count + 1; ?>
		@elseif ($item->status == 'wc-completed')
			<tr class="tr">
				<td class="td">{{$itemCount}} </td>
				<td class="td">{{$item->trn_id}} </td>
				<td class="td">{{$item->debit}} </td>
				<td class="td">{{date('d M Y',strtotime($item->balance_date))}} </td>
			</tr>
			<?php 
				$sum = $sum + $item->debit;
				$itemCount++;
			?>
		@endif
	@endforeach
	</table>
	{{-- @endif --}}

	<h2 class="title">Total: Order = {{$itemCount-1}}. Earning = {{$sum}}</h2>

	@if($count > 0)	
		<div class="notification is-danger">
			<h3 class="title is-medium">You have {{$count}} order pending. Please check them on <a href="https://sheideal.com/dashboard">Dashboard</a>
			</h3>
		</div>
	@endif

@endsection
