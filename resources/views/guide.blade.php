@extends('template.template')

@section('isi')
  <div class="book-form">

    <h3 style="text-align: center;"><b style="border-bottom: 3px solid orange;">Become a Guide<b/></h3>
       
       <form action="#" method="post">


        <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="opt">
            <label for="sel1">Destination</label>
            <input type="text"  name="City" placeholder="Destination" required="" />
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          <div class="opt">
            <label for="sel1">Date</label>
            <input placeholder="DD/MM/YYY" class="date" id="datepicker" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required=""/>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
        <div class="opt">
          <label for="sel1">Gender</label>
          <select class="form-control" id="sel1">
            <option>All</option>
            <option>Male</option>
            <option>Female</option>
          </select>
          <div class="w3ls-field submit-w3ls-field">
              <input type="submit" value="Submit">
          </div>
        </div>
        </div>

        </div>
            <div class="clearfix"> </div>
      </form>
    </div>
</div>
@endsection
