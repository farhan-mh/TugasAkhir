

<br><br><br>
<!-- ke atas -->
<div class="up" id="myP" style="">
<a>
   <button type="button" class=" btn btn-primary mt-3 " onclick="scrollKeatas()">
    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
    </button>
  </a>
  </div>
  <!-- <input type="checkbox" name="" id="f"> -->
  <!-- /ke atas -->
    <footer class="footer col-12" style="z-index: 10;">
        <div class="d1 text-light row" >
        @forelse($footer as $ftr)
      <div class="txt col-xl-6 col-12 col-sm-6 text-lg-start text-sm-start p-sm-1 p-3">
      <h6 class="">
           
        </h6>
        <h6>
          {!! $ftr->teksFooter !!}
        </h6>
        <hr>
        <span class="spn-footer" style="color:white float:right;">Copyright &copy   :v</b><br>
    </div>
    @empty
    @endforelse

@forelse($footer as $ftr2)
    <div class="tombol-footer col-xl-5 col-md-11 col-sm-6">
        <!-- t1 -->
        <div class="float-end" style="float:right">
        <a href="{{ $ftr2->link }}">
        <button  type="button" class="tf btn btn-secondary " >
          <!-- <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
           <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg>    -->
          <img src="{{ asset('storage/svgUp/'.$ftr2->svg) }}" width="26" height="26" alt="">
        </button>
        </a>
        <!-- t2 -->
        <a href="{{ $ftr2->link2 }}">
        <button type="button" class="tf btn btn-secondary">
          <img src="{{ asset('storage/svgUp/'.$ftr2->svg2) }}" width="26" height="26" alt="">
        </button >
        </a>
        <!-- t3 -->
        <a href="{{ $ftr2->link3 }}">
        <button class="tf btn btn-secondary">
          <img src="{{ asset('storage/svgUp/'.$ftr2->svg3) }}" width="26" height="26" alt="">
        </button>
        </a>
            <!-- t4 -->
        </div>
    </div>
    @empty
    @endforelse
   

      </div>
    </footer>

    
