
<div class="form-group{{ $errors->has('icone') ? ' has-error' : '' }}">
    {!! Form::label('icone', 'Icone:') !!}
  <select 
    name="{{ isset($name) && $name ? $name : 'icon' }}"  
    id="{{ isset($id) && $id ? $id : 'icon' }}" 
    value="{{ isset($value) && $value ? $value : 'icon' }}"
    class="iconpicker form-control form-controll">
    <option {{ isset($icon) && $icon=="fa fa-facebook" ? 'selected' : '' }} data-icon="fa fa-facebook" value="fa fa-facebook"></option>
    <option {{ isset($icon) && $icon=="fa fa-facebook-square" ? 'selected' : '' }} data-icon="fa fa-facebook-square" value="fa fa-facebook-square"></option>
    <option {{ isset($icon) && $icon=="fa fa-twitter-square" ? 'selected' : '' }} data-icon="fa fa-twitter-square" value="fa fa-twitter-square"></option>
    <option {{ isset($icon) && $icon=="fa fa-twitter" ? 'selected' : '' }} data-icon="fa fa-twitter" value="fa fa-twitter"></option>
    <option {{ isset($icon) && $icon=="fa fa-instagram" ? 'selected' : '' }} data-icon="fa fa-instagram" value="fa fa-instagram"></option>
    <option {{ isset($icon) && $icon=="fa fa-youtube" ? 'selected' : '' }} data-icon="fa fa-youtube" value="fa fa-youtube"></option>
    <option {{ isset($icon) && $icon=="fa fa-youtube-square" ? 'selected' : '' }} data-icon="fa fa-youtube-square" value="fa fa-youtube-square"></option>
    <option {{ isset($icon) && $icon=="fa fa-vimeo" ? 'selected' : '' }} data-icon="fa fa-vimeo" value="fa fa-vimeo"></option>
    <option {{ isset($icon) && $icon=="fa fa-linkedin" ? 'selected' : '' }} data-icon="fa fa-linkedin" value="fa fa-linkedin"></option>
    <option {{ isset($icon) && $icon=="fa fa-google-plus" ? 'selected' : '' }} data-icon="fa fa-google-plus" value="fa fa-google-plus"></option>
    <option {{ isset($icon) && $icon=="fa fa-vine" ? 'selected' : '' }} data-icon="fa fa-vine" value="fa fa-vine"></option>
    <option {{ isset($icon) && $icon=="fa fa-mail" ? 'selected' : '' }} data-icon="fa fa-mail" value="fa fa-mail"></option>
    <option {{ isset($icon) && $icon=="fa fa-phone" ? 'selected' : '' }} data-icon="fa fa-phone" value="fa fa-phone"></option>
    <option {{ isset($icon) && $icon=="fa fa-mobile" ? 'selected' : '' }} data-icon="fa fa-mobile" value="fa fa-mobile"></option>
    <option {{ isset($icon) && $icon=="fa fa-mobile-phone" ? 'selected' : '' }} data-icon="fa fa-mobile-phone" value="fa fa-mobile-phone"></option>
    <option {{ isset($icon) && $icon=="fa fa-envelope" ? 'selected' : '' }} data-icon="fa fa-envelope" value="fa fa-envelope"></option>
    <option {{ isset($icon) && $icon=="fa fa-envelope-o" ? 'selected' : '' }} data-icon="fa fa-envelope-o" value="fa fa-envelope-o"></option>
    <option {{ isset($icon) && $icon=="fa fa-map-pin" ? 'selected' : '' }} data-icon="fa fa-map-pin" value="fa fa-map-pin"></option>
    <option {{ isset($icon) && $icon=="fa fa-map-marker" ? 'selected' : '' }} data-icon="fa fa-map-marker" value="fa fa-map-marker"></option>
    <option {{ isset($icon) && $icon=="fa fa-map" ? 'selected' : '' }} data-icon="fa fa-map" value="fa fa-map"></option>
    <option {{ isset($icon) && $icon=="fa fa-map-o" ? 'selected' : '' }} data-icon="fa fa-map-o" value="fa fa-map-o"></option>
    <option {{ isset($icon) && $icon=="fa fa-circle" ? 'selected' : '' }} data-icon="fa fa-circle" value="fa fa-circle"></option>
    <option {{ isset($icon) && $icon=="fa fa-circle-o" ? 'selected' : '' }} data-icon="fa fa-circle-o" value="fa fa-circle-o"></option>
    <option {{ isset($icon) && $icon=="fa fa-plus" ? 'selected' : '' }} data-icon="fa fa-plus" value="fa fa-plus"></option>
    <option {{ isset($icon) && $icon=="fa fa-money" ? 'selected' : '' }} data-icon="fa fa-money" value="fa fa-money"></option>
    <option {{ isset($icon) && $icon=="fa fa-dollar" ? 'selected' : '' }} data-icon="fa fa-dollar" value="fa fa-dollar"></option>

  </select>
    <small class="text-danger">{{ $errors->first('icone') }}</small>
</div>
