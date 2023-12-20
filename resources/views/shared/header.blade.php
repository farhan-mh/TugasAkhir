@forelse($menu as $menuu1)
@if($menuu1->id === 1)
<nav style="background-color:{{ $menuu1->menu }};"> 
  <div class="row w-100">
    <input type="checkbox" id="check" class="cek-navbar d-none" >
    <img src="{{  asset('storage/pos/'. $menuu1->logo) }}" class="p-2" style="width: 40px;margin-left:40px;" alt="">
    <label for="" class="logoo col-md-2 col-sm-5 col-5" style="color:{{ $menuu1->txt }}; ">{{ $menuu1->judulWeb }}</label>
    <span class="label-navbar d-md-none d-sm-block col-sm-6 col-5">
        <label for="check" onclick=" klikLabel1()" class="label1 icon-list float-end" id="label1">
        <img src="{{ asset('svg/list.svg')}}" alt="">
        </label>
        <label for="check" onclick=" klikLabel2()" class="label2 icon-list float-end" id="label2">
            <img src="{{ asset('svg/x-lg.svg')}}" alt="">
        </label>
    </span>
    <div class="div-navbar col-md-5">
        <ul class="ul-1">
          @forelse($menu as $menuu)
          @if($menuu->id === 2)
        <li class="li-1"><a href="/usr" class="text-decoration-none opacity-100" style="color:{{ $menuu->txt }}">{{ $menuu->menu }}</a></li>
         @endif
          @empty
          @endforelse
            
          @forelse($menu as $menuu)
          @if($menuu->id === 3)
          <li class="li-1">
                <div class="dropdown">
                    <a class="dropdown-navbar dropdown-toggle text-decoration-none" href="#" role="button" style="color:{{ $menuu->txt }}"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ $menuu->menu }}
                    </a>
                    <ul class="dropdown-menu " style="width:250px">
                        @forelse ($list as $row)
                        <li><a href="{{ route('show2', $row->kategori) }}" class="text-decoration-none text-secondary" style="text-decoration: padding: 12px 16px;">{{ $row->kategori}}</a></li>
                        @empty <!-- !! -->
                        @endforelse
                    </ul>
                </div>
            </li>
         @endif
          @empty
          @endforelse

          @forelse($menu as $menuu)
          @if($menuu->id === 4)
          <li class="li-1"><a href="{{ route('beritaa')}}" class="text-decoration-none" style="color:{{ $menuu->txt }}">{{ $menuu->menu }}</a></li>
         @endif
          @empty
          @endforelse
          
          @forelse($menu as $menuu)
          @if($menuu->id === 5)
          <li class="li-1"><a href="{{ url('contact')}}" class="text-decoration-none" style="color:{{ $menuu->txt }}">{{ $menuu->menu }}</a></li>
         @endif
          @empty
          @endforelse
        </ul>
    </div>
    </div>
    </nav>
    @endif
          @empty
          @endforelse