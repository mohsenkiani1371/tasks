@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $er)
      <li class="mt-2">{{ $er }}</li>
    @endforeach
  </ul>
</div>
@endif
