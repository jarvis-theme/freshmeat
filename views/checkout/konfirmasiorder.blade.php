<div class="page-title">
    <div class="container">
        <h2 class="title"><i class="fa fa-shopping-cart"></i> Detail Order</h2>
        <hr />
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th><span>Order ID</span></th>
                        <th><span>Date</span></th>
                        <th><span>Product</span></th>
                        <th><span>Qty</span></th>
                        <th><span>Tracking Number</span></th>
                        <th><span>Status</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ prefixOrder().$order->kodeOrder }}</td>
                        <td>{{ waktu($order->tanggalOrder) }}</td>
                        <td>
                            <ul>
                                @foreach ($order->detailorder as $detail)
                                <li class="order-detail">{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku->opsi1.($detail->opsisku->opsi2 != '' ? ' / '.$detail->opsisku->opsi2:'').($detail->opsisku->opsi3 !='' ? ' / '.$detail->opsisku->opsi3:'').')':''}} - {{$detail->qty}}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="quantity">{{ price($order->total) }}</td>
                        <td class="sub-price">{{ $order->noResi }}</td>
                        <td class="total-price">
                            @if($order->status==0)
                                <span class="label label-warning">Pending</span>
                            @elseif($order->status==1)
                                <span class="label label-danger">Confirmation Received</span>
                            @elseif($order->status==2)
                                <span class="label label-info">Payments Accepted</span>
                            @elseif($order->status==3)
                                <span class="label label-success">Package Sent</span>
                            @elseif($order->status==4)
                                <span class="label label-default">Cancel</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        @if($order->jenisPembayaran==1 && $order->status == 0) 
        <div class="row inner-column">
            <div class="col-md-5 col-lg-offset-4">
                <h2><b>{{trans('content.step5.confirm_btn')." ".trans('content.step3.transfer')}}</b></h2>
                {{Form::open(array('url'=> 'konfirmasiorder/'.$order->id, 'method'=>'put'))}} 
                    <div class="form-group">
                        <label class="control-label"> Bank Account Name:</label>
                        <input type="text" class="form-control" id="search" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Bank Account Number:</label>
                        <input type="number" class="form-control" id="search" name="noRekPengirim" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Payment:</label>
                        <select name="bank" class="form-control" required>
                            <option value="">-- Select Payment --</option>
                            @foreach ($banktrans as $bank)
                            <option value="{{$bank->id}}">{{$bank->bankdefault->nama}} - {{$bank->noRekening}} - A/n {{$bank->atasNama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Amount Paid:</label>
                        <input type="number" class="form-control" id="search" name="jumlah" value="{{$order->total}}" required>
                    </div>
                    <button type="submit" class="btn btn-default">{{trans('content.step5.confirm_btn')}}</button>
                {{Form::close()}}
            </div>
        </div>
        @endif
        @if($paymentinfo!=null)
        <h3><center>Paypal Payment Details</center></h3><br>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td>Payment Status</td><td>:</td><td>{{$paymentinfo['payment_status']}}</td>
                </tr>
                <tr>
                    <td>Payment Date</td><td>:</td><td>{{$paymentinfo['payment_date']}}</td>
                </tr>
                <tr>
                    <td>Address Name</td><td>:</td><td>{{$paymentinfo['address_name']}}</td>
                </tr>
                <tr>
                    <td>Payer Email</td><td>:</td><td>{{$paymentinfo['payer_email']}}</td>
                </tr>
                <tr>
                    <td>Item Name</td><td>:</td><td>{{$paymentinfo['item_name1']}}</td>
                </tr>
                <tr>
                    <td>Receiver Email</td><td>:</td><td>{{$paymentinfo['receiver_email']}}</td>
                </tr>
                <tr>
                    <td>Total Payment</td><td>:</td><td>{{$paymentinfo['payment_gross']}} {{$paymentinfo['mc_currency']}}</td>
                </tr>
            </table>
        </div>
        <p>Thanks you for your order.</p>
        <br>
        @endif 

        @if($order->jenisPembayaran==2)
            <div class="well">
                <center>
                    <h2><b>{{trans('content.step5.confirm_btn')}} Paypal</b></h2><br>
                    <p>{{trans('content.step5.paypal')}}</p>
                </center>
                <center id="paypal">{{$paypalbutton}}</center>
                <br>
            </div>
        @elseif($order->jenisPembayaran==4) 
            @if(($checkouttype==1 && $order->status < 2) || ($checkouttype==3 && ($order->status!=6)))
            <div class="well">
                <center>
                    <h2><b>{{trans('content.step5.confirm_btn')}} iPaymu</b></h2><br>
                    <p>{{trans('content.step5.ipaymu')}}</p>
                    <a class="btn btn-info" href="{{url('ipaymu/'.$order->id)}}" target="_blank">{{trans('content.step5.ipaymu_btn')}}</a>
                </center>
                <br>
            </div>
            @endif
        @elseif($order->jenisPembayaran==5 && $order->status == 0)
            <div class="well">
                <center>
                    <h2><b>{{trans('content.step5.confirm_btn')}} DOKU MyShortCart</b></h2><br>
                    <p>{{trans('content.step5.doku')}}</p>
                    {{ $doku_button }}
                </center>
                <br>
            </div>
        @elseif($order->jenisPembayaran == 6 && $order->status == 0)
            <div class="well">
                <center>
                    <h2><b>{{trans('content.step5.confirm_btn')}} Bitcoin</b></h2><br>
                    <p>{{trans('content.step5.bitcoin')}}</p>
                    {{$bitcoinbutton}}
                    <br>
                </center>
            </div>
        @elseif($order->jenisPembayaran == 8 && $order->status == 0)
            <div class="well">
                <center>
                    <h3><b>{{trans('content.step5.confirm_btn')}} Veritrans</b></h3><br>
                    <p>{{trans('content.step5.veritrans')}}</p>
                    <button class="btn btn-info" onclick="location.href='{{ $veritrans_payment_url }}'">{{trans('content.step5.veritrans_btn')}}</button>
                </center>
                <br>
            </div>
        @endif
        <hr>
   </div>
</div>
