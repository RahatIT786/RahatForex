<div class="header_section">
    <div class="container-fluid">
        {{-- <h3 style="color: white;  margin-left:40%; margin-top:50px;" >FOREIGN EXCHANGE </h3> --}}
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brandkhjdhjkfd" href="{{ route('layouts.app') }}">
                <img src= "{{ asset('user/logo/RAHAT_FOREX.png') }}" alt="" style="width: 12rem">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div style="margin-left:40px;">
                   <img src="{{asset('user/logo/FOREIGN_EXCHANGE.png')}}" alt="" style="width: 15rem; height:4rem">
                </div>


                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('historical') }}" > About Us </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="https://umrahrahat.com/" target="blank"> Umrah </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://rahatholidays.com/" target="blank"> Holiday </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://rahatvisa.com/" target="blank"> Visa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://rahatforex.com/" target="blank">Forex</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://rahatvillas.com/" target="blank"> Villas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://umrahrahat.com/hotels" target="blank">Hotels </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://umrahrahat.com/user/transport" target="blank"> Transfers </a>
                        </li>

                        {{-- <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span>Wallet</span> <img src="images/wallet.png" alt="" />
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Sign Up</a>
                </li> --}}
                    </ul>
                    <div class="user_option">
                        {{-- <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form> --}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
    {{-- add the whatsApp --}}
    <div id="whatsapp">
        <a href="https://wa.me/+918448324764">
        <img src="{{asset('user/logo/whatsapp.png')}}" alt="" style="height: 90%;">
    </a>
    </div>

</div>
