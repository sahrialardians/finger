<div class="accordion-header collapsed mb-2" role="button" data-toggle="collapse" data-target="#collapse-{{ isset($title) ? Str::slug($title) : 'permission-heading' }}" aria-expanded="false" aria-controls="collapse-{{ isset($title) ? Str::slug($title) : 'permission-heading' }}">
<h4>{{ $title }}</h4>
</div>
<div class="accordion-body collapse" id="collapse-{{ isset($title) ? Str::slug($title) : 'permission-heading' }}" aria-labelledby="heading-{{ isset($title) ? Str::slug($title) : 'permission-heading' }}" data-parent="#accordion-role-permissions" style="">

<div class="card-body">
    <div class="row">
        @foreach($permissions as $perm)
            <?php
                $per_found = null;
                if( isset($role) ) {
                    $per_found = $role->hasPermissionTo($perm->name);
                }
                if( isset($user)) {
                    $per_found = $user->hasDirectPermission($perm->name);
                }
            ?>

            <div class="col-md-3">
                <div class="checkbox">
                    <label class="{{ Str::contains($perm->name, 'delete') ? 'text-danger' : '' }}">
                        {!! Form::checkbox("permissions[]", $perm->name, $per_found, isset($options) ? $options : []) !!} {{ $perm->name }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <div class="card-footer">
        @can('edit_roles')
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        @endcan
    </div>
</div>