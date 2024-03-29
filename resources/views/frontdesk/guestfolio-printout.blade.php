@extends('layouts.frontdeskLayout')

@section('content')

<div class="page-content page-boxed">
<div class="header">

            <h2><strong>GUEST</strong> FOLIO</h2>
     
          </div>
          <div class="m-t-10 m-b-10 no-print"> 
            <button type="button" class="btn btn-primary m-r-10 m-b-10"><i class="fa fa-dollar m-r-10"></i> Print</button>
            <button type="button" class="btn btn-white m-r-10 m-b-10"><i class="fa fa-print m-r-10"></i> Print Invoice</button>
            <button type="button" class="btn btn-white m-r-10 m-b-10"><i class="fa fa-file-text m-r-10"></i> Export as PDF</button>                
            <button type="button" class="btn btn-white m-r-10 m-b-10"><i class="fa fa-envelope m-r-10"></i> Send by email</button>
          </div>
          <div class="panel">
          <div class="panel-content padding">
          <div class="row invoice-page">
            <div class="col-md-12 p-t-0">
              <div class="row">
                <div class="col-md-12">
                  <div class="pull-left">
                    <h4 class="w-500 c-gray f-14"><strong>FROM</strong></h4>
                    <img width="100px" src="{{url('assets/global/images/logo/logo-q.png')}}" class="img-responsive0" alt="themeforest">
                    <address>
                      <p class="width-300 m-t-10"><strong>Q Citipark Hotel</strong></p>
                      <p class="width-300">J.P. Laurel Street corner Roxas Avenue</p>
                      <p class="width-300">General Santos City, PH 9500</p>
                      <abbr title="Phone">P:</abbr> 0922 821 7405
                    </address>
                  </div>
                  <div class="pull-right">
                    <h4 class="w-500 c-gray f-14"><strong>TO</strong></h4>
                  
                    <address>
                      <p class="width-300 m-t-10"><strong></strong></p>
                      <p class="width-300"></p>
                      <p class="width-300"></p>
                      <abbr title="Phone">P:</abbr> (123) 456-789
                    </address>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-12 m-t-20 m-b-20">
                      <p><strong>Invoice Date:</strong> <span>May 4, 2014</span></p>
                      <p><strong>Due Date:</strong> <span>Mai 16, 2014</span></p>
                    </div>
                  </div>
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width:65px" class="unseen text-center">QTY</th>
                        <th class="text-left">DESCRIPTION</th>
                        <th style="width:145px" class="text-right">UNIT PRICE</th>
                        <th style="width:95px" class="text-right">TOTAL</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="item-row">
                        <td class="delete-wpr">
                          <p class="qty text-center">1</p>
                        </td>
                        <td>
                          <div class="text-primary">
                            <p><strong>Template Customization</strong></p>
                          </div>
                          <p class="width-100p"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small></p>
                        </td>
                        <td>
                          <p class="text-right cost">$79.00</p>
                        </td>
                        <td class="text-right price">$79.00</td>
                      </tr>
                      <tr class="item-row">
                        <td class="delete-wpr">
                          <p class="qty text-center">2</p>
                        </td>
                        <td>
                          <div class="text-primary">
                            <p><strong>Email Template</strong></p>
                          </div>
                          <p class="width-100p"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small></p>
                        </td>
                        <td class="text-right">$150.00</td>
                        <td class="text-right price">$300.00</td>
                      </tr>
                      <tr class="item-row">
                        <td class="delete-wpr">
                          <p class="qty text-center">1</p>
                        </td>
                        <td>
                          <div class="text-primary">
                            <p><strong>PSD Development</strong></p>
                          </div>
                          <p class="width-100p"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</small></p>
                        </td>
                        <td class="text-right">$85.00</td>
                        <td class="text-right price">$85.00</td>
                      </tr>
                      <tr>
                        <td colspan="2" rowspan="4"></td>
                        <td class="text-right"><strong>Subtotal</strong></td>
                        <td class="text-right" id="subtotal">$464.00</td>
                      </tr>
                      <tr>
                        <td class="text-right no-border"><strong>Shipping</strong></td>
                        <td class="text-right">$30.00
                        </td>
                      </tr>
                      <tr>
                        <td class="text-right no-border"><strong>VAT Included in Total</strong></td>
                        <td class="text-right">$0.00</td>
                      </tr>
                      <tr>
                        <td class="text-right no-border">
                          <div><strong>Total</strong></div>
                        </td>
                        <td class="text-right" id="total">$494.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="well bg-white">
                    Thank you for your business. Please make sure all cheques payable to <strong>ThemeForest Web Services, Inc.</strong> Account No. 35757745
                  </div>
                </div>
              </div>
            </div>
          </div>

          </div></div>
          <div class="footer">
            <div class="copyright">
              <p class="pull-left sm-pull-reset">
                <span>Copyright <span class="copyright">©</span> 2015 </span>
                <span>THEMES LAB</span>.
                <span>All rights reserved. </span>
              </p>
              <p class="pull-right sm-pull-reset">
                <span><a href="#" class="m-r-10">Support</a> | <a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
              </p>
            </div>
          </div>
    </div>
 
    @endsection