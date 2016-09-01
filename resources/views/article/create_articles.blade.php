
<script type="text/javascript">

  function myFunction() {
        var x = $("#title2").val();
        str = x.replace(/\s+/g, '-').toLowerCase();
        $("input[name='slug']").val(str);
  }

</script>

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
                  <h2>Add Article</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="@if (isset($articles)){{ URL::to('/admin/articles/' . $articles->id . '/edit') }}@endif" autocomplete="off" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="select2_single form-control" tabindex="-1" name="category" id="category" required />
                          <option></option>
                          @foreach ($categories as $category)
                            @if ((isset($articles)) && $category->id == $articles->category_id)
                              <option value="{{ $category-> id }}" selected >{{ $category-> name }}</option>
                            @else
                              <option value="{{ $category-> id }}">{{ $category-> name }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="title2" name="title" class="form-control col-md-7 col-xs-12" onkeyup="myFunction()" value="{{{ Input::old('name', isset($articles) ? $articles->title : null) }}}" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slug <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="slug" name="slug" readonly="readonly" class="form-control col-md-7 col-xs-12" value="{{{ Input::old('name', isset($articles) ? $articles->slug : null) }}}" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="desc" class="form-control" rows="3" placeholder='' name="desc" required />{{ Input::old('name', isset($articles) ? $articles->desc : null) }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Content <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="desc" class="form-control" rows="3" placeholder='' name="content" required />{{ Input::old('name', isset($articles) ? $articles->content : null) }}</textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Image <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="image" name="image" class="validate" / >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Thumbnail <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="thumb" name="thumb" class="validate" / >
                      </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="reset" value="Reset"  class="btn btn-primary">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- /page content -->

      </div>

    </div>
  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  @include('/layout/form_dashboard')

@endsection
