<script>
   $(document).ready(function(){
      let input_title = document.getElementById("input_title");
       let div_title = document.getElementById("div_title");
      let input_desc = document.getElementById("input_desc");
       let div_desc = document.getElementById("div_desc");
       let limit_input = 60
       let limit_desc = 160


       input_title.addEventListener("keyup",function(e){
       let val_input = e.target.value;
       let leftWord_input = limit_input - val_input.length;

           if((val_input.length) <= limit_input) {
               div_title.innerHTML = "you have "+ leftWord_input+  " charecter to left"
               // console.log("you have "+ leftWord+  " charecter to left")
           }else{
                alert('You have reached to the limit')
           }
       })

       input_desc.addEventListener("keyup",function(e){
       let val_desc = e.target.value;
       let leftWord_desc = limit_desc - val_desc.length;

           if((val_desc.length) <= limit_desc) {
               div_desc.innerHTML = "you have "+ leftWord_desc+  " charecter to left"
               // console.log("you have "+ leftWord+  " charecter to left")
           }else{
            alert('You have reached to the limit')
           }
       })
   })
</script>




{{-- <select class="country_drop form-control" id="type country_drop mySelectList" name="country[]" data-flag="true" multiple="multiple" placeholder="C">
                                @foreach ($countries as $country)
                                    <option value="{{$country->code}}">{{$country->name}}</option>
                                @endforeach
                            </select> --}}



