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
		border-color: 1px solid black!important;
	}
	table tr td,table tr th{
		padding: 0px !important;
		margin: 0px !important;
		line-height: 20px !important;
	}
	.emni{
		line-height: 10px !important;
	}
	.topline{
		line-height: 5px !important;
	}
	</style>
</head>
<body>

	<div class="row">
		<div class="col-xs-12">
			<table>
				<tbody>
					<tr>
						<td width="390px">
							<div class="text-center">
								<img width="52" src="{{ asset('images/logo/gb.jpg') }}" alt="">
								<p style="font-size: 30px">Gono Bishwabidyalay</p>
								<p style="font-size: 15px">Comprehensive Marks Sheet to be sent <br>
									to the Controller of Examinations</p>
									<div class="topline">
										<p>{{ strtolower($ce_detail->semester->semester) }} Semester Final Examination
											{{ $ce_detail->exam_time->exam_month.' '.$ce_detail->exam_time->exam_year }}</p>
											<p>Department: C.S.E</p>
										</div>
									</div>
									<div class="emni">
										<table>
											<tr>
												<td>Subject </td>
												<td>:</td>
												<td> {{ $ce_detail->course->name }}</td>
											</tr>
											<tr>
												<td>Paper </td>
												<td>:</td>
												<td> {{ $ce_detail->course->code }}</td>
											</tr><tr>
												<td>Group </td>
												<td>:</td>
												<td> C.S.E</td>
											</tr>
										</table>
									</div>
								</td>
								<td width="200px">
									<table border="1" style="font-size: 14px">
										<thead>
											<tr>
												<th width="70%">Numerical Grade</th>
												<th width="15%" colspan="2">Letter Grade</th>
												<th width="15%">Grade Point</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>80% and above</td>
												<td style="text-align:center">A+</td>
												<td style="text-align:center">(A plus)</td>
												<td style="text-align:center">4.00</td>
											</tr>
											<tr>
												<td>75% to less than 80%</td>
												<td style="text-align:center">A</td>
												<td style="text-align:center">(A regular)</td>
												<td style="text-align:center">3.75</td>
											</tr>
											<tr>
												<td>70% to less than 75%</td>
												<td style="text-align:center">A-</td>
												<td style="text-align:center">(A minus)</td>
												<td style="text-align:center">3.50</td>
											</tr>
											<tr>
												<td>65% to less than 70%</td>
												<td style="text-align:center">B+</td>
												<td style="text-align:center">(B plus)</td>
												<td style="text-align:center">3.25</td>
											</tr>
											<tr>
												<td>60% to less than 65%</td>
												<td style="text-align:center">B</td>
												<td style="text-align:center">(B regular)</td>
												<td style="text-align:center">3.00</td>
											</tr>
											<tr>
												<td>55% to less than 60%</td>
												<td style="text-align:center">B-</td>
												<td style="text-align:center">(B minus)</td>
												<td style="text-align:center">2.75</td>
											</tr>
											<tr>
												<td>50% to less than 55%</td>
												<td style="text-align:center">C+</td>
												<td style="text-align:center">(C plus)</td>
												<td style="text-align:center">2.50</td>
											</tr>
											<tr>
												<td>45% to less than 50%</td>
												<td style="text-align:center">C</td>
												<td style="text-align:center">(C regular)</td>
												<td style="text-align:center">2.25</td>
											</tr>
											<tr>
												<td>40% to less than 45%</td>
												<td style="text-align:center">D</td>
												<td style="text-align:center"></td>
												<td style="text-align:center">2.00</td>
											</tr>
											<tr>
												<td>Less than 40%</td>
												<td style="text-align:center">F</td>
												<td style="text-align:center"></td>
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
					<table class="table table-bordered text-center">
						<tr>
							<th class="text-center bordersolid" rowspan="2"><br><br>Exam Roll <br>No.</th>
							<th class="text-center bordersolid" rowspan="2"><br><br>Theoretical <br>Marks <br>70/35</th>
							<th class="text-center bordersolid" colspan="3"><br>Continuous Evaluation Marks 30/15</th>
							<th class="text-center bordersolid" rowspan="2"><br><br>Total <br>100/50</th>
							<th class="text-center bordersolid" rowspan="2"><br><br>Grade</th>
						</tr>
						<tr>
							<td class="bordersolid">Attendance <br>10/5</td>
							<td class="bordersolid">Class Test/Home <br>Assignment/<br>Language Viva <br>10/5</td>
							<td class="bordersolid">Midterm/<br>Card Final <br>10/5</td>
						</tr>

						@php
						$i=0;
						$j=0;
						@endphp

						@if ($results)
							@foreach ($results as $result)
								<tr>
									<td class="bordersolid">{{ $result->exam_roll }}</td>

									{{-- seventy_total --}}
									@if ($c_show['s'])
										<td class="bordersolid">{{ round($result->seventy_total) }}</td>
									@else
										<td class="bordersolid"></td>
									@endif

									{{-- attendance --}}
									@if ($c_show['a'])
										<td class="bordersolid">{{ round($result->attendance) }}</td>
									@else
										<td class="bordersolid"></td>
									@endif

									{{-- prefer_tutorial --}}
									@if ($c_show['ct'])
										<td class="bordersolid">{{ round($result->prefer_tutorial) }}</td>
									@else
										<td class="bordersolid"></td>
									@endif

									{{-- mid_term --}}
									@if ($c_show['m'])
										<td class="bordersolid">{{ round($result->mid_term) }}</td>
									@else
										<td class="bordersolid"></td>
									@endif

									{{-- total --}}
									@if ($c_show['t'])
										<td class="bordersolid">{{ round($result->seventy_total + $result->total) }}</td>
									@else
										<td class="bordersolid"></td>
									@endif

									{{-- grade --}}
									@if ($c_show['g'])
										<td class="bordersolid">{{ creditGrade($result->seventy_total + $result->total,$ce_detail->course->credit) }}</td>
									@else
										<td class="bordersolid"></td>
									@endif
								</tr>

								@php
								$j++;
								$i++;
								@endphp

								@if ($i==25 || $j==42)
									<tr>
										<th class="text-center bordersolid" rowspan="2"><br><br>Exam Roll <br>No.</th>
										<th class="text-center bordersolid" rowspan="2"><br><br>Theoretical <br>Marks <br>70/35</th>
										<th class="text-center bordersolid" colspan="3"><br>Continuous Evaluation Marks 30/15</th>
										<th class="text-center bordersolid" rowspan="2"><br><br>Total <br>100/50</th>
										<th class="text-center bordersolid" rowspan="2"><br><br>Grade</th>
									</tr>
									<tr>
										<td class="bordersolid">Attendance <br>10/5</td>
										<td class="bordersolid">Class Test/Home <br>Assignment/<br>Language Viva <br>10/5</td>
										<td class="bordersolid">Midterm/<br>Card Final <br>10/5</td>
									</tr>
									@php
									$j=0;
									@endphp
								@endif
							@endforeach
						@endif
					</table>
				</div>
			</div>
			<br><br><br>
			<p>Signature of the Examiner & Date</p>
		</body>
		</html>
