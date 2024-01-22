@extends('admin_dashboard.layouts.app')
@section('style')
    <!-- <link href="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" /> -->

    <link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin_dashboard_assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />

    <link href="{{ asset('admin_dashboard_assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
@endsection

@section('wrapper')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Bài viết</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                                        class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm mới bài viết</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Thêm bài viết mới</h5>
                    <hr />
                    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">
                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Tiêu đề bài viết</label>
                                            <input type="text" value=' {{ old('title') }}' name="title" required
                                                class="inputPostTitle form-control" id="inputProductTitle"
                                                placeholder="Nhập tiêu đề bài viết">

                                            @error('title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Slug - liên kết</label>
                                            <input type="text" value=' {{ old('slug') }}' name="slug" required
                                                class="slugPost form-control" id="inputProductTitle"
                                                placeholder="Nhập slug">

                                            @error('slug')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label">Mô tả</label>
                                            <textarea required name="excerpt" class="form-control" id="inputProductDescription" rows="3">{{ old('excerpt') }}</textarea>


                                            @error('excerpt')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <label for="inputProductTitle" class="form-label">Danh mục bài viết</label>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="p-3 rounded">
                                                        <div class="mb-3">
                                                            <select name="category_id" required class="single-select">
                                                                @foreach ($categories as $key => $category)
                                                                    <option value="{{ $key }}">
                                                                        {{ $category }}</option>
                                                                @endforeach
                                                            </select>

                                                            @error('category_id')
                                                                <p class="text-danger">{{ $message }}</p>
                                                            @enderror

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Từ khóa</label>
                                            <input type="text" class="form-control" name="tags" data-role="tagsinput">
                                        </div>

                                        <!-- <input id="image-uploadify" name="thumbnail" type="file" id="file" accept="image/*" multiple> -->
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="inputProductDescription" class="form-label">Hình ảnh bài
                                                    viết</label>
                                                {{-- <input id="thumbnail" require name="thumbnail" type="file" id="file"> --}}
                                                <div class="input-group">
                                                    <button type="button" id="lfm" data-input="thumbnail"
                                                        data-preview="holder" class="btn btn-primary">Thêm
                                                        ảnh</button>
                                                    <input type="text" class="form-control" name="thumbnail"
                                                        id="thumbnail" required>
                                                </div>
                                                @error('thumbnail')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror

                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="inputProductDescription" class="form-label">Nội dung bài
                                                viết</label>
                                            <textarea name="body" id="post_content" class="form-control" id="inputProductDescription" rows="3">{{ old('body') }}</textarea>

                                            @error('body')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>

                                        <button class="btn btn-primary" type="submit">Thêm bài viết</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
    <!--end page wrapper -->
@endsection

@section('script')
    <!-- <script src="{{ asset('admin_dashboard_assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script> -->
    <script src="{{ asset('admin_dashboard_assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin_dashboard_assets/plugins/input-tags/js/tagsinput.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    {{-- Button --}}
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="/vendor/laravel-filemanager/js/filemanager.min.js"></script>
    <script src="{{ asset('/js/plugins/jquery-ui-1.13.2/jquery-ui.min.js') }}"></script>
    <script>
        var route_prefix = "/laravel-filemanager";
        $('#lfm').filemanager('image', {
            prefix: route_prefix,
        });
    </script>
    {{-- End Button --}}
    <script>
        $(document).ready(function() {
            // $('#image-uploadify').imageuploadify();

            $('.single-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });

            $('.multiple-select').select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                    'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });

            setTimeout(() => {
                $(".general-message").fadeOut();
            }, 5000);

        });
    </script>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>

    <script>
        CKEDITOR.replace('post_content', options);
    </script>

    <script>
        $(document).on('change', '.inputPostTitle', (e) => {
            e.preventDefault();

            let $this = e.target;

            let csrf_token = $($this).parents("form").find("input[name='_token']").val();
            let titlePost = $($this).parents("form").find("input[name='title']").val();

            let formData = new FormData();
            formData.append('_token', csrf_token);
            formData.append('title', titlePost);

            $.ajax({
                url: "{{ route('admin.posts.to_slug') }}",
                data: formData,
                type: 'POST',
                dataType: 'JSON',
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.success) {
                        $('.slugPost').val(data.message);

                    } else {
                        alert("Bị lỗi khi nhập title !")
                    }
                }
            })
        })
    </script>
@endsection
