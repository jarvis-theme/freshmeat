<section id="breadcrumb">
    <div class="container">
        <a href="{{ url('/') }}">Home</a><span> / </span><a class="active">Blog</a>
    </div>
</section>
<div class="container" id="main-layout">
    <div class="inner-column row">
        <div id="left_sidebar" class="col-lg-3 col-xs-12 col-sm-4">
            @if(list_blog_category()->count() > 0)
            <div id="latest-news" class="block">
                <div class="title"><h2>Category</h2></div>
                <ul class="block-content">
                    @foreach(list_blog_category() as $kat)
                    <span class="underline"><a href="{{blog_category_url($kat)}}">{{$kat->nama}}</a></span>&nbsp;&nbsp;
                    @endforeach 
                </ul>
            </div>
            @endif
            @if(vertical_banner()->count() > 0)
            <div id="advertising" class="block">
                @foreach(vertical_banner() as $banner)
                <div class="img-block">
                    <a href="{{url($banner->url)}}">
                        {{HTML::image(banner_image_url($banner->gambar),'Info Promo',array('class'=>'img-responsive'))}}
                    </a>
                </div>
                @endforeach
            </div>
            @endif
        </div>
        <div id="center_column" class="col-lg-9 col-xs-12 col-sm-8">
            <div class="product-list">
                @if(count(list_blog(null,@$blog_category)) > 0)
                <div class="row">
                    @foreach(list_blog(null,@$blog_category) as $blog)
                    <article class="col-lg-12 src-result">
                        <a href="{{blog_url($blog)}}"><h1 class="title">{{$blog->judul}}</h1></a>
                        <p>
                            <small><i class="fa fa-calendar"></i> {{waktuTgl($blog->created_at)}}</small>
                        </p>
                        <img src="{{ imgString($blog->isi) }}" />
                        <p>
                            {{shortDescription($blog->isi,300)}} <a href="{{blog_url($blog)}}" class="readmore">read more</a>
                        </p>
                        <hr>
                    </article>
                    @endforeach
                </div>
                <div class="pagination">
                    {{list_blog(null,@$blog_category)->links()}}
                </div>
                @else
                <article class="noresult">Article not found.</article>
                @endif
            </div>
        </div>
    </div>
</div>