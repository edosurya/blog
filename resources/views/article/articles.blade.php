@extends('/layout/app')

{{-- Web site Title --}}
@section('title') {{{ $title }}} :: @parent @stop

@section('content')

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">

            <div class="title_right">
              <div class="form-group pull-right">
                <a href="/admin/articles/create"><button type="button" class="btn btn-default btn-sm">Add Article</button></a>
              </div>
            </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                 <h2>Articles</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Desc</th>
                        <th style="min-width:150px"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($articles as $article)
                      <tr>
                        <td>{{ $article-> title }}</td>
                        <td>{{ $article-> slug }}</td>
                        <td>{{ $article-> desc }}</td>
                        <td><a href="/admin/articles/{{ $article-> id }}/detail"class="btn btn-default btn-xs"><i class="fa fa-navicon"></i></a><a href="/admin/articles/{{ $article-> id }}/edit" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a><a onclick="delFunc('{{ $article->id }}','{{ $article->title }}','0')" data-toggle="modal" data-target="#delModal" class="btn btn-default btn-xs"><i class="fa fa-times"></i></a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>
          </div>

        </div>


      </div>
      <!-- /page content -->


    <!-- Modal -->
    <div class="modal fade" id="delModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Delete Confirmation</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure to delete <span id="name"></span> ? </p>
          </div>
          <div class="modal-footer">
            <a id="del" href=""><button type="button" class="btn btn-default" >Delete</button></a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  @include('/layout/form_dashboard')

@endsection