<!---footer-->
<footer id="seet" class="footer-section d-print-none">
    <div class="container">
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="https://img1.wsimg.com/isteam/ip/71f0d52e-1a81-43c9-97b6-edbd3150a3ee/fsbw.running-0001.png/:/rs=h:274/qt=q:95" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p style="font-size: 13px;">      Easy <br>
                                Smartphone Real Estate <br>
                                Virtual Real Estate Company</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="{{ URL::to('/') }}">HOME</a></li>
                            <li><a href="{{ URL::to('buy') }}">BUY</a></li>
                            <li><a href="{{ URL::to('/sell') }}">SELL</a></li>
                            <li><a href="{{ URL::to('/find-agent') }}">VIRTUAL AGENT</a></li>
                            <li><a href="{{ URL::to('/why-12-days') }}">VIRTUAL GUARANTEE</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="">
                                <input id="" type="text" placeholder="Email Address" required>
                                <button onclick=""><i class="fab fa-telegram-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2018, All Right Reserved <a href="{{ URL::to('/') }}">Forsalebyweb</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>

                            <li><a href="https://forsalebyweb.com/search-1">Terms Of Service</a></li>
                            <li><a href="https://policies.google.com/privacy">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ url('js/jqury.js') }}"></script>
<script type="text/javascript" src="{{ url('js/min.js') }}"></script>
<script type="text/javascript" src="{{ url('bootstrap-js/bootstrap.min.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
   

</html>
