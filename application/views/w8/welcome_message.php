
    <div class="">
        <div style="background: url(<?php echo base_url()?>docs/images/b1.jpg) top left no-repeat; background-size: cover; height: 300px;">
            <div class="container" style="padding: 50px 20px">
                <h1 class="fg-white">Metro UI CSS 2.0</h1>
                <h2 class="fg-white">
                    Metro UI CSS a set of styles to create a site<br /> with an interface similar to Windows 8.
                </h2>

                <a href="https://github.com/olton/Metro-UI-CSS/archive/master.zip"
                   class="place-left button bg-darkRed bg-hover-red fg-white fg-hover-white bd-orange" style="margin-top: 10px">
                    <h3 style="margin: 10px 40px">Download <span class="icon-download-2 on-right"></span></h3>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="grid fluid">
                <div class="row">
                    <div class="span4 bg-amber padding20 text-center">
                        <h2 class="fg-white">easy to use</h2>
                    </div>
                    <div class="span4 bg-green padding20 text-center">
                        <h2 class="fg-white">less source</h2>
                    </div>
                    <div class="span4 bg-red padding20 text-center">
                        <h2 class="fg-white">mit license</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="grid no-margin">
                <div class="row">
                    <div class="span4 no-tablet-portrait no-phone">
                        <div class="notice marker-on-right bg-lighterBlue padding20 text-center" style="height: 200px">
                            <h1 class="fg-white" style="font-size: 120px; line-height: 80px; margin-bottom: 30px">5</h1>
                            <p class="subheader-secondary fg-white">simple steps to you style</p>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="notice marker-on-bottom no-desktop padding10 bg-lighterBlue text-center ">
                            <p class="subheader-secondary fg-white no-margin">5 simple steps to you style</p>
                        </div>
                        <ol class="styled">
                            <li style="width: 90%">Create page with <strong>HTML5 DOCTYPE</strong></li>
                            <li style="width: 90%">Include <strong>metro-bootstrap.css</strong></li>
                            <li style="width: 90%">Include <strong>metro.min.js</strong> (jquery.js required)</li>
                            <li style="width: 90%">Create main container with class <strong>.metro</strong></li>
                            <li style="width: 90%">Use markup, as described in the pages of this site</li>
                        </ol>
                    </div>
                </div>
            </div>



<pre class="prettyprint linenums no-phone" style="margin-top: 10px;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;link rel="stylesheet" href="css/metro-bootstrap.css"&gt;
        &lt;script src="js/jquery/jquery.min.js"&gt;&lt;/script&gt;
        &lt;script src="js/jquery/jquery.widget.min.js"&gt;&lt;/script&gt;
        &lt;script src="js/metro/metro.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body class="metro"&gt;
        ... markup page ...
    &lt;/body&gt;
&lt;/html&gt;
</pre>
        </div>

        <div class="bg-steel no-tablet-portrait no-phone">
            <div class="container padding20 fg-white">
                <div class="carousel bg-transparent no-overflow" id="carousel2">
                    <div class="slide">
                        <div class="place-right">
                            <img src="<?php echo base_url()?>docs/images/css-logo.png"
                                 alt="" class="span3"/>
                        </div>
                        <h2 class="fg-white ntm">Developed with advice</h2>
                        <p class="fg-white">Metro UI CSS developed with the advice of Microsoft to build the user interface and include: general styles, grid, layouts, typography, 20+ components, 300+ built-in icons.</p>
                        <p class="fg-white">Metro UI CSS build with {LESS}. Metro UI CSS is open source and has MIT licensing model.</p>
                    </div>

                    <div class="slide">
                        <div class="place-right padding20 ntp nrp nbp">
                            <img src="<?php echo base_url()?>docs/images/bizspark_b_2.png"
                                 alt="" class="span3"/>
                        </div>
                        <h2 class="fg-white ntm">BizSpark Startup</h2>
                        <p class="fg-white">Metro UI CSS is a BizSpark Startup. Microsoft BizSpark is a global program that helps software startups succeed by giving them access to software development tools, connecting them with key industry players, and providing marketing visibility.</p>
                        <p class="fg-white">BizSpark provides free software, support, and visibility to help startups succeed. Join BizSpark and become part of a global community that has over 50,000 members in 100+ countries.</p>
                        <a class="button small1 inverse" href="http://bizspark.com">Join the BizSpark Program now</a>
                    </div>

                    <div class="slide">
                        <div class="place-right">
                            <img src="/images/phpstorm_7_eap.png"
                                 alt="" class="span3"/>
                        </div>
                        <h2 class="fg-white ntm">Thanks to JetBrains</h2>
                        <p class="fg-white">Thanks to the company JetBrains for supporting the project in the form of a license for a great product PhpStorm.</p>
                        <a class="button small1 inverse" href="http://www.jetbrains.com/phpstorm/">Get PhpStorm now!</a>
                    </div>
                </div>
                <script>
                    $(function(){
                        $("#carousel2").carousel({
                            height: 210,
                            period: 5000,
                            duration: 1000,
                            effect: 'fade',
                            markers: {
                                show: false
                            }
                        });
                    })
                </script>
            </div>
        </div>

        