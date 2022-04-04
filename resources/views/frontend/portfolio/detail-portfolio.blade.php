@extends('frontend.layouts.front')

@section('title')
    Detail-Portfolio
@endsection

@section('content')
   <section class="berita pt-120">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8">
                        <div class="div">
                            <img src="{{ asset('upload/' . $portfolio->gambar_portfolio )}}" class="img-fluid">
                        </div>
                        <div class="detail-content mt-2">
                            <h2>{{ $portfolio->judul }}</h2>
                            <div class="detail-body">
                            <p>{!! $portfolio->deskripsi !!}</p>
                        </div>
                        </div>
                    </div>
            </div>
            </div>
            <div class="container">
                <div id="disqus_thread" class="mt-4 col-lg-7"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://jurusan-smkbn666.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
    </section>

@endsection