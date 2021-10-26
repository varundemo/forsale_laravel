@include('frontend.header')

<div class="container-fluid" style="margin-top: 100px;">
    <div class="row">
        <section class="white_section">
            <hr>
            <div class="row text-center">
                <div class="col-md-12">
                    <a href="{{ URL::to('/register') }}"><button class="btn btn-info mx-2"><b>Register as Client</b></button></a>
                    <a href="{{ URL::to('/agent-register') }}"><button class="btn btn-danger mx-2"><b>Register as Agent</b></button></a>
                </div>
            </div>
        </section>
    </div>
</div>

@include('frontend.footer')
