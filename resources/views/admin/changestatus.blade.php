@extends('admin.header_nav')
@section('index_head')
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">

            <div class="row">
                <div class="col-lg-12">
                    @foreach($res as $value)
                    <form action="/changeaction/{{$value->id}}" method="post" id="form">
                        @csrf
                        <div class="col-12">
                            CHANGE STATUS:* <select name="changestatus" id="changestatus" class="form-control bg-light border-0 px-4" placeholder="Your Answer" style="height: 55px;">
                                <option value="">--- change status ---</option>
                                <option value="approve">Aprove</option>
                                <option value="reject">Reject</option>
                                <option value="block">Block</option>

                            </select>
                        </div>


                        <div class="col-12">
                            <button class="btn btn-secondary w-100 py-3" type="submit">change status</button>
                        </div>
                </div>
                </form>
                @endforeach
            </div>
        </div>

    </div>
</div>



<!-- Contact End -->
@endsection