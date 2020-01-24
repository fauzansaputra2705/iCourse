@if (Auth::check() && Auth::user()->level == "admin")
<li class="nav-item active">
    <a class="nav-link" href="{{ route('admin') }}">Home</a>
</li>
<li class="nav-item">
    <a href="{{ route('sekolah.index') }}" class="nav-link">Sekolah</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Referensi
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('kategori_soal.index') }}">Kategori Soal</a>
        <a class="dropdown-item" href="{{ route('kategori_quiz.index') }}">Kategori Quiz</a>
    </div>
</li>
<li class="nav-item">
    <a href="" class="nav-link">Bank Soal</a>
</li>
<li class="nav-item">
    <a href="{{ url('admin/soal') }}" class="nav-link">Soal</a>
</li>
{{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Soal
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Buat Soal</a>
        <a class="dropdown-item" href="#">View Soal</a>
    </div>
</li> --}}
<li class="nav-item">
    <a href="#" class="nav-link">Materi</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Wilayah
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ url('admin/provinsi') }}">Provinsi</a>
        <a class="dropdown-item" href="{{ url('admin/kabupaten') }}">Kabupaten</a>
        <a class="dropdown-item" href="{{ url('admin/kecamatan') }}">Kecamatan</a>
        <a class="dropdown-item" href="{{ url('admin/kelurahan') }}">Kelurahan</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">Profile</a>

        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
</li>




@elseif(Auth::check() && Auth::user()->level == "siswa")
<li class="nav-item active">
    <a class="nav-link" href="{{ url('siswa') }}">Home</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Quiz</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Nilai</a>
</li>
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">Profile</a>

        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
</li>



@elseif(Auth::check() && Auth::user()->level == "guru")
<li class="nav-item active">
    <a class="nav-link" href="{{ url('guru') }}">Home</a>
</li>
<!-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Soal
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Buat Soal</a>
        {{-- <a class="dropdown-item" href="#">Bank Soal</a> --}}
        {{-- <div class="dropdown-divider"></div> --}}
        {{-- <a class="dropdown-item" href="#">Another Dropdown Item</a> --}}
    </div>
</li> -->
<li class="nav-item">
    <a href="{{ url('guru/soal') }}" class="nav-link">Soal</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Bank Soal</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Quiz</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Nilai</a>
</li>
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">Profile</a>

        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
</li>



@elseif(Auth::check() && Auth::user()->level == "sekolah")
<li class="nav-item active">
    <a class="nav-link" href="{{ url('sekolah') }}">Home</a>
</li>
<li class="nav-item">
    <a href="{{ url('sekolah/guru') }}" class="nav-link">Guru</a>
</li>
<li class="nav-item">
    <a href="{{ url('sekolah/siswa') }}" class="nav-link">Siswa</a>
</li>
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href="#" class="dropdown-item">Profile</a>

        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
</li>
@else



<li class="nav-item active">
    <a class="nav-link" href="{{ url('/') }}">Home</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Members
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Siswa</a>
        <a class="dropdown-item" href="#">Guru</a>
        <a class="dropdown-item" href="#">Sekolah</a>
    </div>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Instructors</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Events</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">About Us</a>
</li>
<li class="nav-item">
    <a href="#" class="nav-link">Contact Us</a>
</li>
@endif