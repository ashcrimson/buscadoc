@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@php($roles = $user->roles()->get())

@switch($roles[0]->name)
    @case('superAdmin')
        @php($dashboard_url = "admin/home")
        @break

    @case('adminCentro')
        @php($dashboard_url = "admincentro/home")
        @break

    @case('secretariaCentro')
        @php($dashboard_url = "secretaria/home")
        @break

    @case('paciente')
        @php($dashboard_url = "paciente/home")
        @break
@endswitch

<a href="/{{ $dashboard_url }}"
    @if($layoutHelper->isLayoutTopnavEnabled())
        class="navbar-brand logo-switch {{ config('adminlte.classes_brand') }}"
    @else
        class="brand-link logo-switch {{ config('adminlte.classes_brand') }}"
    @endif>

    {{-- Small brand logo --}}
    <img src="{{ asset(config('adminlte.logo_img', 'vendor/adminlte/dist/img/AdminLTELogo.png')) }}"
         alt="{{ config('adminlte.logo_img_alt', 'AdminLTE') }}"
         class="{{ config('adminlte.logo_img_class', 'brand-image-xl') }} logo-xs">

    {{-- Large brand logo --}}
    <img src="{{ asset(config('adminlte.logo_img_xl')) }}"
         alt="{{ config('adminlte.logo_img_alt', 'AdminLTE') }}"
         class="{{ config('adminlte.logo_img_xl_class', 'brand-image-xs') }} logo-xl">

</a>
