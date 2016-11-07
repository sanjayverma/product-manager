

@include('partials.header')


<!-- Page -->
<div class="page">
  <div class="page-header">
    <h1 class="page-title">jsGrid</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Tables</a></li>
      <li class="breadcrumb-item active">jsGrid</li>
    </ol>
    <div class="page-header-actions">


      <a class="btn btn-outline btn-primary" data-target="#examplePositionSidebar" data-toggle="modal"><i class="icon wb-plus" aria-hidden="true"></i> Add User</a>





    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="examplePositionSidebar" aria-hidden="true" aria-labelledby="examplePositionSidebar"
       role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sidebar modal-sm">
      <div class="modal-content" style="padding-top: 35px;">
        <div class="modal-header" style="position: fixed;top: 0;width: 100%;height: 44px;display: block;background: #62A8EA; color: #fff;z-index: 99;padding: 10px 15px;">
          <h4 class="modal-title" style="color: #fff;">Add User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: #fff; opacity: 1;top:11px;">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <img src="{{URL::to('assets/examples/images/2.jpg')}}" alt="..." />
            <hr>
            <div class="form-group">
              <label class="sr-only" for="username">Username</label>
              <input type="text" class="form-control" id="userName" name="userName" placeholder="Username"/>
            </div>
            <div class="form-group">
              <label class="sr-only" for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
            </div>
            <hr>
            <div class="form-group">
              <label class="sr-only" for="fullName">Full Name</label>
              <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name"/>
            </div>
            <div class="form-group">
              <label class="sr-only" for="title">Title</label>
              <input type="text" class="form-control" id="userName" name="title" placeholder="Title"/>
            </div>
            <div class="form-group">
              <label class="sr-only" for="capacity">Role</label>
              <select class="form-control">
                <option>Role</option>
                <option>Engineer</option>
                <option>Role 1</option>
                <option>Role 2</option>
                <option>Role 3</option>
                <option>Role 4</option>
              </select>
            </div>
            <div class="form-group">
              <label class="sr-only" for="capacity">Capacity</label>
              <input type="text" class="form-control" id="capacity" name="capacity" placeholder="Capacity (min)"/>
            </div>
          </div>
          <div class="modal-footer" style="text-align: center;">
            <button type="button" class="btn btn-primary">Save</button>
            <hr>
            <div style="text-align: left;">
              <p><span>Date Created</span> 01/02/1982</p>
              <p><span>Last Login</span> 01/02/1982 02:45:45 PM</p>
              <p><span>Last Login IP</span> 165:155:54:54</p>
              <p><span>Last Login Domain</span> dfasdf.comcast.net</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="page-content container-fluid">
    <div class="row">
      <div class="col-xs-12 col-xxl-6">
        <!-- Panel Basic -->
        <div class="panel">
          <header class="panel-heading">
            <h3 class="panel-title">Basic</h3>
          </header>
          <div class="panel-body">
            <div id="userList"></div>
          </div>
        </div>
        <!-- End Panel Basic -->
      </div>
    </div>
  </div>
</div>


@include('partials.footer')
