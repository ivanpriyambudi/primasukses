@extends('landing.app.app')

@section('title')
<title>Primasukses | Contact</title>
@endsection

@section('konten')

@section('title-konten')
<h1 class="white-text">Contact</h1>
@endsection
@section('title-konten2')
<li class="active">Contact</li>
@endsection

<section class="section-padding">
          
          <div class="container">

            <div class="row">

                <div class="col-md-12 contact-info">

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                        1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103

                        <hr>

                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                        United States of America.</p>
                      </div>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Fax: (123) 456-7890<br>
                        Phone: (123) 456-7890</p>
                      </div>

                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#">first.last@example.com</a><br>
                        <a href="#">www.yourdomain.com</a></p>
                      </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>
        </section>


@endsection