@extends('admin.layout')

@section('messages-activation', 'active')
@section('tab-title', 'Contact Messages')


@section('content')

    <main id="main" class="main">
        <x-admin.page-title title="Contact Messages" sub="Contact Messages" />


        <section>
            <div class="shadow-lg rounded py-3 bg-white">
                <div class="row p-1 m-2">
                    <div class="col col-3">
                        <div class="row px-2">
                            <div class="col-2 bg-secondary py-2">
                                <img src="https://static.vecteezy.com/system/resources/previews/005/544/718/non_2x/profile-icon-design-free-vector.jpg"
                                alt="" class="img-fluid rounded-5">
                            </div>

                            <div class="col-10 fw-bold">
                                {{ $contact->name }} <br> {{ $contact->email }}
                            </div>
                        </div>
                    </div>

                    <div class="col col-9 d-flex flex-row-reverse fw-bold">
                        {{ Carbon\Carbon::parse($contact->created_at, 'UTC')->setTimezone('Asia/Amman')->format('j.n.Y') }} <br>
                        {{ Carbon\Carbon::parse($contact->created_at, 'UTC')->setTimezone('Asia/Amman')->format('G:i') }}
                    </div>
                </div>

                <div class="m-2 px-3">
                    {{ $contact->message }}
                </div>

                <div class="m-2 mt-3 px-3">

                    <div class="row">
                        <div class="col-1">
                            <div class="accordion-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Reply on email">
                                <a class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#reply">
                                    <i class="bi bi-reply-all-fill pe-1"></i> Reply
                                </a>
                            </div>
                        </div>

                        <div class="col-1">
                            <form action="{{ route('contact.pin', $contact)}}" method="post" id="pin">
                                @csrf
                                <a class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Pin in list of messages"
                                onclick="document.getElementById('pin').submit();"
                                ><i class="bi bi-pin-fill pe-1"></i>
                                    @if ($contact->pin)
                                        Unpin
                                    @else
                                        Pin
                                    @endif
                                </a>
                            </form>
                        </div>

                        <div class="col-1">
                            <form action="{{ route('contact.destroy', $contact) }}" method="post" id="delete">
                                @csrf
                                @method('delete')
                                <a class="btn btn-danger"data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete the message forever"
                                onclick="document.getElementById('delete').submit();"
                                ><i class="bi bi-x-circle-fill pe-1"></i> Delete</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>


            <div class="accordion my-5 shadow" id="reply-container">
                <div class="accordion-item">
                    <div id="reply" class="accordion-collapse collapse" data-bs-parent="#reply-container">
                        <div class="accordion-body">

                            <form action="" method="post">
                                <div class="form-floating mb-2">
                                    <textarea class="form-control border border-1 border-dark"
                                    placeholder="" id="reply-form" style="height: 10rem"></textarea>
                                    <label for="reply-form"></label>
                                </div>

                                <div class="d-grid gap-2 mt-2">
                                    <input type="submit" value="Reply" class="btn btn-success">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>


@endsection
