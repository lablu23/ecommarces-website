@extends('admin.layouts.index')

@section('content')  
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">All /</span> sub Category </h4>
    <a class="btn btn-success mb-2" href="{{ route('admin.subcategory.create') }}"> Create Subcategory</a>
   
    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">All sub category </h5>
       <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Sl</th>
              <th>Sub Cateogry name</th>
              <th> Cateogry name</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">


          
            @foreach ($models as $subcategory )
            
                <tr>
                    <td>{{$loop->index+1 }}</td>
                    <td> <i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $subcategory->subcategory_name }}</td>
                    <td> <i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $subcategory->category->category_name	 }}</td>
                    
                    <td class="badge bg-label-{{ $subcategory->status == 'active'? 'primary':'danger' }} me-1">{{ $subcategory->status }}</td>
                    <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('admin.subcategory.edit',$subcategory->id) }}"
                              ><i class="bx bx-edit-alt me-2"></i> Edit</a>
                            <a class="dropdown-item" href=""
                              ><i class="bx bx-trash me-2"></i> Delete</a>
                          </div>
                        </div>
                      </td>                
                  </tr>
                   
              
            
            @endforeach
          
           
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
    
    <!--/ Responsive Table -->
  </div>
  <!-- / Content -->
@endsection