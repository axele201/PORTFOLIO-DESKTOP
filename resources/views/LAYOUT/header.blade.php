<header>
  <div class="box-navbar">
      <nav class="navbar">
          <h2 class="dms-portfolio">DMS</h2>
          <div class="radio-inputs">
            <label class="radio">
              <a href="#home">
                <input type="radio" name="radio" checked="">
                <span class="name">HOME</span>
              </a>
            </label>
            <label class="radio">
              <a href="#aboute">
                <input type="radio" name="radio">
                <span class="name">ABOUT</span>
              </a>
            </label>
            <label class="radio">
              <a href="#skills">
                <input type="radio" name="radio">
                <span class="name">SKILLS and EXPERIENCE</span>
              </a>
            </label>
            <label class="radio">
              <a href="#inbox">
                <input type="radio" name="radio">
                <span class="name">INBOX</span>
              </a>
            </label>
            <label class="radio">
              <a href="{{route('contact')}}">
                <input type="radio" name="radio">
                <span class="name">CHAT IN </span>
              </a>
            </label>
          </div>

          {{-- LOGIN BTN --}}
          <a href="{{route('admin')}}">
          <button class="Btn-LG">
            <div class="sign">
              <svg viewBox="0 0 512 512">
                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
              </svg>
            </div>
            <div class="text">Login</div>
          </button>
        </a>
        
          {{-- music button --}}
          <input type="checkbox" id="checkboxInput">
          <label for="checkboxInput" class="toggleSwitch">
              <div class="speaker">
                  <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 75 75">
                      <path d="M39.389,13.769 L22.235,28.606 L6,28.606 L6,47.699 L21.989,47.699 L39.389,62.75 L39.389,13.769z" 
                            style="stroke:#fff;stroke-width:5;stroke-linejoin:round;fill:#fff;">
                      </path>
                      <path d="M48,27.6a19.5,19.5 0 0 1 0,21.4M55.1,20.5a30,30 0 0 1 0,35.6M61.6,14a38.8,38.8 0 0 1 0,48.6" 
                            style="fill:none;stroke:#fff;stroke-width:5;stroke-linecap:round">
                      </path>
                  </svg>
              </div>
              
              <div class="mute-speaker">
                  <svg version="1.0" viewBox="0 0 75 75" stroke="#fff" stroke-width="5">
                      <path d="m39,14-17,15H6V48H22l17,15z" fill="#fff" stroke-linejoin="round"></path>
                      <path d="m49,26 20,24m0-24-20,24" fill="#fff" stroke-linecap="round"></path>
                  </svg>
              </div>
          </label>
      </nav>
  </div>
</header>
