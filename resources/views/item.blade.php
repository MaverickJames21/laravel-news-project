@extends('base')

@section('content')



            @foreach ($items as $item )

                <div class=' items row justify-content-center'>



                        <div class="row">
                            <div class="col-sm-6">
                              <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->subtitle }}</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                            </div>
                            {{-- <div class="col-sm-6">
                              <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                  <p class="card-text">{{ $item->subtitle }}</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                            </div>
                          </div> --}}

                </div>


            @endforeach
            <div class=' justify-content-center mt-5' >
                {{$items->links('vendor.pagination.custom') }}

            </div>




@endsection
