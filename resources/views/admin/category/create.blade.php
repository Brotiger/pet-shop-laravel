@extends('layouts.admin')

@section('title', 'Добавление категории')
@section('content')
<section class="content  pt-4">
    <div class="container-fluid">
        <div style="max-width: 600px">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title mb-0">Добавление категории</h3>
            </div>
              <!-- /.card-header -->
              <!-- form start -->
            <form class="addForm" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" id="addForm">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Название*</label>
                        <input type="text" name="title" class="form-control" placeholder="Введите название категории" required>
                        <p class="text-danger error-message" error-message id="error-title" style="display: none"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Псевдоним*</label>
                        <input type="text" name="alias" class="form-control" placeholder="Введите псевдоним, который будет использоваться в url" required>
                        <p class="text-danger error-message" id="error-alias" style="display: none"></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Описание</label>
                        <div>
                            <textarea class="form-control" name="description" placeholder="Введите описание категории"></textarea>
                            <p class="text-danger error-message" error-message id="error-description" style="display: none"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFile">Фотография
                            <small class="ml-1">(максимальный вес: {{ env('MAX_LOGO_SIZE', 200) }} КБ)</small>
                        </label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="img" class="custom-file-input" id="inputFile">
                                <label class="custom-file-label" for="inputFile">Выбирете файл</label>
                            </div>
                        </div>
                        <p class="text-danger error-message" error-message id="error-img" style="display: none"></p>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>    
  <!-- /.content-header -->
@endsection
@section('custom_js')
<!-- bs-custom-file-input -->
<script src="/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script src="/js/singl/category.js"></script>
@endsection