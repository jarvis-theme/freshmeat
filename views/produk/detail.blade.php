<section id="breadcrumb">
    <div class="container">
        {{breadcrumbProduk($produk,'; <span>/</span> ',';',true)}} 
    </div>
</section>
<div class="container" id="main-layout">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(count(list_category()) > 0)
            <div class="widget accordion-widget category-accordions">
                <h1>Category</h1>
                <div class="accordion">
                    @foreach(list_category() as $side_menu)
                    @if($side_menu->parent == '0')
                    <div class="accordion-group side-accor">
                        <div class="accordion-heading">
                            @if(count($side_menu->anak) >= 1)
                            <a href="{{category_url($side_menu)}}"><span class="accordion-toggle collapsed" data-toggle="collapse" href="#{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $side_menu->nama),23)}}"></span>
                            @else
                            <a class="collapsed" href="{{category_url($side_menu)}}">
                            @endif  
                                {{$side_menu->nama}}
                            </a>
                        </div>
                        @if($side_menu->anak->count() != 0)
                        <div id="{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $side_menu->nama),23)}}" class="accordion-body collapse submenu">
                            <div class="accordion-inner">
                                @foreach($side_menu->anak as $submenu)
                                @if($submenu->parent == $side_menu->id)
                                    <div class="accordion-heading">
                                        @if(count($submenu->anak) > 0 )
                                        <a href="{{category_url($submenu)}}"><span href="#{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $submenu->nama),23)}}" class="accordion-toggle collapsed submenu" data-toggle="collapse"></span>
                                        @else
                                        <a href="{{category_url($submenu)}}" class="collapsed">
                                        @endif
                                            {{$submenu->nama}}
                                        </a>
                                    </div>
                                    @if($submenu->anak->count() != 0)
                                    <div id="{{short_description(preg_replace('/[^a-zA-Z0-9-]/', '', $submenu->nama),23)}}" class="accordion-body collapse">
                                        <ul>
                                            @foreach($submenu->anak as $submenu2)
                                            @if($submenu2->parent == $submenu->id)
                                            <li><a href="{{category_url($submenu2)}}">{{$submenu2->nama}}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            @endif
            @if(best_seller()->count() > 0)
            <div id="best-seller" class="block">
                <div class="title"><h2>Best Seller</h2></div>
                <ul class="block-content">
                    @foreach(best_seller() as $best)
                    <li>
                        <a href="{{product_url($best)}}">
                            <div class="img-block">
                                {{HTML::image(product_image_url($best->gambar1,'thumb'), $best->nama,array('width'=>'81'))}}
                            </div>
                            <p class="product-name">{{short_description($best->nama,35)}}</p>
                            <p class="price">{{price($best->hargaJual)}}</p> 
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="btn-more">
                    <a href="{{url('produk')}}">view more</a>
                </div>
            </div>
            @endif
            @if(vertical_banner()->count() > 0)
            <div id="advertising" class="block">
                @foreach(vertical_banner() as $key => $banners)
                <div class="img-block">
                    <a href="{{url($banners->url)}}">
                        {{HTML::image(banner_image_url($banners->gambar),'Info Promo',array('class'=>'img-responsive'))}}
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            <form action="#" id="addorder">
                <div class="product-details">
                    <div class="row">
                        <div id="prod-left" class="col-lg-6 col-xs-12 col-sm-6">
                            <div class="big-image">
                                {{HTML::image(product_image_url($produk->gambar1,'large'), $produk->nama,array('width'=>'419','height'=>'563'))}}
                                <a class="zoom fancybox" href="{{product_image_url($produk->gambar1,'large')}}" title="{{$produk->nama}}">&nbsp;</a>
                            </div>
                            <div id="thumb-view">
                                <ul id="thumb-list" class="owl-carousel owl-theme">
                                    @if($produk->gambar1 != '')
                                    <li class="item">
                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar1,'large')}}" title="{{$produk->nama}}">
                                        {{HTML::image(product_image_url($produk->gambar1,'medium'),'gambar1',array('width'=>'130', 'height'=>'174'))}}
                                        </a>
                                    </li>
                                    @endif
                                    @if($produk->gambar2 != '')
                                    <li class="item">
                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar2,'large')}}" title="{{$produk->nama}}">
                                        {{HTML::image(product_image_url($produk->gambar2,'medium'),'gambar2',array('width'=>'130', 'height'=>'174'))}}
                                        </a>
                                    </li>
                                    @endif
                                    @if($produk->gambar3 != '')
                                    <li class="item">
                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar3,'large')}}" title="{{$produk->nama}}">
                                        {{HTML::image(product_image_url($produk->gambar3,'medium'),'gambar3',array('width'=>'130', 'height'=>'174'))}}
                                        </a>
                                    </li>
                                    @endif
                                    @if($produk->gambar4 != '')
                                    <li class="item">
                                        <a class="zoom fancybox" href="{{product_image_url($produk->gambar4,'large')}}" title="{{$produk->nama}}">
                                        {{HTML::image(product_image_url($produk->gambar4,'medium'),'gambar4',array('width'=>'130', 'height'=>'174'))}}
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                        <div id="prod-right" class="col-lg-6 col-xs-12 col-sm-6">
                            <h1 class="name-title">{{$produk->nama}}</h1>
                            <span class="price">
                            @if($produk->hargaCoret != 0)
                            <p class="discount">{{ price($produk->hargaCoret) }}</p>&nbsp;&nbsp;
                            @endif
                            {{ price($produk->hargaJual) }}
                            </span>
                            <div class="img-rating">
                                {{sosialShare(product_url($produk))}}
                            </div>
                            <div class="desc-prod">
                                <p class="title">Description</p>
                                <p>{{$produk->deskripsi}}</p>
                                <div class="clr"></div>
                            </div>
                            <div class="avail-info">
                                @if($produk->stok > 0)
                                <i class="instock" id="stock"></i><span>Available, stock {{$produk->stok}} item</span>
                                @else
                                <i class="fa fa-times" id="empty-stock"></i><span>Habis</span>
                                @endif
                            </div>
                            <div class="attribute">
                                <fieldset class="attribute_fieldset">
                                    <div class="attribute_list">
                                        @if($opsiproduk->count() > 0) 
                                        <div class="size-list">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Opsi :</label>
                                                <div class="col-sm-5">
                                                    <select class="form-control attribute_select" name="opsiproduk">
                                                        <option value="">-- Pilih Opsi --</option>
                                                        @foreach ($opsiproduk as $key => $opsi)
                                                        <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}} >
                                                            {{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{jadiRupiah($opsi->harga)}}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="quantity">
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label">Qty :</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="qty" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="clr"></div>
                            <div class="btm-details">
                                <button class="mainbtn" type="submit">Buy</button>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="clr"></div>
                    </div>
                </div>
            </form>
            @if(count(other_product($produk)) > 0)
            <div id="related-product" class="product-list">
                <h2 class="title">Related Product</h2>
                <div class="row">
                    <ul class="grid">
                        @foreach(other_product($produk) as $produk_lain)
                         <li class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                           <div class="image-container">
                                <a href="{{product_url($produk_lain)}}">
                                    {{ HTML::image(product_image_url($produk_lain->gambar1,'medium'), $produk_lain->nama, array('class'=>'img-responsive','style'=>'height:200px;width:auto;')) }}
                                </a>
                            </div>
                            <h5 class="product-name">{{ $produk_lain->nama }}</h5>
                            <span class="price">{{ price($produk_lain->hargaJual) }}</span>
                            <a href="{{ product_url($produk) }}" class="buy-btn">Lihat</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
           
            <div class="row col-xs-12" id="comment-product">
                <hr>
                {{ pluginComment(product_url($produk), @$produk) }} 
            </div>
        </div>
    </div>
</div>