@extends('layout.master')

@section('content')
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Create Order</h1>
                        <h1><br></h1>
                        <form class="form-horizontal">
<!--                             <div class="form-group">
                                <label class="col-sm-2 control-label">Order ID</label>
                                <div class="col-sm-10">
                                    <p class="form-control-static">45738</p>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label for="inputCustID" class="col-sm-2 control-label">Customer ID</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputCustID" placeholder="Enter Customer ID">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="chooseDates" class="col-sm-2 control-label">Wash Dates</label>
                                <div class="col-sm-8" id="sandbox-container">
                                    <div class="input-daterange input-group" id="datepicker">
                                    <input class="input-sm form-control" name="start" type="text" placeholder="Start Date">
                                    <span class="input-group-addon">to</span>
                                    <input class="input-sm form-control" name="end" type="text" placeholder="Claim Date">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="choosePrice" class="col-sm-2 control-label">Type</label>
                                <div class="col-sm-8">
                                    <select class="form-control">
                                        <option value="machine-wash">Machine Wash</option>
                                        <option value="hand-wash">Hand Wash</option>
                                        <option value="dry-clean">Dry Clean</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPrice" class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputPrice" placeholder="Enter Price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputWeight" class="col-sm-2 control-label">Weight</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputWeight" placeholder="Enter Weight">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputRecNum" class="col-sm-2 control-label">Receipt Number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="inputRecNum" placeholder="Enter Receipt Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hasPress" class="col-sm-2 control-label">With Press?</label>
                                <div class="col-sm-8">
                                <label class="radio-inline"><input type="radio" name="optradio">Yes</label>
                                <label class="radio-inline"><input type="radio" name="optradio">No</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

@stop
