
    @extends('layouts.admin')

@section('content')

    <form method="POST" action="{{ route('admin.tag.update',['tag'=>$tag->id]) }}">
        @method('PUT')
        @csrf
        <div class="card mb-3">
            <div class="card-body">
                <form action="?" method="GET">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="text" class="form-control {{$errors->has('name_uz') ? "border-danger": ''}}"  name="name_uz" value="{{$tag->name_uz}}" placeholder="Номи UZ">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="text" class="form-control {{$errors->has('name_oz') ? "border-danger": ''}}"  name="name_oz" value="{{$tag->name_oz}}" placeholder="Номи OZ">
                            </div>

                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <input type="text" class="form-control {{$errors->has('name_ru') ? "border-danger": ''}}"  name="name_ru" value="{{$tag->name_ru}}" placeholder="Номи RU">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Saqlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
@endsection



