<ul class="list-group shadow">
    <!-- list group item-->
    @foreach ($products as $product)
    <li class="list-group-item">
        <!-- Custom content-->
        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
                <h5 class="mt-0 font-weight-bold mb-2">{{$product->name}}</h5>
                <p class="font-italic text-muted mb-0 small">{{$product->description}}</p>
                <div class="d-flex align-items-center justify-content-between mt-1">
                    <h6 class="font-weight-bold my-2">{{$product->price}}</h6>
                    <ul class="list-inline small">
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                        <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                    </ul>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="px-4 py-2 text-white bg-blue-800 rounded">Agregar al carrito</button>
                    </form>
                </div>
            </div><img src="{{$product->image}}" alt="Generic placeholder image" width="200"
                class="ml-lg-5 order-1 order-lg-2">
        </div> <!-- End -->
    </li> <!-- End -->
    @endforeach
    <!-- list group item-->

</ul> <!-- End -->