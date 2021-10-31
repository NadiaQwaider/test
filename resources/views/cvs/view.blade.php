@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">العنوان الرئيسي</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  اسم الصفحة</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								
								<a href="#" class="btn btn-md btn-primary" style="font-size:16px">
														إضافة جديد <i class="las la-plus"></i>
													</a>
							</div>
							
							<div class="card-body">
							<!--<div class="input-group mb-2">
									<input type="text" class="form-control mr-2" style="margin-right:10px" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">column 1</button>
									</span>
									<input type="text" class="form-control" style="margin-right:10px" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">column 2</button>
									</span>
									<input type="text" class="form-control" style="margin-right:10px" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">column 3</button>
									</span>
									<input type="text" class="form-control" style="margin-right:10px" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">column 4</button>
									</span>
									<input type="text" class="form-control" style="margin-right:10px" placeholder="Searching.....">
									<span class="input-group-append">
										<button class="btn ripple btn-primary" type="button">column 5</button>
									</span>
								</div>-->
								<div class="table-responsive">
									<table class="table text-md-nowrap" >
										<thead >
											<tr>
												<th class="wd-15p border-bottom-0">العمود 1</th>
												<th class="wd-15p border-bottom-0">العمود 2</th>
												<th class="wd-15p border-bottom-0">العمود 3</th>
												<th class="wd-15p border-bottom-0"> العمود 4</th>
												<th class="wd-15p border-bottom-0">العمود 5</th>
												<th class="wd-15p border-bottom-0">العمود 6</th>
												<th class=""> التحكم</th>
											</tr>
										</thead>
										<tbody>
										<tr>
												<td><div class="input-group mb-2"><input type="text" class="form-control" placeholder="">
													<span class="input-group-append">
														<button class="btn ripple btn-sm btn-light" type="button" style="font-size:16px"> ابحث</button>
													</span>
												</div></td>
												<td><div class="input-group mb-2"><input type="text" class="form-control" placeholder="">
													<span class="input-group-append">
														<button class="btn ripple btn-sm btn-light" type="button" style="font-size:16px"> ابحث</button>
													</span>
												</div></td>
												<td><div class="input-group mb-2"><input type="text" class="form-control" placeholder="">
													<span class="input-group-append">
														<button class="btn ripple btn-sm btn-light" type="button" style="font-size:16px"> ابحث</button>
													</span>
												</div></td>
												<td><div class="input-group mb-2"><input type="text" class="form-control" placeholder="">
													<span class="input-group-append">
														<button class="btn ripple btn-sm btn-light" type="button" style="font-size:16px"> ابحث</button>
													</span>
												</div></td>
												<td>
												<div class="input-group mb-2"><input type="text" class="form-control" placeholder="">
													<span class="input-group-append">
														<button class="btn ripple btn-sm btn-light" type="button" style="font-size:16px"> ابحث</button>
													</span>
												</div>
												</td>
												<td><div class="input-group mb-2"><input type="text" class="form-control" placeholder="">
													<span class="input-group-append">
														<button class="btn ripple btn-sm btn-light" type="button" style="font-size:16px"> ابحث</button>
													</span>
												</div></td>
												<td>
													
												</td>
											</tr>
											<tr>
											<tr>
												<td>Bella</td>
												<td>Chloe</td>
												<td>System Developer</td>
												<td>2018/03/12</td>
												<td>$654,765</td>
												<td>b.Chloe@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Donna</td>
												<td>Bond</td>
												<td>Account Manager</td>
												<td>2012/02/21</td>
												<td>$543,654</td>
												<td>d.bond@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Harry</td>
												<td>Carr</td>
												<td>Technical Manager</td>
												<td>20011/02/87</td>
												<td>$86,000</td>
												<td>h.carr@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Lucas</td>
												<td>Dyer</td>
												<td>Javascript Developer</td>
												<td>2014/08/23</td>
												<td>$456,123</td>
												<td>l.dyer@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Karen</td>
												<td>Hill</td>
												<td>Sales Manager</td>
												<td>2010/7/14</td>
												<td>$432,230</td>
												<td>k.hill@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Dominic</td>
												<td>Hudson</td>
												<td>Sales Assistant</td>
												<td>2015/10/16</td>
												<td>$654,300</td>
												<td>d.hudson@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Herrod</td>
												<td>Chandler</td>
												<td>Integration Specialist</td>
												<td>2012/08/06</td>
												<td>$137,500</td>
												<td>h.chandler@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Jonathan</td>
												<td>Ince</td>
												<td>junior Manager</td>
												<td>2012/11/23</td>
												<td>$345,789</td>
												<td>j.ince@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Leonard</td>
												<td>Ellison</td>
												<td>Junior Javascript Developer</td>
												<td>2010/03/19</td>
												<td>$205,500</td>
												<td>l.ellison@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Madeleine</td>
												<td>Lee</td>
												<td>Software Developer</td>
												<td>20015/8/23</td>
												<td>$456,890</td>
												<td>m.lee@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Karen</td>
												<td>Miller</td>
												<td>Office Director</td>
												<td>2012/9/25</td>
												<td>$87,654</td>
												<td>k.miller@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Lisa</td>
												<td>Smith</td>
												<td>Support Lead</td>
												<td>2011/05/21</td>
												<td>$342,000</td>
												<td>l.simth@datatables.net</td><td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Morgan</td>
												<td>Keith</td>
												<td>Accountant</td>
												<td>2012/11/27</td>
												<td>$675,245</td>
												<td>m.keith@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											<tr>
												<td>Nathan</td>
												<td>Mills</td>
												<td>Senior Marketing Designer</td>
												<td>2014/10/8</td>
												<td>$765,980</td>
												<td>n.mills@datatables.net</td>
												<td>
													<a href="#" class="btn btn-md btn-primary">
														<i class="las la-eye"></i>
													</a>
													<a href="#" class="btn btn-md btn-info">
														<i class="las la-pen"></i>
													</a>
													<a href="#" class="btn btn-md btn-danger">
														<i class="las la-trash"></i>
													</a>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->		
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection