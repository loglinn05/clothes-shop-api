@php
use Illuminate\Support\Str;
@endphp

<div class="input-group form-group">
       <input type="password"
              name="{{ $name ?? "password" }}"
              id="{{ $id ?? "password" }}"
              value="{{ $value ?? '' }}"
              class="form-control"
              placeholder="{{ $placeholder ?? "Password" }}"
              aria-describedby="show{{ @Str::studly($id) ?? "Password" }}Button">
       <button type="button" class="btn btn-primary col-2" id="show{{ @Str::studly($id) ?? "Password" }}Button">
            <i class="fa-solid fa-eye"></i>
       </button>*
</div>

<script type="module">
    import {showPassword} from "{{ Vite::asset('resources/js/modules/show-password.js') }}";
    document.addEventListener("DOMContentLoaded", function () {
        let passwordInput = document.getElementById("{{ $id ?? "password" }}");
        passwordInput.nextElementSibling.addEventListener('click', showPassword.bind(null, passwordInput));
    });
</script>