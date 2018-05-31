<!DOCTYPE html>
<html>
<head>
	<title> .</title>
	<link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/bootstrap.css')}}"/>
	<style type="text/css">
	.borderless td, .borderless th {
		border: none !important;
	}

	.bordersolid{
		border: 1px solid black!important;
	}
	table tr td,table tr th{
		padding: 0px !important;
		margin: 0px !important;
		line-height: 20px !important;
	}
	</style>
</head>
<body>

	<div class="row">
		<div class="col-xs-12">
			<table>
				<tbody>
					<tr>
						<td width="70%">
							<div class="text-center">
								<div >
									<table>
										<tr>
											<td>
												<img width="65" src="{{ asset('images/logo/gb.jpg') }}" alt="">
											</td>
											<td style="padding-left: 10px">
												<p style="font-size: 30px">Gono Bishwabidyalay</p>
												<p style="padding-left: 10px;">Nolam, Mirzanagar, Savar, Dhaka-1344</p>
											</td>
										</tr>
									</table>
								</div>
								<p style="font-size: 25px;padding-top: 10px">Examination Detail Number</p>
								<p style="font-size: 18px">
									{{ strtolower($ce_detail->semester->semester) }} Semester Final Examination
									{{ $ce_detail->exam_time->exam_month.' '.$ce_detail->exam_time->exam_year }}
								</p>
								<p><b>Subject:</b> {{ $ce_detail->course->name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total:</b> {{ ($ce_detail->course->credit == 3)? '70':'35'}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Course No:</b> {{ $ce_detail->course->code }}</p>
							</div>
						</td>
						<td width="30%">
							<table border="1">
								<thead>
									<tr>
										<th width="70%">Numerical Grade</th>
										<th width="15%">Letter Grade</th>
										<th width="15%">Grade Point</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>80% and above</td>
										<td style="text-align:center">A+</td>
										<td style="text-align:center">4.00</td>
									</tr>
									<tr>
										<td>75% to less than 80%</td>
										<td style="text-align:center">A</td>
										<td style="text-align:center">3.75</td>
									</tr>
									<tr>
										<td>70% to less than 75%</td>
										<td style="text-align:center">A-</td>
										<td style="text-align:center">3.50</td>
									</tr>
									<tr>
										<td>65% to less than 70%</td>
										<td style="text-align:center">B+</td>
										<td style="text-align:center">3.25</td>
									</tr>
									<tr>
										<td>60% to less than 65%</td>
										<td style="text-align:center">B</td>
										<td style="text-align:center">3.00</td>
									</tr>
									<tr>
										<td>55% to less than 60%</td>
										<td style="text-align:center">B-</td>
										<td style="text-align:center">2.75</td>
									</tr>
									<tr>
										<td>50% to less than 55%</td>
										<td style="text-align:center">C+</td>
										<td style="text-align:center">2.50</td>
									</tr>
									<tr>
										<td>45% to less than 50%</td>
										<td style="text-align:center">C</td>
										<td style="text-align:center">2.25</td>
									</tr>
									<tr>
										<td>40% to less than 45%</td>
										<td style="text-align:center">D</td>
										<td style="text-align:center">2.00</td>
									</tr>
									<tr>
										<td>Less than 40%</td>
										<td style="text-align:center">F</td>
										<td style="text-align:center">0.00</td>
									</tr>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<br><br><br>

	<div class="row">
		<div class="col-xs-12">
			<table class="table table-bordered text-center bordersolid">
				@php
				$i=0;
				$j=0;
				@endphp

				@if ($results)
					@foreach ($results as $r)
						@if ($i==0 || $i==41 || $j==55)
							@php
							$j=0;
							@endphp
							<tr>
								<th class="text-center bordersolid" rowspan="2">Exam Roll</th>
								<th class="text-center bordersolid" colspan="15">Mark</th>
								<th class="text-center bordersolid" rowspan="2">Total</th>
							</tr>
							<tr>

								<th class="text-center bordersolid">1</th>
								<th class="text-center bordersolid">2</th>
								<th class="text-center bordersolid">3</th>
								<th class="text-center bordersolid">4</th>
								<th class="text-center bordersolid">5</th>
								<th class="text-center bordersolid">6</th>
								<th class="text-center bordersolid">7</th>
								<th class="text-center bordersolid">8</th>
								<th class="text-center bordersolid">9</th>
								<th class="text-center bordersolid">10</th>
								<th class="text-center bordersolid">11</th>
								<th class="text-center bordersolid">12</th>
								<th class="text-center bordersolid">13</th>
								<th class="text-center bordersolid">14</th>
								<th class="text-center bordersolid">15</th>
							</tr>
						@endif
						@if ($r->is_absent===0)
							<tr>
								<td class="bordersolid">{{ $r->student->exam_roll }}</td>
								<td class="bordersolid">{{ round($r->q_1) ? round($r->q_1):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_2) ? round($r->q_2):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_3) ? round($r->q_3):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_4) ? round($r->q_4):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_5) ? round($r->q_5):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_6) ? round($r->q_6):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_7) ? round($r->q_7):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_8) ? round($r->q_8):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_9) ? round($r->q_9):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_10) ? round($r->q_10):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_11) ? round($r->q_11):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_12) ? round($r->q_12):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_13) ? round($r->q_13):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_14) ? round($r->q_14):'-' }}</td>
								<td class="bordersolid">{{ round($r->q_15) ? round($r->q_15):'-' }}</td>
								<td class="bordersolid">{{ round($r->total) ? round($r->total):'-' }}</td>
							</tr>
						@else
							<tr>
								<td class="bordersolid">{{ $r->student->exam_roll }}</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
								<td class="bordersolid">-</td>
							</tr>
						@endif
						@php
						$i++;
						$j++;
						@endphp
					@endforeach
				@endif
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<b>Note </b><span>The fraction of the sum has to be paid in tenth.</p>
				<table>
					<tr>
						<td width="550px">
							Date: ...................
						</td>
						<td width="100px">
							<p>Signature of the Examiner</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
	</html>
