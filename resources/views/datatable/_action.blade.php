{{-- <a href="{{ $edit_url }}">Ubah</a> --}}
{{-- {!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form_inline']) !!} --}}
{!! Form::model($model, ['url' => $form_url, 'method' => 'delete', 'class' => 'form_inline js-confirm', 'data-confirm' => $confirm_message]) !!}
<a href="{{ $edit_url }}">Ubah</a> | {!! Form::submit('Hapus', ['class' => 'btn btn-xs btn-danger']) !!}