
<textarea name="blog_content" id="test-area"></textarea>
OR
<div id="test-area"></div>

<!-------------- Script -------->
<script>
        ClassicEditor
	   .create( document.querySelector('#test-area') ,{
                ckfinder: {
                    uploadUrl: '{{route('ckeditor_image.upload').'?_token='.csrf_token()}}'
                }
            })
</script>



//------------ Route-------------\\
Route::post('ckeditor/image/uplaod', [BlogController::class, 'ckeditor_image_uplaod'])->name('ckeditor_image.upload');




//------ Controller --------\\

public function ckeditor_image_uplaod(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $request->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }