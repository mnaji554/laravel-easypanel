<li class="list-divider"></li>
<li class="nav-small-cap"><span class="hide-menu">{{ __('CRUD Menu') }}</span></li>
@foreach(\EasyPanel\Models\CRUD::active() as $crud)
@component('easypanel::components.crud-menu-item', ['crud' => $crud])
@endcomponent
@endforeach
