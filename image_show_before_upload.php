

	<input type="file" class="form-control" onchange="document.getElementById('product_image').src=window.URL.createObjectURL(this.files[0])" name="image">

	
	####--- onchange="document.getElementById('product_image').src=window.URL.createObjectURL(this.files[0])" ---####

	<div class="col-8 form-group">
             <img src="" alt="" id="product_image" width="200">
         </div>




	########-------  upload photo by clicking another button except bootstrap ----#######

	       <div class="col-4 d-flex align-items-center">
                  <span class="download">
                    <label for="load_photo">
                      <i class="fal fa-download" style="cursor: pointer"></i>
                    </label>
                    <input type="file" id="load_photo" class="d-none form-control" onchange="document.getElementById('product_image').src=window.URL.createObjectURL(this.files[0])" name="image">
                  </span>
                </div>
                <div class="col-8 form-group">
                  <img src="" alt="" id="product_image" width="200">
                </div>