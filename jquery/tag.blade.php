@extends('layouts/master')


@section('content')
    @include("layouts/errors")
    <form action="tagtest" method="post" enctype="multipart/form-data">
        <input type="text" name="products_name" id="products_name_text">
        <input type="text" name="tags" id="tags_text">
        <div id="tags">

        </div>
        <script language="javascript" type="text/javascript">
            function add_tag(id, event) {
                var prev_text=$("#tags_text").val();
                var add_text=$("#"+id).text();
                $("#tags_text").val(prev_text+" #"+add_text);
            }
            $("#products_name_text").keyup(function(){
                var val=$("#products_name_text").val();
                if(val === '響'){
                    if(!$("#hibiki")[0]){
                        $('#tags').append('<a href="javascript:void(0)" onclick="add_tag(\'hibiki\', arguments[0])" class="tag" id="hibiki" style="margin: 5px">響</a>');
                    }
                    if(!$("#wiskey")[0]){
                        $('#tags').append('<a href="javascript:void(0)" onclick="add_tag(\'wiskey\', arguments[0])" class="tag" id="wiskey" style="margin: 5px">ウイスキー</a>');
                    }
                    if(!$("#ml700")[0]){
                        $('#tags').append('<a href="javascript:void(0)" onclick="add_tag(\'ml700\', arguments[0])" class="tag" id="ml700" style="margin: 5px">700ml</a>');
                    }
                    if(!$("#ml500")[0]){
                        $('#tags').append('<a href="javascript:void(0)" onclick="add_tag(\'ml500\', arguments[0])" class="tag" id="ml500" style="margin: 5px">500ml</a>');
                    }
                    if(!$("#age12")[0]){
                        $('#tags').append('<a href="javascript:void(0)" onclick="add_tag(\'age12\', arguments[0])" class="tag" id="age12" style="margin: 5px">12年</a>');
                    }
                    if(!$("#age17")[0]){
                        $('#tags').append('<a href="javascript:void(0)" onclick="add_tag(\'age17\', arguments[0])" class="tag" id="age17" style="margin: 5px">17年</a>');
                    }
                }
            });
        </script>
        <input type="submit" value="検索">
    </form>
@endsection
