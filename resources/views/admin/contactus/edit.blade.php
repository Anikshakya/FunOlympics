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
                <h3 class="card-title">Edit Company Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form   method="post" action="{{ route('contactus.update',$contactus->id) }}" enctype="multipart/form-data">
                @csrf
               @method('PUT')
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="name">Company name:</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter the company name" value="{{ $contactus->name }} ">
                   </div>

                  <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" id="address" placeholder="select the location" value="{{ $contactus->address }} ">
                  </div>
                
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ $contactus->email }} ">
                   </div>

                  <div class="form-group">
                    <label for="email">Alternative Email:</label>
                    <input type="text" name="description" class="form-control" id="email" placeholder="Email" value="{{ $contactus->description}}">
                  </div>

                 <div class="form-group">
                    <label for="number">Phone number:</label>
                    <input type="text" name="number" class="form-control" id="number" placeholder="Phone number" value="{{ $contactus->number }} ">
                  </div>


                  <div class="form-group">
                    <label for="tel_nbr">Alternative number:</label>
                    <input type="text" name="telephone_number" class="form-control" id="tel_number" placeholder="Alternative number" value="{{ $contactus->telephone_number }} ">
                  </div>

                 <div class="form-group">
                    <label for="google_map">Google  map</label>
                    <input type="google_map" value="{{ $contactus->google_map }}" name="google_map" class="form-control">
                  </div>

                  <div class="form-group">
                   <label>Description</label>
                     <textarea id="summernote" name="description">
                     {{ $contactus->description }}
                        </textarea>
                  </div>

                  <div class="form-group">
                    <label for="header_logo">Navbar Logo:</label>
                    <input type="file" name="navbar_logo" class="form-control" id="" placeholder="Header logo">
                  </div>

                  <p>{{ $contactus->navbar_logo  }}</p>
                  <img src="{{ url('/') }}/public/storage/posts/{{   $contactus->navbar_logo   }}" height="50px" width="50px">

                  <div class="form-group">
                    <label for="youtube_link">Navbar Link:</label>
                    <input type="text" name="navbar_link" class="form-control" id="" placeholder="" value="{{ $contactus->navbar_link }}">
                  </div>

                  <div class="form-group">
                    <label for="header_logo">Footer Logo:</label>
                    <input type="file" name="footer_logo" class="form-control" id="" placeholder="Header logo">
                  </div>

                  <img src="{{ url('/') }}/public/storage/posts/{{  $contactus->footer_logo  }}" height="50px" width="50px">

                  <div class="form-group">
                    <label for="youtube_link">Footer Link:</label>
                    <input type="text" name="footer_link" class="form-control" id="" placeholder="" value="{{ $contactus->footer_link }}">
                  </div>
                
                    <div class="form-group">
                    <label for="">Facebook link</label>
                    <input type="" value="{{ $contactus->facebook_link }}" name="facebook_link" class="form-control">
                  </div>
                  
                    <div class="form-group">
                    <label for="">Instagram link</label>
                    <input type="text" value="{{ $contactus->instagram_link }}" name="instagram_link" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Youtube link</label>
                    <input type="text" value="{{ $contactus->youtube_link }}" name="youtube_link" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Skype number</label>
                    <input type="text" value="{{ $contactus->skype_link }}" name="skype_link" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="">Twiteer  link</label>
                    <input type="text" value="{{ $contactus->twitter_link }}" name="twitter_link" class="form-control">
                  </div>                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
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
  