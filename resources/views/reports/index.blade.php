@extends('layout')

@section('content')
	
	<h1 class="title">Genarate your sales report</h1>
	<p class="subtitle">Select a specific month to select</p>
	<div class="notification">
		<form action="/reports/show" method="POST">
			@csrf
			<div class="field is-horizontal">
				<div class="field-label is-normal">
					<label class="label">Select Date</label>
				</div>
				<div class="field-body">
					<div class="field">
						<p class="control is-expanded has-icons-left">
						    <span class="select">
						      <select name="month">
						        <option class="is-disabled" selected>Select Month</option>
						        <option value="01">January</option>
						        <option value="02">February</option>
						        <option value="03">March</option>
						        <option value="04">April</option>
						        <option value="05">May</option>
						        <option value="06">June</option>
						        <option value="07">July</option>
						        <option value="08">August</option>
						        <option value="09">September</option>
						        <option value="10">October</option>
						        <option value="11">November</option>
						        <option value="12">December</option>
						      </select>
						    </span>
						    <span class="icon is-small is-left">
						      <i class="fas fa-calendar-alt"></i>
						    </span>
						</p>
					</div>
					<div class="field">
						<p class="control is-expanded has-icons-left">
							<span class="select">
								<select name="year">
									<option value="">Select Year</option>

									
  
									  <?php
									  	//Getting vendor first order details for first sale year
									  	$first = App\Report::where('vendor_id', auth()->id())->first();

									    for ($year = now()->year; $year >= date('Y', strtotime($first->balance_date)); $year--) {
									      $selected = (isset($getYear) && $getYear == $year) ? 'selected' : '';
									      echo "<option value=$year $selected>$year</option>";
									    }
									  ?>

								</select>
							</span>
							<span class="icon is-small is-left">
						      <i class="fas fa-calendar-alt"></i>
						    </span>
						</p>
					</div>
					<div class="field">
						<div class="control">
							<button class="button is-primary">
								Genarate
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

@endsection