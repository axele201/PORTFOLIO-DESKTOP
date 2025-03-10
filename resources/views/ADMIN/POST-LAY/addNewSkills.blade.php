<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Skills</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <a href="{{ route('createSkills') }}" class="cssbuttons-io-button">
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
        @foreach ($skills as $skill)
            <div class="card card-solid">
                <div class="cardSkills">
                    <!-- Assuming you want to show an image associated with each skill -->
                    <img src="{{ asset('storage/images/' . $skill->skill_image) }}" class="App-logo" alt="Skill Image">
                    <div class="header">{{ $skill->namaSkills }}</div>
                    <a href="{{ $skill->link }}">
                        <button class="App-button">Start learning now</button>
                    </a>
                </div>
            </div>
        @endforeach
    </section>
</div>
