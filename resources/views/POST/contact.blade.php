<!DOCTYPE html>
<html lang="en">
<head>
  @include('LAYOUT.head')
</head>
<body>
  
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <a href="{{ route('index') }}" class="btn btn-primary btn-block mb-3">Back to Inbox</a>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">New Message</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <!-- Start of Form -->
            <form action="{{ route('Forums') }}" method="POST">
              @csrf <!-- CSRF Token for security -->
              <div class="form-group">
                <input type="text" name="user" class="form-control" placeholder="From:" value="{{ old('user') }}">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject:" value="{{ old('subject') }}">
              </div>
              <div class="form-group">
                <textarea id="compose-textarea" name="content" class="form-control" style="height: 300px">{{ old('content') }}</textarea>
              </div>
          </div>
  
          <!-- /.card-body -->
          <div class="card-footer">
            <div class="float-right">
              <button type="submit" class="btn btn-primary">
                <i class="far fa-envelope"></i> Send
              </button>
            </div>
          </div>
          <!-- /.card-footer -->
          </form>
          <!-- End of Form -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
</body>
</html>
