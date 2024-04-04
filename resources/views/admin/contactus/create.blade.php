@extends('admin.layouts.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
 
    <!-- Main content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
        
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add contactus information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   method="post" action="{{ route('contactus.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">



                  <div class="form-group">
                    <label for="name">Company name:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter the company name" value="{{ old('name')}} ">
                  </div>

                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="select the location" value="{{ old('address')}} ">
                  </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email')}} ">
                  </div>

                  <div class="form-group">
                    <label for="">Alternative Email:</label>
                    <input type="text" name="alternative_email" class="form-control" id="" placeholder="Email" value="{{ old('alternative_email')}} ">
                  </div>


            <div class="form-group">
                    <label for="number">Phone number:</label>
                    <input type="text" name="number" class="form-control" id="number" placeholder="Phone number" value="{{ old('number')}} ">
                  </div>

               


                  <div class="form-group">
                    <label for="tel_nbr">Alternative number:</label>
                    <input type="text" name="alternative_number" class="form-control" id="alternative_number" placeholder="Alternative number" value="{{ old('alternative_number')}} ">
                  </div>


                  
            
                 <div class="form-group">
                    <label for="google_map">Google  map</label>
                    <input type="google_map" value="{{ old('google_map') }}" name="google_map" class="form-control">
                  </div>

              
                  <div class="form-group">
                   <label>Description</label>
                     <textarea id="summernote" name="description">
                     {{ old('description') }}                    
                        </textarea>
                  </div>
                  <div class="form-group">
                    <label for="header_logo">Header Logo:</label>
                    <input type="file" name="navbar_logo" class="form-control" id="" placeholder="Header logo">
                  </div>



                  <div class="form-group">
                    <label for="youtube_link">Navbar Link:</label>
                    <input type="text" name="navbar_link" class="form-control" id="" placeholder="Navbar link" value="">
                  </div>

                  
                  <div class="form-group">
                    <label for="header_logo">Footer Logo:</label>
                    <input type="file" name="footer_logo" class="form-control" id="" placeholder="Header logo">
                  </div>



                  <div class="form-group">
                    <label for="youtube_link">Footer Link:</label>
                    <input type="text" name="footer_link" class="form-control" id="" placeholder="Footer link" value="">
                  </div>


                    <div class="form-group">
                    <label for="">Facebook link</label>
                    <input type="" value="{{ old('facebook_link') }}" name="facebook_link" class="form-control">
                  </div>
                  
                    <div class="form-group">
                    <label for="">Instagram link</label>
                    <input type="text" value="{{ old('instagram_link') }}" name="instagram_link" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Youtube link</label>
                    <input type="text" value="{{ old('youtube_link') }}" name="youtube_link" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Skype number</label>
                    <input type="text" value="{{ old('skype_link') }}" name="skype_link" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="">Twiteer  link</label>
                    <input type="text" value="{{ old('twitter_link') }}" name="twitter_link" class="form-control">
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
      
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  
  

  @endsection
  