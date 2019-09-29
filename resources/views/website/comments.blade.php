@extends('layouts.website')
@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- POST -->
                            <div class="post beforepagination">
                                <div class="topwrap">
                                    <div class="userinfo pull-left">
                                        <div class="avatar">
                                            <img src="{{asset('contents/website')}}/images/avatar.jpg" alt="" />
                                            <div class="status green">&nbsp;</div>
                                        </div>
                                    </div>
                                      @foreach($data as $datas)
                                      <div class="posttext pull-left">
                                          <h2><a href="{{url('comments')}}">{{$datas->post_title}}</a></h2>
                                          <p>{{$datas->post_description}}</p>
                                      </div>
                                      @endforeach
                                    <div class="clearfix"></div>
                                </div>

                                <div class="postinfobot">
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- POST -->
                            <div class="post">
                              <div id="disqus_thread"></div>
                                      <script>

                                      /**
                                      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                                      var disqus_config = function () {
                                      this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                      this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                      };

                                      (function() { // DON'T EDIT BELOW THIS LINE
                                      var d = document, s = d.createElement('script');
                                      s.src = 'https://programmerforumsagor.disqus.com/embed.js';
                                      s.setAttribute('data-timestamp', +new Date());
                                      (d.head || d.body).appendChild(s);
                                      })();
                                      </script>
                                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                            </div><!-- POST -->
                        </div>
                  @endsection

        <!-- get jQuery from the google apis -->
        <script type="text/javascript" src="../ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
        <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script id="dsq-count-scr" src="//programmerforumsagor.disqus.com/count.js" async></script>

        <!-- LOOK THE DOCUMENTATION FOR MORE INFORMATIONS -->
        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function() {
                "use strict";
                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 15000,
                            startwidth: 1200,
                            startheight: 278,
                            hideThumbs: 10,
                            fullWidth: "on"
                        });

            });	//ready

        </script>

        <!-- END REVOLUTION SLIDER -->
    </body>

<!-- Mirrored from forum.azyrusthemes.com/02_topic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jul 2019 13:02:57 GMT -->
</html>
