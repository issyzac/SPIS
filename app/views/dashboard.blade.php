@extends('layouts.master')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 11/20/14
 * Time: 7:40 PM
 */ ?>


@section('contents')


    		<div class="container">
    			<div class="col-md-6">
    				<div class="heading-sec">
    					<h1>Calendars <i>Welcome to Flat Lab</i></h1>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-calendar-o icon-calendar icon-large"></i>
                      <span></span> <b class="caret"></b>
                   </div>
    			</div>

    			<div class="col-md-12">
    				<div id='calendar'></div>
    			</div>


    	<div class="col-md-12">
    		<div class="calendar">

    			<div class="col leftCol black">
    				<div class="content">
    					<h1 class="date">Friday<span>September 12th</span></h1>
    					<div class="notes">
    						<p>
    							<input type="text" value="" placeholder="new note" />
    							<a href="#" title="Add note" class="addNote animate">+</a>
    						</p>
    						<ul class="noteList">
    							<li>Birthday Party<a href="#" title="Remove note" class="removeNote animate">x</a></li>
    							<li>My Private Event<a href="#" title="Remove note" class="removeNote animate">x</a></li>
    							<li>My Home Event<a href="#" title="Remove note" class="removeNote animate">x</a></li>
    							<li>At Party Event<a href="#" title="Remove note" class="removeNote animate">x</a></li>
    							<li>College Event<a href="#" title="Remove note" class="removeNote animate">x</a></li>
    						</ul>
    					</div>
    				</div>
    			</div>

    			<div class="col rightCol">
    				<div class="content">
    					<h2 class="year">2013</h2>
    					<ul class="months">
    						<li><a href="#" title="Jan" data-value="1">Jan</a></li>
    						<li><a href="#" title="Feb" data-value="2">Feb</a></li>
    						<li><a href="#" title="Mar" data-value="3">Mar</a></li>
    						<li><a href="#" title="Apr" data-value="4">Apr</a></li>
    						<li><a href="#" title="May" data-value="5">May</a></li>
    						<li><a href="#" title="Jun" data-value="6">Jun</a></li>
    						<li><a href="#" title="Jul" data-value="7">Jul</a></li>
    						<li><a href="#" title="Aug" data-value="8">Aug</a></li>
    						<li><a href="#" title="Sep" data-value="9" class="selected">Sep</a></li>
    						<li><a href="#" title="Oct" data-value="10">Oct</a></li>
    						<li><a href="#" title="Nov" data-value="11">Nov</a></li>
    						<li><a href="#" title="Dec" data-value="12">Dec</a></li>
    					</ul>
    					<div class="clearfix"></div>
    					<ul class="weekday">
    						<li><a href="#" title="Mon" data-value="1">Mon</a></li>
    						<li><a href="#" title="Tue" data-value="2">Tue</a></li>
    						<li><a href="#" title="Wed" data-value="3">Wed</a></li>
    						<li><a href="#" title="Thu" data-value="4">Thu</a></li>
    						<li><a href="#" title="Fri" data-value="5">Fri</a></li>
    						<li><a href="#" title="Say" data-value="6">Sat</a></li>
    						<li><a href="#" title="Sun" data-value="7">Sun</a></li>
    					</ul>
    					<div class="clearfix"></div>
    					<ul class="days">
    						<script>
    							for( var _i = 1; _i <= 31; _i += 1 ){
    								var _addClass = '';
    								if( _i === 12 ){ _addClass = ' class="selected"'; }

    								switch( _i ){
    									case 8:
    									case 10:
    									case 27:
    										_addClass = ' class="event"';
    									break;
    								}

    								document.write( '<li><a href="#" title="'+_i+'" data-value="'+_i+'"'+_addClass+'>'+_i+'</a></li>' );
    							}
    						</script>
    					</ul>
    					<div class="clearfix"></div>
    				</div>
    			</div>

    			<div class="clearfix"></div>

    		</div>
    	</div>


    		</div><!-- Container -->



@stop

