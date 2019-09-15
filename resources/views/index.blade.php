@extends("layouts/default",["title"=>"Url"])

@section("content")

<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Accueil
      </a>

      <a class="navbar-item">
        Nous soutenir
      </a>
<!--
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          Pricing
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>-->
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>

<div class="container">


</div>

<section class="hero is-medium is-primary is-bold">
  <div class="hero-body">
    <div class="container">
    <form method="POST" action="{{ route('generate.shorten.link.post') }}">
    {{ csrf_field() }} 
    <div class="columns">
  <div class="column is-four-fifths"> <div class="control">      
        <input class="input is-large" name="link" type="text" placeholder="Your long url here"></div></div>
  <div class="column">
    <div class="control">
    <button type="submit"  class="button is-info is-large">
      Shorten url
    </button>
  </div></div>
  
</div>
      
    </form>  
    </div>
  </div>
</section>


            @if (Session::has('success'))
                <div class="notification is-success margin-top-50">
                    {{ Session::get('success') }}
                </div>
            @endif

<nav class="panel">

<table width="100%" class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Short Link</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($shortLinks as $row)
                        <tr>
                            <td>{{ $row->ID }}</td>
                            <td><a href="{{ route('shorten.link', $row->CODE) }}" target="_blank">{{ route('shorten.link', $row->CODE) }}</a></td>
                            <td>{{ $row->LINK }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            


</nav>

 @section('script')
<script src="https://code.jquery.com/jquery.min.js"></script>
@stop