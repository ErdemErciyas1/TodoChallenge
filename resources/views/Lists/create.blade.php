

<p>Welcome to create page<p>

{!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'] )}}
    </div>
{!! Form::close() !!}