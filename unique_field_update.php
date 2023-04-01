
<!-- -------Update validation------  -->
$request->validate([
    'title' => 'required|unique:categories,title,'.$id
]);