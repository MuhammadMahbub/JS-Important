


#######-----rendered page -------######
<div id="groupwiseusers" class="groupWiseUser">
    @include('layouts.backend.group_users')
</div>

@foreach ($assign_user as $assign)
<tr>
        <input type="hidden" name="allEmails[]" value="{{$assign->users->email ?? ''}}">
        <td>{{ $loop->index + 1 }}</td>
        <td>{{$assign->users->email ?? ''}}</td>
        <td>{{ $assign->polling_category->category_name ?? ''}}</td>
        <input type="hidden" name="slug" value="{{ $assign->polling_category->slug }}">
    </tr>
    @error('allEmails')
        <span class="text-danger">{{  $message }}</span>
    @enderror
@endforeach
#######-----rendered page -------######


####----scripts----####
<script>
    $('.groupwise').on('click', function (){
        let data_id = $(this).attr('data-id');
        // alert(data_id)
        $('.groupwise').removeClass("btn-success text-white")
        $(this).addClass('btn-success text-white')

        $.ajax({
            url: "{{ route('groupwiseuser') }}",
            type: "POST",
            data: {
                data_id: data_id,
            },
            success: function(response){
                console.log(response);
                $('#groupwiseusers').html(response.data)
            }
        });
    });
</script>
####----scripts----####



######-----controller -------##########

public function groupwiseuser(Request $request){

    $assign_user = AssignGroup::where('group_id', $request->data_id)->get();

    $view = view('layouts.backend.group_users',compact('assign_user'))->render();

    return response()->json(['data'=>$view ]);
}

######-----controller -------##########