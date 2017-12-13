@extends('template.template')

@section('isi')

    <h3 style="text-align: center;"><b style="border-bottom: 3px solid orange;">Become a Guide<b/></h3>

    <div class="container" style="margin-top: 50px; margin-left: 25%"> 

      <form class="form" method="post" action="">
          <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="gender">Jenis Kelamin:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="umur">Umur:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="kota">Kota:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="hp">No Handphone:</label>
            <input type="number" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="Email">E-mail:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="Insta">Instagram:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="foto">Foto Profil:</label>
           <input type="file" name="pic" accept="image/*">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
          <div class="form-group">
            <label for="repassword">Ulangi Password:</label>
            <input type="text" class="form-control" style="width: 600px;">
          </div>
    </div>
    <div>
          <h4 style="text-align: center"> Experience </h4>
    </div>
    <div class="container" style="margin-top: 20px; margin-left: 25%"> 
      <label>Kendaraan yang digunakan ?</label>
         <br/>
         <input type="checkbox" name="umum"/>&nbsp;Menggunakan kendaraan umum<br/>
         <input type="checkbox" name="pribadi"/>&nbsp;Menggunakan kendaraan pribadi<br/>
         <input type="checkbox" name="sewa"/>&nbsp;Menggunakan kendaraan sewa<br/>
       </div>

                              <div class="submit-holder" style="margin-top:10px;">
                                          <p class="text-center">
                                            <input type="checkbox" name="persetujuan"/> 
                                          Dengan ini saya menyetujui peraturan yang berlaku didalam web pesiar</p>
                                          <div class="col-md-2 col-md-push-5">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" >Register</button>
                              </div>
                              <br>
                              <br>
                              <br>
                                  </div>
                              </div>
                    </div>
                </div>
            </div>

    </div>
  </div>
@endsection
