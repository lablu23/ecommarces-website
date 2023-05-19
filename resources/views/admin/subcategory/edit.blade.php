@extends('admin.layouts.index')

@section('content')  
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">sub Category/</span> Edit</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
          <!-- Basic Layout -->
          <div class="col-xxl">
            <div class="card mb-4">
              <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit sub Category </h5>
                <small class="text-muted float-end">input infromation </small>
              </div>
              <div class="card-body">
                <form action="{{ route('admin.subcategory.update',$subcategory->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="subcategory_name">subCateogory Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" value="{{ $subcategory->subcategory_name }}" />
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="category_id">Parent Category Name</label>
                   <select class="form-control" required name="category_id" id="category_id">
                    <option value="0">parent category name</option>
                    @foreach ($category as $item )
                    <option  value="{{ $item->id }}"> {{ $item->category_name }} </option> 
                    @endforeach
                   </select>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="status">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="status" name="status" aria-label="Default select example">
                            <option value="active" {{ $subcategory->status =='active'? 'selected':' ' }}>Active</option>
                            <option value="incative" {{ $subcategory->status =='inactive'? 'selected':' ' }}>Incative</option>
                         
                        </select> 
                    </div>
                  </div>

                  <div class="row justify-content-end">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-primary">Update category</button>
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