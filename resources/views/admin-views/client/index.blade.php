@extends('layouts.admin.app')

@section('title', \App\CentralLogics\translate('Adicionar novo Cliente'))

@push('css_or_js')

@endpush

@section('content')
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <h1 class="page-header-title"><i class="tio-add-circle-outlined"></i> {{\App\CentralLogics\translate('add')}} {{\App\CentralLogics\translate('new')}} {{\App\CentralLogics\translate('Cliente')}}</h1>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row gx-2 gx-lg-3">
        <div class="col-sm-12 col-lg-12 mb-3 mb-lg-2">
            <form action="{{route('admin.client.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-10 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Nome')}} {{\App\CentralLogics\translate('completo')}}</label>
                            <input type="text" name="name" class="form-control" placeholder="{{\App\CentralLogics\translate('Nome')}} {{\App\CentralLogics\translate('completo')}}" required>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('email')}}</label>
                            <input type="email" name="email" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : ex@example.com')}}" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('phone')}}</label>
                            <input type="text" name="phone" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : 017********')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Endreço')}} {{\App\CentralLogics\translate('completo')}}</label>
                            <input type="text" name="endereco" class="form-control" placeholder="{{\App\CentralLogics\translate('Endereço')}} {{\App\CentralLogics\translate('completo')}}" required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Número')}}</label>
                            <input type="text" name="numero" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : 10')}}" required>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Complemento')}}</label>
                            <input type="text" name="complemento" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : Apto 101')}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Ponto de refêrencia')}}</label>
                            <input type="text" name="referencia" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Bairro')}}</label>
                            <input type="text" name="bairro" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : ')}}" required>
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('Cidade')}}</label>
                            <input type="text" name="cidade" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : ')}}" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label class="input-label" for="exampleFormControlInput1">{{\App\CentralLogics\translate('UF')}}</label>
                            <input type="text" name="uf" class="form-control" placeholder="{{\App\CentralLogics\translate('Ex : SC')}}" required>
                        </div>
                    </div>
                </div>


                <hr>
                <button type="submit" class="btn btn-primary">{{\App\CentralLogics\translate('Cadastrar')}}</button>
            </form>
        </div>
    </div>
</div>

@endsection

@push('script_2')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#viewer').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#customFileEg1").change(function() {
        readURL(this);
    });
</script>

<script src="{{asset('public/assets/admin/js/spartan-multi-image-picker.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $("#coba").spartanMultiImagePicker({
            fieldName: 'identity_image[]',
            maxCount: 5,
            rowHeight: '120px',
            groupClassName: 'col-2',
            maxFileSize: '',
            placeholderImage: {
                image: '{{asset('
                public / assets / admin / img / 400 x400 / img2.jpg ')}}',
                width: '100%'
            },
            dropFileLabel: "Drop Here",
            onAddRow: function(index, file) {

            },
            onRenderedPreview: function(index) {

            },
            onRemoveRow: function(index) {

            },
            onExtensionErr: function(index, file) {
                toastr.error('{{\App\CentralLogics\translate("Please only input png or jpg type file")}}', {
                    CloseButton: true,
                    ProgressBar: true
                });
            },
            onSizeErr: function(index, file) {
                toastr.error('{{\App\CentralLogics\translate("File size too big")}}', {
                    CloseButton: true,
                    ProgressBar: true
                });
            }
        });
    });
</script>
@endpush