@extends("admin.layouts.layout")
@php $user=auth()->user()->name; @endphp
@Section("title","ExamChunk | $user")
@Section("user","$user")
@Section("username","$user")
@Section("userfullname","$user")
@Section("title","ExamChunk")

@section("content")
<div class="content-wrapper">
     <section class="content-header">
  <ol class="breadcrumb">    </ol>
            <a href="{{Route('questions.index')}}"><span><i class="pe-7s-target"></i></span> Topic Wise Question</a>
            <a href="{{Route('topics.index')}}"><span><i class="pe-7s-target"></i></span> All Topics</a>
            <a href="{{route('subjects.index')}}"><span><i class="pe-7s-news-paper"></i></span> All Subjects</a>
              </section>

        
  

<div class="content">
    <div class="container-fluid">
        <div class="row">         
            <div class="col-md-12">
                <div class="card">
                    <div class="header">Add Question</div>
                    <div class="content">
                        {!! Form::open([ 'route' => [ 'questions.import_store' ], 'files' => true, 'enctype' => 'multipart/form-data', 'class' => '', 'id' => 'planner-form' ]) !!}
                            <div class="row">
                                <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                        <label class="control-label"> Choose Topic</label>
                                          <select name="topic_id" class="form-control" style="padding: 0px;">
                                             @if($datas['topics'])                                    
                                             @foreach($datas['topics'] as $subject)
                                             <option value="{{$subject->id}}">{{$subject->name}}</option>
                                              @endforeach
                                              @endif
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                   
                                    <div class="form-group">
                                        <label class="control-label"> Upload File </label>
                                        <input type="file" name="image" onchange="get_thumb(this)" class="form-control" style="padding: 0px;">
                                    </div>
                                    <div class="form-group">
                                        <p style="margin-top: 15px;">Please download question sample file from below link <br><a href="{!! asset('sample_files/question_sample.csv')!!}" target="_blank" class="filebtn">Download File</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                     <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Add Question</button>
                                    </div>
                                </div>
                            </div>
                       
                        <div class="clearfix"></div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div> 
    </div>
     </div>
     
  </div>

 </div>
     @endsection