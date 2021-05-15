<div class="card-body">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name">{{$entity->tModel('name')}} <span class="mdi mdi-"></span></label>
                {!! Form::text('name', $entity->name, ['class' => 'form-control', 'id' => 'name', 'placeholder' => $entity->tModel('name')]) !!}
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="email">{{$entity->tModel('email')}}</label>
                {!! Form::text('email', $entity->email, ['class' => 'form-control', 'id' => 'email', 'placeholder' => $entity->tModel('email')]) !!}
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="password">{{$entity->tModel('password')}}</label>
                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => $entity->tModel('password')]) !!}
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="confirm_password">{{$entity->tModel('confirm_password')}}</label>
                {!! Form::password('confirm_password', ['class' => 'form-control', 'id' => 'confirm_password', 'placeholder' => $entity->tModel('confirm_password')]) !!}
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="tel">{{$entity->tModel('tel')}}</label>
                {!! Form::text('tel', $entity->tel, ['class' => 'form-control', 'id' => 'tel', 'placeholder' => $entity->tModel('tel')]) !!}
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="role_type">{{$entity->tModel('role_type')}}</label>
                {!! Form::select('role_type', getConfig('admin_role_type'), $entity->role_type, ['class' => 'form-control', 'id' => 'role_type', 'placeholder' => getConfig('placeholder_select_default')]) !!}
            </div>
        </div>

        <div class="col-12">
            {!! genInputFile('avatar') !!}
        </div>
    </div>
</div>
