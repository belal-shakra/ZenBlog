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
                            <div class="col-5 fw-bold">
                                Belal Shakra <br> belal@shakra.com
                            </div>
                        </div>
                    </div>

                    <div class="col col-9 d-flex flex-row-reverse fw-bold">
                        20.5.2024 <br /> 20:48
                    </div>
                </div>

                <div class="m-2 px-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores molestiae cumque, provident ab fuga distinctio ipsam aliquam consequatur est maiores inventore eveniet vel. Veritatis, eaque consectetur quae, omnis repudiandae debitis quis dolor laboriosam reprehenderit optio aliquid doloremque obcaecati recusandae? Perferendis, fugiat laboriosam quaerat reprehenderit eum aut aspernatur quia autem repellat unde, inventore eius assumenda consequatur excepturi iusto mollitia magnam dolor quisquam voluptas error. Aliquid ipsum sequi voluptate eveniet minima ea aperiam numquam cupiditate mollitia. Totam, nam excepturi dolor a sunt alias quam nemo doloribus, rerum debitis deleniti quis illum asperiores doloremque ut labore vero quibusdam placeat quasi earum minus ullam! Possimus veniam, debitis similique deserunt provident ratione voluptas, ducimus doloribus illum eveniet quidem fuga labore accusamus numquam autem, obcaecati impedit.
                </div>

                <div class="m-2 mt-3 px-3">
                    <div class="accordion-button d-inline" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Reply on email">
                        <a class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#reply">
                            <i class="bi bi-reply-all-fill pe-1"></i> Reply
                        </a>
                    </div>

                    <a href="" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Pin in list of messages"
                    ><i class="bi bi-pin-fill pe-1"></i> Pin</a>

                    <a href="" class="btn btn-danger"  data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Delete the message forever"
                    ><i class="bi bi-x-circle-fill pe-1"></i> Delete</a>
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

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="showinall">
                                    <label class="form-check-label" for="showinall">
                                        Default checkbox
                                    </label>
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
