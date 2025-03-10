<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Skills</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <a href="{{route('createSkills')}}" class="cssbuttons-io-button">
                    <svg
                      height="24"
                      width="24"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                    </svg>
                    <span>Add</span>
                  </a>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="contentProfile">
        <div class="card card-solid">
          <div class="cardSkills">
            <img src="" class="App-logo" alt="">
            <div class="header">{{$skills->namaSkills}}</div>
            <a href="{{$skills->link}}">
              <button class="App-button">Start learning now</button>
            </a>
          </div>
        </div>
    </section>
</div>