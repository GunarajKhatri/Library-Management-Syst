<div style="margin-top:20px;">
   @if(session()->has('message'))
   <div class="alert alert-success"><h4><b>{{session()->get('message')}}</b></h4></div>
   @elseif(session()->has('error'))
   <div class="alert alert-danger"><h4><b>{{session()->get('error')}}</b></h4></div>
   @endif
</div>