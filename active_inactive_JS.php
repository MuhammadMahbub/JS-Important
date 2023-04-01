
<!-- blade -->
<td>
    <input type="hidden" id="option__{{$user->id}}" value="{{$user->id}}">
    <select class="select-opt p-1 optionChange" id="statusChange__{{$user->id}}">
        <option value="1" {{$user->status == 1 ? 'selected' : ''}}>Approve</option>
        <option value="0" {{$user->status == 0 ? 'selected' : ''}}>Pending</option>
    </select>
</td>


@push('scripts')
    <script>
        $(document).ready(function(){ 
        $('#statusChange__{{$user->id}}').change(function(){
            let status = $(this).val();
            let user_id = $('#option__{{$user->id}}').val();
            // alert(product_id);
            $.ajax({
                url: "{{ route('approve_pending') }}",
                type: "POST",
                data: {
                    user_id : user_id,
                    status : status,
                },
                success: function(data){
                    toastr.success('Status Updated')
                },
            });
        });
        });
    </script>
@endpush


<!-- route -->
Route::post('/approve/pending', [AdminController::class, 'approve_pending'])->name('approve_pending');


<!-- controller -->
public function approve_pending(Request $request){
    // return $request->user_id;
    $user = User::findOrFail($request->user_id);
    $user->update([
        'status' => $request->status,
    ]);
}