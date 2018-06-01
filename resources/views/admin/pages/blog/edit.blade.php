@extends('admin.layouts.app')

@section('title', 'Edit Blog')

@section('content')
    <div class="kt-pagetitle">
        <h5>Edit Blog</h5>
    </div><!-- kt-pagetitle -->

    <div class="kt-pagebody">
        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
                <div class="card pd-20 pd-sm-40 form-layout">
                    <h6 class="card-body-title">Edit blog page</h6>

                    <div class="row mg-t-20">
                        <form action="{{ route('admin.blog.postCreate') }}" method="POST" enctype="multipart/form-data" id="editBlogForm">
                            {{csrf_field()}}
                            <input type="hidden" value="{{$blog->id}}" name="blog_id">
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="title" placeholder="Enter title" required value="@if($blog->title) {{ $blog->title }}@else {{old('title')}} @endif">
                                </div>
                            </div>
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label">Tag: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="tag"  placeholder="Enter tag" required value="@if($blog->tag) {{ $blog->tag }}@else {{old('tag')}} @endif">
                                </div>
                            </div>
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label @if ($errors->has('file')) text-danger @endif">Image:</label>
                                    <input class="form-control @if ($errors->has('file')) is-invalid @endif" type="file" name="file">
                                    @if ($errors->has('file'))
                                        <span class="text-danger">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                    @endif
                                    <img src="{{$blog->image}}" style="width: 150px;" class="mg-t-20">
                                </div>
                            </div>
                            <div class="col-lg-12 mg-t-20">
                                <div class="form-group">
                                    <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                    <textarea class="form-control" name="description" id="description">{{$blog->description}}</textarea>
                                    <input type="hidden" name="description_content" id="description_content" value="{{$blog->description}}"/>
                                </div>
                            </div>
                            <div class=" form-layout-footer col-lg-12 mg-t-20">
                                <a href="{{route('admin.blog')}}" class="btn btn btn-secondary pull-right">Cancel</a>
                                <button class="btn btn-default mg-r-5 pull-right" type="submit" >Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom-js')
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
    <script>
        tinymce.init({
            selector: '#description',
            height : "400",
            theme: 'modern',
            plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount spellchecker  imagetools   contextmenu colorpicker textpattern help',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ],
            init_instance_callback: function (editor) {
                editor.on('Change', function (e) {
                    tinymce.activeEditor.dom.setAttrib(tinymce.activeEditor.dom.select('table'), 'border', null);

                });
            }
        });

        $('#editBlogForm').submit(function() {
            // DO STUFF...
            var tinymceContent =  tinyMCE.get('description').getContent();
            var validContent = $('#description_ifr').contents().find('body').text();
            if(validContent.trim().length == 0){
                alert("Please insert description."); return false;
            }
            else {
                $("#description_content").val(tinymceContent);
                return true;
            }
        });
    </script>
@endsection