@extends('/layout/app')

{{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop

@section('content')
      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Article</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-image">
                      <img src="{{ URL::to('/image/' . $article->image) }}" style="max-width:500px" />
                    </div>
                  </div>

                  <div class="col-md-5 col-sm-5 col-xs-12" style="border:0px solid #e5e5e5;">

                    <h3 class="prod_title">{{ $article->title }}</h3> 
                    <div style="margin-top:-20px; margin-bottom:30px">
                      <span class="label label-success">Created at: {{ $article-> created_at }}</span>
                      <span class="label label-warning">{{ $article-> slug }} </span>
                    </div>
                    <p> {{ $article-> content }}</p>
                    <br />

                    <div class="product_social">
                    <span> Share </span>
                      <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-rss-square"></i></a>
                        </li>
                      </ul>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
      <!-- /page content -->

  @include('/layout/form_dashboard')

@endsection