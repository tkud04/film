@extends('layout')

@section('title',$product['sku'])

@section('content')
			<div class="col-md-12">
			<form method="post" action="{{url('edit-product')}}" enctype="multipart/form-data">
				{!! csrf_field() !!}
                <div class="block">
                    <div class="header">
                        <h2>Edit product information</h2>
                    </div>
                    <div class="content controls">
                        <div class="form-row">
                            <div class="col-md-3">SKU:</div>
                            <div class="col-md-9"><input type="text" name="xf" class="form-control" placeholder="Will be generated" value="{{$product['sku']}}" readonly/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">Description:</div>
                            <div class="col-md-9"><textarea class="form-control" name="description" placeholder="Brief description..">{{$product['pd']['description']}}</textarea></div>
                        </div> 
						<div class="form-row">
                            <div class="col-md-3">Price(&#8358;):</div>
                            <div class="col-md-9"><input type="number" class="form-control" name="amount" placeholder="Price in NGN" value="{{$product['pd']['amount']}}"/></div>
                        </div> 
						<div class="form-row">
                            <div class="col-md-3">Category:</div>
                            <div class="col-md-9">
							  <select class="form-control" name="category">
							    <option value="none">Select category</option>
								<?php
								foreach($categories as $c){
								$ss = $c['category'] == $product['pd']['category'] ? " selected='selected'" : "";
								?>
								 <option value="{{$c['category']}}" {{$ss}}>{{$c['name']}}</option>
								<?php
								}
								?>
							  </select>
							</div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">Status:</div>
                            <div class="col-md-9">
							  <select class="form-control" name="status">
							    <option value="none">Select status</option>
								<?php
								$statuses = ['enabled' => "Enabled",'disabled' => "Disabled"];
								foreach($statuses as $key => $value){
								$ss = $product['status'] == $key ? " selected='selected'" : "";
								?>
								 <option value="{{$key}}" {{$ss}}>{{$value}}</option>
								<?php
								}
								?>
							  </select>
							</div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">Stock status:</div>
                           <div class="col-md-9">
							  <select class="form-control" name="in_stock">
							    <option value="none">Select stock status</option>
								<?php
								 $stockStatuses = ['in_stock' => "In stock",'new' => "New",'out_of_stock' => "Out of stock"];
								
								foreach($stockStatuses as $key=> $value){
									$ss = $key == $product['pd']['in_stock'] ? " selected='selected'" : "";
								?>
								 <option value="{{$key}}" {{$ss}}>{{$value}}</option>
								<?php
								}
								?>
							  </select>
							</div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">Images:</div>
                            <div class="col-md-9">
							   <ul class="list-inline">
							    <?php
								  $imggs = $product['imggs'];
								  
								  foreach($imggs as $i){
                                ?>
								<li><img class="img img-responsive" src="{{$i}}" width="200" height="300"></li>
                                <?php
								  }
                                ?>
                               </ul>								
							</div>
                        </div>
						<div class="form-row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
							  <center>
							    <button type="submit" class="btn btn-default btn-block btn-clean">Submit</button>
							  </center>
							</div>
                            <div class="col-md-4"></div>							
                        </div>
                                              
                    </div>
                </div>  
            </form>				
            </div>
@stop