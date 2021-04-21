@extends('396club.396layout')
@section('title','| Home page')
<!--Plugin for Date Picker -->

@section('content')
<?php header("Refresh:30");?>
<!--@include('pages.report')-->
<div class="row">
  <div class="col-md-12">
    <div id="isportDiv" class="fullwidth_wrapper sports-mt">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <!-- live casino starts here-->
    <div class="container">
      <div class="row">

        <!-- gameplay starts here-->
        <div class="col-md-6">

          <div class="kode-blog-info">
            @if (Auth::guest())
                <figure><a href="#" onclick="return confirm('Please login to continue!')"><img src="images/banner_alex.gif" class="img-responsive" width="100%"></a></figure>
            @else
                @if (Auth::User()->status == 0)
                <figure><a href="#" onclick="return confirm('Your account has been temporarily suspended.Please contact customer service to reactivate your account.Thank You!')"><img src="images/banner_alex.gif" class="img-responsive" width="100%"></a></figure>
                @else
                <figure><a href="javascript:var w=window.open('gameLaunch', '_blank', 'width=1200,height=650');"><img src="images/banner_alex.gif" class="img-responsive" width="100%"></a></figure>
                @endif
            @endif

              <h3><a href="#">ALEXANDRIA CASINO</a></h3>
              <p style="font-size:12px; text-align:justify;">The first in the world live casino tables you will ever see, Super Color Sicbo & 98 Bonus Baccarat Roulette, Experience now!.</p>

            <div class="clearfix"></div>
          </div>
        </div>
        <!-- gameplay ends here-->

        <!-- -opus game starts here-->
        <div class="col-md-6">
          @if (Auth::guest())
              <figure><a href="#" onclick="return confirm('Please login to continue!')"><img src="images/banner_opus1.gif" class="img-responsive" width="100%"></a></figure>
          @else
              @if (Auth::User()->status == 0)
              <figure><a href="#" onclick="return confirm('Your account has been temporarily suspended.Please contact customer service to reactivate your account.Thank You!')"><img src="images/banner_opus1.gif" class="img-responsive" width="100%"></a></figure>
              @else
              <figure><a href="javascript:var w=window.open('opusLiveCasino', '_blank', 'width=1200,height=650');" onclick="myFunction()"><img src="images/banner_opus1.gif" class="img-responsive" width="100%"></a></figure>
              @endif
          @endif
            <div class="kode-blog-info">
              <h3><a href="">OPUS CASINO</a></h3>
              <p style="font-size:12px">Enjoy one of the most favorite Casinos in Southeast Asia.Be the winner in Opus Casino !</p>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="row">

                <div class="col-md-6">
                  @if (Auth::guest())
                      <figure><a href="#" onclick="return confirm('Please login to continue!')"><img src="images/banner_palamecia.gif" class="img-responsive" width="100%"></a></figure>
                  @else
                      @if (Auth::User()->status == 0)
                      <figure><a href="#" onclick="return confirm('Your account has been temporarily suspended.Please contact customer service to reactivate your account.Thank You!')"><img src="images/banner_palamecia.gif" class="img-responsive" width="100%"></a></figure>
                      @else
                      <figure><a href="javascript:var w=window.open('{{url('lobby')}}', '_blank', 'width=1280,height=720');"><img src="images/banner_palamecia.gif" class="img-responsive" width="100%"> </a></figure>
                      @endif
                  @endif
                    <div class="kode-blog-info" style="width:570px;height:141px;">
                      <h3><a href="#">PALAMECIA CASINO</a></h3>
                      <p style="font-size:12px">Enjoy marvelous gaming experience with the latest HTML5 technology which allows you to play any browser without downloading and app verification.</p>
                    </div>
                  </div>

                <!-- domino dealer starts here-->
                <div class="col-md-6">
                  @if (Auth::guest())
                      <figure><a href="#" onclick="return confirm('Please login to continue!')"><img src="images/domino_dealer.jpg" class="img-responsive" width="100%"></a></figure>
                  @else
                      @if (Auth::User()->status == 0)
                      <figure><a href="#" onclick="return confirm('Your account has been temporarily suspended.Please contact customer service to reactivate your account.Thank You!')"><img src="images/domino_dealer.jpg" class="img-responsive" width="100%"></a></figure>
                      @else
                      <figure><a href="javascript:var w=window.open('{{url('lobby')}}', '_blank', 'width=1280,height=720');"><img src="images/domino_dealer.jpg" class="img-responsive" width="100%"> </a></figure>
                      @endif
                  @endif
                    <div class="kode-blog-info" style="width:570px;height:141px;">
                      <h3><a href="#">Lobby Testing!</a></h3>
                      <p style="font-size:12px">Lobby Testing!</p>
                    </div>
                </div>
      </div>

        </div>
      </div>
      <!-- live casino ends here-->





      </div>
      <!-- live casino ends here-->

    </div>
  </div>
</div>

<style>

  .kode-content {padding:0px !important;}
  .fullwidth_wrapper.sports-mt {
      background-color: #010417;
      background: url(../images/I-Sports_BG_comp.jpg) no-repeat top center;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      position: relative;
      display: block;
      background-size: 100% 100%;
  }

  .fullwidth_wrapper {
      width: 100%;
  }
  #content {
      width: 1120px;
      margin: 0 auto;
      height: 1020px;
  }
</style>

<style>
.kode-content {
  background-color: #010417 !important;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  position: relative;
  display: block;
  background-size: 100% 100% !important;
}
</style>


  @endsection
  @section('jscript')
  {{-- @include('jqscript.depositJq');
  @include('jqscript.withdrawalJq');
  @include('jqscript.historyJq');
  @include('jqscript.transferJq'); --}}

  <?php
  if (Auth::guest()){
    $user_iddddd = '';
    $user_nameee = '';
  }
  else{
    $user_iddddd = Auth::User()->id;
    $user_nameee = Auth::User()->user_name;
  }

  ?>

  <script>
      function myFunction() {
          $.ajax({
              type: "POST",
              url: "{{ url('opusLiveVerification') }}",
              headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },

              data : {
                 user_id      : <?php echo $user_iddddd;?>,
                 user_name    : <?php echo $user_nameee;?>,

               },
              error:function(result) {
                alert('error!');
              }

          });
      }
  </script>
@endsection
