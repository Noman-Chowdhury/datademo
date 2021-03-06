@extends('mainfile')

@section('content')

    <button type="button" class="btn btn-primary" style="margin: 10px" data-toggle="modal" data-target="#exampleModal">Add Product Category</button>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Category Name</th>
        <th scope="col">Sector Name</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach($procats as $key => $procat)


      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td> {{ $procat->name }} </td>
        <td> {{ $procat->sectorcat->name }} </td>
        <td>
            <button>Edit</button>
            <button>Delete</button>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>






  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=" {{ route('procat.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Select Sector Name</label><br>
              <select name="sector">
                  @foreach($all as $al)
                  <option value="{{ $al->id }}"> {{ $al->name }} </option>
                  @endforeach
                </select>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Category Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="productcat" placeholder="Enter email">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>

    </div>
  </div>
</div>

@endsection
