@extends('template.templatevar')

@section('isi')
  <div class="container profil-guide">
          <div class="row">
            @foreach ($profil as $dataguide)
              <a href="profil/{{$dataguide->Nomor}}">
              <div class="detail">
                      <img  src="../{{$dataguide->foto }}">
                      <div class="detail">
                          <p class="text-bold">{{$dataguide->nama }}</p>
                          <p>{{$dataguide->tempat }}</p>
                          <p class="rego">{{$dataguide->harga }}/day</p>
                      </div>
                      <div class="detail">
                        <div class="rating">
                          <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                          <p class="cilik">Rated by {{$dataguide->Nomor }} users</p>
                        </div>
                        <a href="/pesiar/public/payment" class="btn btn-green">Hire</a>
                      </div>
              </div>
              <h3>Bio</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <h3>Skills</h3>
              <p>Fluently speaks indonesian, buginese, english</p>
              <h3>Contact</h3>
              <span class="fa-whatsapp"></span>
              <p>081294798327</p>
              <span class="fa-instagram"></span>
              <p>@esmeralda</p>
              <span class="fa-phone"></span>
              <p>08124935042</p>

              <div class="calendar-free">
                <svg width="800" height="600" preserveAspectRatio="xMinYMin meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <svg>
                  <rect x="10" y="10" height="377" width="640" style="fill: #F5F5F5;" />
                  <rect x="30" y="70" rx="5" ry="5" height="33" width="600" style="fill: #F5F5F5" />
                  <text id="month_name" x="300" y="50" fill="#424242" style="font-size:22px; font-family: Arial; font-weight:bold;"></text>
                  <rect x="45" y="159" rx="5" ry="5" height="33" width="40" style="fill: #cc3b2d" />
                  <svg x="10" y="70">
                    <g>
                      <text x="35" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">MON</text>
                      <text x="126" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">TUE</text>
                      <text x="216" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">WED</text>
                      <text x="304" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">THU</text>
                      <text x="396" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">FRI</text>
                      <text x="473" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">SAT</text>
                      <text x="560" y="24" style="fill: #cc3b2d; font-size:20px; font-family: Arial; font-weight:bold;">SUN</text>
                    </g>
                  </svg>
                  <svg x="10" y="120">
                    <g>
                      <text x="49" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                      <text x="141" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                      <text x="230" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">1</text>
                      <text x="317" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">2</text>
                      <text x="405" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">3</text>
                      <text x="482" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">4</text>
                      <text x="577" y="24" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">5</text>
                    </g>
                    <g>
                      <text x="50" y="63" style="fill: #fff; font-size:20px; font-family: Arial; font-weight:bold;">6</text>
                      <text x="141" y="63" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">7</text>
                      <text x="229" y="63" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">8</text>
                      <text x="315" y="63" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">9</text>
                      <text x="398" y="63" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">10</text>
                      <text x="477" y="63" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">11</text>
                      <text x="570" y="63" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">12</text>
                    </g>
                    <g>
                      <text x="43" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">13</text>
                      <text x="134" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">14</text>
                      <text x="221" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">15</text>
                      <text x="309" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">16</text>
                      <text x="399" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">17</text>
                      <text x="477" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">18</text>
                      <text x="571" y="104" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">19</text>
                    </g>
                    <g>
                      <text x="43" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">20</text>
                      <text x="134" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">21</text>
                      <text x="221" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">22</text>
                      <text x="309" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">23</text>
                      <text x="399" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">24</text>
                      <text x="477" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">25</text>
                      <text x="571" y="145" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">26</text>
                    </g>
                    <g>
                      <text x="43" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">27</text>
                      <text x="134" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">28</text>
                      <text x="221" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">29</text>
                      <text x="309" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">30</text>
                      <text x="399" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;">31</text>
                      <text x="475" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                      <text x="570" y="186" style="fill: #424242; font-size:20px; font-family: Arial; font-weight:bold;"></text>
                    </g>
                  </svg>
                </svg>

              </svg>
              <script>
                  window.onload = function() {
                showMonth();
              };

              function showMonth() {
                var month = new Array();
                month[0] = "January";
                month[1] = "February";
                month[2] = "March";
                month[3] = "April";
                month[4] = "May";
                month[5] = "June";
                month[6] = "July";
                month[7] = "August";
                month[8] = "September";
                month[9] = "October";
                month[10] = "November";
                month[11] = "December";
                var d = new Date();
                var n = month[d.getMonth()];
                document.getElementById("month_name").innerHTML = n;
              }
              </script>
              </div>
            </a>
            @endforeach

          </div>
  </div>
@endsection
