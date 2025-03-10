  <!-- Main content -->
  <section class="content" id="inbox">
    <h2 class="heading" style="text-align: center; margin-top:100px; margin-bottom:50px;">
      FORUMS
  </h2>
  <div class="row" style="justify-content: center">
    <div class="col-md-9">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3>inbox</h3>
        </div>
        <div class="card-body p-0" >
          <div class="table-responsive mailbox-messages">
            <table class="table body-inbox table-hover table-striped">
              <tbody>
                @foreach ($forums as $forum)
                <tr>
                  <td>
                    <div class="icheck-primary">
                      <p>{{ $forum->id }}</p>
                    </div>
                  </td>
                  <td class="mailbox-name"><a href="read-mail.html">{{ $forum->user }}</a></td>
                  <td class="mailbox-subject"><b>{{ $forum->subject }}</b></td>
                  <td class="mailbox-content">{{ $forum->content }}</td>
                  <td class="mailbox-date">{{ $forum->created_at->format('d/m/Y H:i') }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="card-footer p-0">
          <div class="mailbox-controls">
            <div class="float-right">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-chevron-left"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm">
                  <i class="fas fa-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
