@extends('layout')

@section('new product')
<div class="section product">
		<div class="container">
			<div class="section-head">
				<h4>NEW PRODUCT</h4>
				<div class="divider-top"></div>
				<div class="divider-bottom"></div>
			</div>

			@foreach($data as $k=>$v)

			<div class="row">
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new1.png') }}" alt="">
						<h6><a href="">{{$v->goods_title}}</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new2.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
			</div>

			@endforeach
			<div class="row margin-bottom">
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new3.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new4.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('top product')
<div class="section product">
		<div class="container">
			<div class="section-head">
				<h4>TOP PRODUCT</h4>
				<div class="divider-top"></div>
				<div class="divider-bottom"></div>
			</div>
			<div class="row">
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new1.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new2.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new3.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
				<div class="col s6">
					<div class="content">
						<img src="{{ asset('mstore/img/product-new4.png') }}" alt="">
						<h6><a href="">Fashion Men's</a></h6>
						<div class="price">
							$20 <span>$28</span>
						</div>
						<button class="btn button-default">ADD TO CART</button>
					</div>
				</div>
			</div>
			<div class="pagination-product">
				<ul>
					<li class="active">1</li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li><a href="">5</a></li>
				</ul>
			</div>
		</div>
	</div>
@endsection