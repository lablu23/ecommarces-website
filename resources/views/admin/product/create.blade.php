 @extends('admin.layouts.index')

@section('content')      
       
       <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product /</span> Create</h4>
  
                <!-- Basic Layout & Basic with Icons -->
                <div class="row">
                  <!-- Basic Layout -->
                  <div class="col-xxl">
                    <div class="card mb-4">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="mb-0">Create product  </h5>
                        <small class="text-muted float-end">input infromation </small>
                      </div>
                      <div class="card-body">
                        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="product_name">product  Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Enter the product_name" />
                            </div>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="category_id">Parent Category Name</label>
                           <select class="form-control" name="category_id" id="category_id">
                            <option value="0">parent category name</option>
                            @foreach ($category as $item )
                            <option value="{{ $item->id }}"> {{ $item->category_name }} </option> 
                            @endforeach
                           </select>
                          </div>

                       

                          <div class="mb-3">
                            <label class="form-label" for="subcategory_id">Parent subCategory Name</label>
                           <select class="form-control" name="subcategory_id" id="subcategory_id">
                            
                           </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label" for="category_id">Parent brand Name</label>
                           <select class="form-control" name="category_id" id="category_id">
                            <option value="0">parent bran  name</option>
                            @foreach ($brand as $item )
                            <option value="{{ $item->id }}"> {{ $item->brand_name }} </option> 
                            @endforeach
                           </select>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="product_name"> short description </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="shart_des" id="shart_des" cols="30" rows="10"></textarea>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="product_name">long description  </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="long_des" id="long_des" cols="30" rows="10"></textarea>
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="product_name">  price</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" name="price" id="price" placeholder="price  " />
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="discount">  discount</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="discount" id="discount" placeholder="discount  " />
                            </div>
                          </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="discount_type">discount_type</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="discount_type" name="discount_type" aria-label="Default select example">
                                    <option selected>Open this select status</option>
                                    <option value="flag">flag</option>
                                    <option value="pasentans">pasentans</option>
                                 
                                </select> 
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="stock">stock  </label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="stock" id="stock" placeholder=" stock " />
                            </div>
                          </div>

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="photo">photo  </label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" name="photo" id="photo" placeholder=" stock " />
                            </div>
                          </div>

                    

                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="status">Status</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="status" name="status" aria-label="Default select example">
                                    <option selected>Open this select status</option>
                                    <option value="active">Active</option>
                                    <option value="incative">Incative</option>
                                 
                                </select> 
                            </div>
                          </div>

                          <div class="row justify-content-end">
                            <div class="col-sm-10">
                              <button type="submit" class="btn btn-primary">create product </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>

              
              <!-- / Content -->
@endsection  


@push('adminSubcategory')
<script>

$('#category_id').on('change', function () {
            var idCountry = this.value;
            $("#subcategory_id").html('');
            $.ajax({
                url: "{{url('admin/getSubcategory')}}",
                type: "POST",
                data: {
                    category_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#subcategory_id').html('<option value="">-- Select subcategory --</option>');
                    $.each(result.states, function (key, value) {
                      console.log(value);
                        $("#subcategory_id").append('<option value="' + value
                            .id + '">' + value.subcategory_name + '</option>');
                    });
                  }
            });
        });


  </script>
@endpush