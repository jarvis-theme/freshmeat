<div id="newsletter" class="col-xs-12 col-sm-12 col-lg-6">
    <h4 class="title">Newsletter</h4>
    <div class="block-content">
        <!-- <p>Jadilah orang pertama yang mendapatkan info produk terbaru, dan promo dari kami. <br>Daftarkan email anda dan dapatkan segera promo menarik.</p> -->
        <p>Be the first person who get latest news, events, and all promo from us. <br>Subscribe our newsletter to get latest news and exclusive offers</p>
        <form class="newsletter-form" action="{{@$mailing->action}}" method="post" target="_blank" novalidate>
            <input type="email" placeholder="Your Email Address" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL" {{ @$mailing->action==''?'disabled="disabled"':'' }}/>
            <div class="fr">
                <button type="submit" {{ @$mailing->action==''?'disabled="disabled"':'' }}>SUBSCRIBE</button>
            </div>
            <div class="clr"></div>
        </form>
    </div>
</div>