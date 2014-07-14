<!DOCTYPE html>
<html>
    <head>
        <title>{Title}{block:SearchPage} ({lang:Search results for SearchQuery}){/block:SearchPage}{block:PermalinkPage}{block:PostSummary} — {PostSummary}{/block:PostSummary}{/block:PermalinkPage}</title>

        <meta charset="utf-8">
        <meta name="description" content="{block:IndexPage}{block:Description}{MetaDescription}{/block:Description}{/block:IndexPage}{block:PermalinkPage}{block:PostSummary}{PostSummary}{/block:PostSummary}{/block:PermalinkPage}" />

        <meta name="color:Accent" content="#4EA3D0"/>
        <!--<meta name="font:Body" content="'Helvetica Neue', Helvetica, Arial, sans-serif"/>!-->
        <meta name="if:Two column posts" content="1"/>

        <!-- Appearance option -->
        <meta name="if:Show bar on top" content="1"/>
        <meta name="if:Show blog title" content="1"/>
        <meta name="if:Show blog description" content="1"/>
        <meta name="if:Show profile photo" content="1"/>
        <meta name="if:Use endless scrolling" content="1"/>


        <meta name="if:Show right column" content="1"/>
        <meta name="if:Place timestamp in left column" content="1"/>
        <meta name="if:Use larger font for quotes" content="0"/>
        <meta name="if:Show image shadows" content="1"/>
        <meta name="if:Show tags" content="1"/>
        <meta name="if:Show post notes" content="1"/>
        <meta name="if:Show copyright in footer" content="1"/>
        <meta name="text:Disqus Shortname" content="" />
        <meta name="text:Google Analytics ID" content=""/>

        <link rel="shortcut icon" href="http://uduakdaniel.com/images/favicon.png" />
        <link rel="alternate" type="application/rss+xml" title="RSS" href="{RSS}"/>

        <!-- HTML5 Shiv -->
        <!--[if lt IE 9]>
                <script src="http://static.tumblr.com/hriofhd/Qj0m8pn7q/html5shiv.js"></script>
        <![endif]-->

        <!-- Reset CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

        <link rel="stylesheet" href="http://uduakdaniel.com/css/style.css">

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

        <!-- Theme CSS -->

        <style type="text/css">
            
            @font-face {
                font-family: 'Proxima Nova';
                src: url('http//uduakdaniel.com/fonts/proximanova-light-webfont.eot');
                src: url('http//uduakdaniel.com/fonts/proximanova-light-webfont.eot?#iefix') format('embedded-opentype'),
                    url('http//uduakdaniel.com/fonts/proximanova-light-webfont.woff') format('woff'),
                    url('http//uduakdaniel.com/fonts/proximanova-light-webfont.ttf') format('truetype'),
                    url('http//uduakdaniel.com/fonts/proximanova-light-webfont.svg#ProximaNovaLight') format('svg');
                font-weight: 300;
                font-style: normal;
            }

            body
            {
                font-family: "Proxima Nova", "Helvetica Neue", Helvetica, Arial, sans-serif; 
                font-size: 16px;
            }


            h6 {

                border: none;
                font-size: 18px;
            }
            h2 a:hover {

                text-decoration: none;

            }

            .group,#disqus_thread {

                width: 95%;
                text-align: justify;
            } 

            .cont {

                margin-bottom: 30px;
                border-bottom: solid 1px #EDEDED; 
            }

            #iframe_controls,.iframe_controls, .clearfix, .edit {
                display: none !important;
            }
            {CustomCSS}
        </style>

       
        
    </head>
    <body>
        {block:IfShowBarOnTop}
            <header class="banner">
                <div class="container">
                    <div class="logo">
                        
                    </div>
                </div>
            </header>

            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--<a class="navbar-brand" href="/">UD</a>!-->
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href='http://uduakdaniel.com/'>Home</a></li>
                                <li><a href='http://uduakdaniel.com/about'>About</a></li>
                                <li><a href='http://uduakdaniel.com/media'>Media</a></li>
                                <li><a href='http://uduakdaniel.com/meet'>Meet Uduak</a></li>
                                <li><a href='http://uduakdaniel.com/contact'>Contact</a></li>
                                <li class='active'><a href='http://blog.uduakdaniel.com/'>Blog</a></li>                   
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </div>
            </nav>
        {/block:IfShowBarOnTop}

        <div class="container about">
            <ul id="posts">
                

               {block:Posts}
                    {block:Text}
                       
                        <section class="caption group">
                            {block:Title}<h6>
                                <a href="{Permalink}">{Title}</a> 
                                    &mdash; <span class="text-muted">{TimeAgo} / {NoteCount} Comments</span></h6>
                                {/block:Title}
                            <div class="cont group">{Body}</div>
                        </section>
                    {/block:Text}
                {/block:Posts}

                
                {block:IfDisqusShortname}{block:Permalink}
                    <div id="disqus_thread"></div>
                    <script type="text/javascript" src="http://disqus.com/forums/{text:Disqus Shortname}/embed.js"></script>
                    <noscript>
                        <a href="http://{text:Disqus Shortname}.disqus.com/?url=ref">View the discussion thread.</a>
                    </noscript>
                {/block:Permalink}{/block:IfDisqusShortname}
               

                
            </ul>
        </div>
        

      
        <div class="container footer visible-lg visible-md">
            <footer> 
                    {block:IfShowCopyrightInFooter}
                        <span class='pull-right'>Design - +234803 493 2833</span>
                        <section class="copyright">&copy; {CopyrightYears} {Title}</section>
                        
                    {/block:IfShowCopyrightInFooter}
                    {block:Pagination}
                        <nav class="pagination">
                            <section class="buttons">
                                {block:PreviousPage}<a href="{PreviousPage}" class="left">{lang:Previous page}<span class="arrow"></span></a>{/block:PreviousPage}
                                {block:NextPage}<a href="{NextPage}" class="right">{lang:Next page}<span class="arrow"></span></a>{block:NextPage}
                            </section>
                            <section class="disabled buttons">
                                <li class="left"><span class="arrow"></span></li>
                                <li class="right"><span class="arrow"></span></li>
                            </section>
                            <section class="count">Page  {CurrentPage} / {TotalPages}</section>
                        </nav>
                    {/block:Pagination}
            </footer>
        </div>

        {block:IfUseEndlessScrolling}
        <script type="text/javascript" src="http://assets.tumblr.com/assets/scripts/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">
            var Tumblelog = {};

            // AJAX
            Tumblelog.Ajax = (function(url, callbackFunction) {
                this.bindFunction = function (caller, object) {
                    return function() {
                        return caller.apply(object, [object]);
                    };
                };

                this.stateChange = function (object) {
                    if (this.request.readyState==4) this.callbackFunction(this.request.responseText);
                };

                this.getRequest = function() {
                    if (window.ActiveXObject)
                        return new ActiveXObject('Microsoft.XMLHTTP');
                    else if (window.XMLHttpRequest)
                        return new XMLHttpRequest();
                    return false;
                };

                this.postBody = (arguments[2] || "");
                this.callbackFunction=callbackFunction;
                this.url=url;
                this.request = this.getRequest();

                if(this.request) {
                    var req = this.request;
                    req.onreadystatechange = this.bindFunction(this.stateChange, this);

                    if (this.postBody!=="") {
                        req.open("POST", url, true);
                        req.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                        req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                        req.setRequestHeader('Connection', 'close');
                    } else {
                        req.open("GET", url, true);
                    }

                    req.send(this.postBody);
                }
            });
            
            // Infinite Scroll
            Tumblelog.Infinite = (function() {

                var _$window          = $(window);
                var _$posts           = $('#posts');
                var _trigger_post     = null;

                var _current_page     = {CurrentPage};
                var _total_pages      = {TotalPages};
                var _url              = document.location.href.split("#")[0];
                var _infinite_timeout = null;
                var _is_loading       = false;
                var _posts_loaded     = false;
                
                var _Ajax = Tumblelog.Ajax;

                function init() {            
                    set_trigger();
                    enable_scroll();
                }

                function set_trigger () {
                    var $all_posts = _$posts.find('li.post');
                
                    if (!_posts_loaded) {
                        _posts_loaded = $all_posts.length;
                    }

                    if (_posts_loaded >= 4) {
                        _trigger_post = _$posts.find('li.post:eq(' + ($all_posts.length - 4) + ')').get(0);
                    } else if (_posts_loaded >= 3) {
                        _trigger_post = _$posts.find('li.post:eq(' + ($all_posts.length - 3) + ')').get(0);
                    } else {
                        _trigger_post = _$posts.find('li.post:last').get(0);
                    }
                };

                function in_viewport (el) {
                    if (el == null) return;
                    var top = el.offsetTop;
                    var height = el.offsetHeight;

                    while (el.offsetParent) {
                        el = el.offsetParent;
                        top += el.offsetTop;
                    }

                    return (top < (window.pageYOffset + window.innerHeight));
                };

                function enable_scroll() {
                    $('#footer .pagination').hide();
                    _$window.scroll(function(){
                        clearTimeout(_infinite_timeout);
                        infinite_timeout = setTimeout(infinite_scroll, 100);
                    });
                }

                function disable_scroll() {
                    clearTimeout(_infinite_timeout);
                    $(window).unbind('scroll');
                }

                function infinite_scroll() {
                    if (_is_loading) return;

                    if (in_viewport(_trigger_post)) {
                        load_more_posts(); // w00t
                    }
                };

                function load_more_posts() {
                    if (_is_loading) return;
                    _is_loading = true;

                    // Build URL
                    if (_url.charAt(_url.length - 1) != '/') _url += '/';
                    if (_current_page === 1) _url += 'page/1';
                    _current_page++;
                    _url = _url.replace('page/' + (_current_page - 1), 'page/' + _current_page);

                    // Fetch
                    _Ajax(_url, function(data) {
                        var new_posts_html = data.split('<!-- START' + ' POSTS -->')[1].split('<!-- END' + ' POSTS -->')[0];
                        var $new_posts = $('#posts', data);

                        // Insert posts and update counters
                        $('#posts').append(new_posts_html);
                        _posts_loaded = $new_posts.find('li.post').length;

                        if (_posts_loaded) {
                            var post_ids = [];
                            var like_buttons = $('#posts', data).find('.like_button');
                            for (var i = 0; i < like_buttons.length; i++) {
                                var button = like_buttons[i];
                                if ($(button).attr('data-post-id')) {
                                    post_ids.push($(button).attr('data-post-id'));
                                }
                            }
                            if (post_ids.length > 0) Tumblr.LikeButton.get_status_by_post_ids(post_ids);
                        }

                        if ((_posts_loaded > 0) && (_current_page < _total_pages)) {
                            set_trigger();
                            _is_loading = false;

                        } else {
                            disable_scroll();
                        }
                    });

                    // Stats
                    {block:IfGoogleAnalyticsID}
                        if (typeof window._gaq != 'undefined') {
                            _gaq.push(['_trackPageview', _url]);
                        }
                    {/block:IfGoogleAnalyticsID}
                }

                return {
                    init: init
                };
            });

            $(function() {
                {block:IndexPage}
                if ( !($.browser.msie && (parseInt($.browser.version, 10) < 9) ) ) {
                    var InfiniteScroll = new Tumblelog.Infinite;
                    InfiniteScroll.init();
                }
                {/block:IndexPage}

                //$(".iframe_controls").hide();
            });
        </script>
        {/block:IfUseEndlessScrolling}

        {block:Twitter}
            <script type="text/javascript" src="/tweets.js"></script>
        {/block:Twitter}

        {block:IfGoogleAnalyticsID}
            <script type="text/javascript">
                var _gaq=[['_setAccount','{text:Google Analytics ID}'],['_trackPageview']];
                        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                        s.parentNode.insertBefore(g,s)}(document,'script'));
            </script>
        {/block:IfGoogleAnalyticsID}
    </body>
</html>