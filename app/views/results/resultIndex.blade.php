@extends('layouts.master')

<?php
/**
 * Created by PhpStorm.
 * User: isaiah
 * Date: 12/3/14
 * Time: 1:04 PM
 */ ?>


 @section('contents')

 <div class="container">

 <!-- subjects taught by this teacher -->

        <div class="container grid_8">
                    	<a class="mws-stat" href="#">
                        	<!-- Statistic Icon (edit to change icon) -->
                        	<span class="mws-stat-icon icol32-spellcheck"></span>

                            <!-- Statistic Content -->
                            <span class="mws-stat-content">
                            	<span class="mws-stat-title">Kiswahili</span>
                                <span class="mws-stat-value">324</span>
                            </span>
                        </a>

                    	<a class="mws-stat" href="#">
                        	<!-- Statistic Icon (edit to change icon) -->
                        	<span class="mws-stat-icon icol32-landmarks"></span>

                            <!-- Statistic Content -->
                            <span class="mws-stat-content">
                            	<span class="mws-stat-title">Geography</span>
                                <span class="mws-stat-value">74%</span>
                            </span>
                        </a>

                    	<a class="mws-stat" href="#">
                        	<!-- Statistic Icon (edit to change icon) -->
                        	<span class="mws-stat-icon icol32-text-list-numbers"></span>

                            <!-- Statistic Content -->
                            <span class="mws-stat-content">
                            	<span class="mws-stat-title">Mathematics</span>
                                <span class="mws-stat-value">14</span>
                            </span>
                        </a>

                    	<a class="mws-stat" href="#">
                        	<!-- Statistic Icon (edit to change icon) -->
                        	<span class="mws-stat-icon icol32-measure"></span>

                            <!-- Statistic Content -->
                            <span class="mws-stat-content">
                            	<span class="mws-stat-title">Physics</span>
                                <span class="mws-stat-value">22%</span>
                            </span>
                        </a>

                    	<a class="mws-stat" href="#">
                        	<!-- Statistic Icon (edit to change icon) -->
                        	<span class="mws-stat-icon icol32-book-open"></span>

                            <!-- Statistic Content -->
                            <span class="mws-stat-content">
                            	<span class="mws-stat-title">Chemistry</span>
                                <span class="mws-stat-value">77</span>
                            </span>
                        </a>

                        <n/>
                        <n/>
                        <n/>
        </div>
 <!-- subjects taught by this teacher -->

   <div class="mws-panel grid_8 mws-collapsible">
                 	<div class="mws-panel-header">
                     	<span><i class="icon-table"></i> Browser Engines</span>
                     </div>
                     <div class="mws-panel-body no-padding">
                         <table class="mws-table mws-datatable" id="dynamic-table">
                             <thead>
                                 <tr>
                                     <th>Rendering engine</th>
                                     <th>Browser</th>
                                     <th>Platform(s)</th>
                                     <th>Engine version</th>
                                     <th>CSS grade</th>
                                     <th></th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 4.0</td>
                                     <td>Win 95+</td>
                                     <td>4</td>
                                     <td><span class="badge badge-info">X</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 5.0</td>
                                     <td>Win 95+</td>
                                     <td>5</td>
                                     <td><span class="badge badge-success">C</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 5.5</td>
                                     <td>Win 95+</td>
                                     <td>5.5</td>
                                     <td><span class="badge badge-important">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 6</td>
                                     <td>Win 98+</td>
                                     <td>6</td>
                                     <td><span class="badge badge-warning">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 7</td>
                                     <td>Win XP SP2+</td>
                                     <td>7</td>
                                     <td><span class="badge badge-success">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>AOL browser (AOL desktop)</td>
                                     <td>Win XP</td>
                                     <td>6</td>
                                     <td><span class="badge badge-warning">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Firefox 1.0</td>
                                     <td>Win 98+ / OSX.2+</td>
                                     <td>1.7</td>
                                     <td><span class="badge badge-info">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Firefox 1.5</td>
                                     <td>Win 98+ / OSX.2+</td>
                                     <td>1.8</td>
                                     <td><span class="badge">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Camino 1.5</td>
                                     <td>OSX.3+</td>
                                     <td>1.8</td>
                                     <td><span class="badge badge-info">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Netscape 7.2</td>
                                     <td>Win 95+ / Mac OS 8.6-9.2</td>
                                     <td>1.7</td>
                                     <td><span class="badge badge-important">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 4.0</td>
                                     <td>Win 95+</td>
                                     <td>4</td>
                                     <td><span class="badge badge-warning">X</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 5.0</td>
                                     <td>Win 95+</td>
                                     <td>5</td>
                                     <td><span class="badge badge-success">C</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 5.5</td>
                                     <td>Win 95+</td>
                                     <td>5.5</td>
                                     <td><span class="badge badge-warning">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 6</td>
                                     <td>Win 98+</td>
                                     <td>6</td>
                                     <td><span class="badge badge-info">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>Internet Explorer 7</td>
                                     <td>Win XP SP2+</td>
                                     <td>7</td>
                                     <td><span class="badge">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Trident</td>
                                     <td>AOL browser (AOL desktop)</td>
                                     <td>Win XP</td>
                                     <td>6</td>
                                     <td><span class="badge badge-warning">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Firefox 1.0</td>
                                     <td>Win 98+ / OSX.2+</td>
                                     <td>1.7</td>
                                     <td><span class="badge badge-success">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Firefox 1.5</td>
                                     <td>Win 98+ / OSX.2+</td>
                                     <td>1.8</td>
                                     <td><span class="badge badge-warning">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Camino 1.5</td>
                                     <td>OSX.3+</td>
                                     <td>1.8</td>
                                     <td><span class="badge badge-info">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>Gecko</td>
                                     <td>Netscape 7.2</td>
                                     <td>Win 95+ / Mac OS 8.6-9.2</td>
                                     <td>1.7</td>
                                     <td><span class="badge">A</span></td>
                                     <td>
                                         <span class="btn-group">
                                             <a href="#" class="btn btn-small"><i class="icon-search"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                             <a href="#" class="btn btn-small"><i class="icon-trash"></i></a>
                                         </span>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>

    </div>

</div>


    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{  ('plugins/datatables/jquery.dataTables.min.js') }}"></script>

<script>

    $(document).ready(function() {
        $('#dynamic-table').dataTable( {
            "order": [[ 0, "desc" ]]
        } );
    } );

    </script>

    <!--dynamic table initialization -->
    <script src="{{ asset('js/dynamic_table_init.js') }}"></script>

    <script src="{{  ('js/libs/jquery-1.8.3.min.js') }}"></script>

    <script src="{{  ('jui/js/jquery-ui-1.9.2.min.js') }}"></script>
    <script src="{{  ('jui/jquery-ui.custom.min.js') }}"></script>
    <script src="{{  ('jui/js/jquery.ui.touch-punch.js') }}"></script>




 @stop