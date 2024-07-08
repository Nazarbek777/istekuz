@extends('layouts.admin')

@section('content')
<div class="px-3">
    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Buyurtmalar</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th scope="col">Ism Familiya</th>
                                    <th scope="col">Soni</th>
                                    <th scope="col">Balandligi</th>
                                    <th scope="col">Eni</th>
                                    <th scope="col">Complect</th>
                                    <th scope="col">(Deraza...) turi</th>
                                    <th scope="col">Telefon raqam</th>
                                    <th scope="col">Seriya</th>
                                    <th scope="col">Profil rangi</th>
                                    <th scope="col">Laminate rangi</th>
                                    <th scope="col">Oyna turi</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $reg)
                                <tr>
                                    <td>{{ $reg->full_name }}</td>
                                    <td>{{ $reg->quantity }}</td>
                                    <td>{{ $reg->height_size }}</td>
                                    <td>{{ $reg->weight_size }}</td>
                                    <td>
                                        @foreach ($reg->complect as $item)
                                        {{ $item }} <br>
                                        @endforeach
                                    </td>
                                    <td>{{ $reg->type }}</td>
                                    <td>{{ $reg->phone_number }}</td>
                                    <td>{{ $reg->seriya }}</td>
                                    <td>{{ $reg->profile_color }}</td>
                                    <td>{{ $reg->laminate_color }}</td>
                                    <td>{{ $reg->window_type }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{ route('order.edit', ['order' => $reg->id]) }}">
                                                @if ($reg->status == 'yangi')
                                                <p style="color: red">{{ $reg->status }} <i class="fa fa-edit"></i></p>
                                                @else
                                                <p style="color: blue">{{ $reg->status }} <i class="fa fa-edit"></i></p>
                                                @endif
                                            </a>
                                            <form action="{{ route('order.destroy', ['order'=> $reg->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div> <!-- container -->
</div> <!-- content -->
@endsection