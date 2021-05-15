@php $isCreate = empty($entity->id) @endphp

<div class="card-body">
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name" class="required">{{$entity->tModel('name')}}</label>
                {!! Form::text('name', $entity->name, ['class' => 'form-control', 'id' => 'name', 'placeholder' => $entity->tModel('name')]) !!}
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label for="email" class="required">{{$entity->tModel('email')}}</label>
                {!! Form::text('email', $entity->email, ['class' => 'form-control', 'id' => 'email', 'placeholder' => $entity->tModel('email')]) !!}
            </div>
        </div>

        @if ($isCreate)
            <div class="col-6">
                <div class="form-group">
                    <label for="password" class="required">{{$entity->tModel('password')}}</label>
                    {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'placeholder' => $entity->tModel('password')]) !!}
                </div>
            </div>

            <div class="col-6">
                <div class="form-group">
                    <label for="confirm_password" class="required">{{$entity->tModel('confirm_password')}}</label>
                    {!! Form::password('confirm_password', ['class' => 'form-control', 'id' => 'confirm_password', 'placeholder' => $entity->tModel('confirm_password')]) !!}
                </div>
            </div>
        @endif

        <div class="col-6">
            <div class="form-group">
                <label for="tel">{{$entity->tModel('tel')}}</label>
                {!! Form::text('tel', $entity->tel, ['class' => 'form-control', 'id' => 'tel', 'placeholder' => $entity->tModel('tel')]) !!}
            </div>
        </div>

        @if(!$entity->isAdmin())
            <div class="col-6">
                <div class="form-group">
                    <label for="role_type" class="required">{{$entity->tModel('role_type')}}</label>
                    {!! Form::select('role_type', getConfig('admin_role_type'), $entity->role_type, ['class' => 'form-control', 'id' => 'role_type', 'placeholder' => getConfig('placeholder_select_default')]) !!}
                </div>
            </div>
        @endif

        <div class="col-12">
            {!! genInputFile('avatar') !!}
        </div>

        <div class="col-12 btn-submit">
            <button class="btn btn-primary" type="submit">{{getAction($isCreate ? 'create' : 'edit')}}</button>
        </div>
    </div>
</div>
