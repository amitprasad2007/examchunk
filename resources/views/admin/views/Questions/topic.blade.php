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
            <a href="{{route('questions.index')}}"><span><i class="btn btn-primary"></i></span> Topic Wise Question</a>
            <a href="{{route('topics.index')}}"><span><i class="btn btn-primary"></i></span> All Topics</a>
            <a href="{{route('subjects.index')}}"><span><i class="btn btn-primary"></i></span> All Subjects</a>
    </section>
    <section class="content-header">
     <ol class="breadcrumb">    </ol>

                    <div class="col-md-12 text-right">
                   <a title="Add User" href="{{route('topics.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Topic</a>
                    <a title="Import Data" href="{{route('topic.import')}}" class="btn btn-primary"><i class="fa fa-download"></i> Import Data</a>
                    <a title="Export Data" href="{{route('topic-export-data')}}" class="btn btn-primary"><i class="fa fa-upload"></i> Export Data</a>
                    <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Home</a>
                </div>

        <h1>
           Topic Wise Questions
        </h1>    

    </section>
    <div class="box box-primary">
        <div class="box-header with-border"></div>
        <table class="table table-bordered data-table">
            <thead>
             <tr>
             <th width="3%">SL No</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Action</th>
             	<th>Status</th>
             </tr>
            </thead>
             <tbody>
                 
             </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">


   $(function () {
	 var table = $('.data-table').DataTable({
		processing: true,
		serverSide: true,
        ajax: "{{ route('topics-data') }}",
         columns: [
                   	{data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'subject_name', name: 'subject_name'},
                    {data: 'action_btns', name: 'action_btns'},
           			{data:'status',name:'status'},
           		 ]
				 });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function () {
        $(document).on("click", ".btn-topic-delete", function () {
            var conf = confirm("Are you sure want to delete ?");
            if (conf) {
                // ajax call functions
                var delete_id = $(this).attr("data-id"); // delete id of delete button
                var postdata = {
                    "_token": "{{ csrf_token() }}",
                    "delete_id": delete_id }
                $.post("{{ route('deletetopics') }}", postdata, function (response) {
                    var data = $.parseJSON(response);
                    if (data.status == 1) {
                        location.reload();
                    } else {
                        alert(data.message);
                    }
                })
            }
        });
    });
</script>

@endsection