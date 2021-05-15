@php
    $fieldFile = isset($fieldFile) ? $fieldFile : 'file';
    $labelFile = !empty($entity) ? $entity->tModel($fieldFile) : ucfirst($fieldFile);
    $valueFile = !empty($entity) ? $entity->{$fieldFile} : null;
@endphp
<div class="form-group">
    <label for="{{$fieldFile}}">{{$labelFile}}</label>
    {!! Form::input('file', $fieldFile, $valueFile, ['class' => 'form-control-file', 'id' => $fieldFile, 'style' => 'display:none']) !!}
    <br/>
    <div id="{{$fieldFile}}_image">
        @if (!empty($valueFile) && is_string($valueFile))
            <img src="{{fullUrl($url)}}"/>
        @endif
    </div>
    <br/>
    <button type="button" class="btn btn-primary btn-default" onclick="$('#{{$fieldFile}}').click()">{{getAction('upload')}}</button>
</div>
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#{{$fieldFile}}').change(function () {
                // Validate

                // Show image
                previewFile(this, function (file) {
                    $('#{{$fieldFile}}_image').html('<img src="' + file + '" style="max-height: 300px;"/>');
                });
            });
        });
    </script>
@endpush


