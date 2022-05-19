<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
           {{ Form::label('Subir Archivo') }}
           @if (isset($errors) && $errors->any())
           <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
            {{$error}}
            @endforeach
           </div>
           @endif
           
           <form action = "{{route('reportes.store')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <input type='file' name ='import_file'/>
           </form>
        </div>

       
        <br>

     <br>
    </div>
    <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary">Confirmar</button>
      
</div>
</div>