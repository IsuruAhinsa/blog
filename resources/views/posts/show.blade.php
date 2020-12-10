@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row py-5">
            <div class="col-md-8">

                <img src="{{ asset('img/blog/pexels-mathias-pr-reding-4389550.jpg') }}" class="img-fluid" alt="">

                <div class="py-5 d-flex align-items-baseline">
                    <div>
                        <img src="{{ asset('img/about.jpg') }}" width="64" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div>
                        <p class="ms-3 text-muted fw-normal">
                            <i class="far fa-user-circle me-1"></i>
                            Isuru Ahinsa
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="far fa-calendar-alt me-1"></i>
                            March 15, 2018
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="far fa-clock me-1"></i>
                            2:21PM
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <i class="far fa-comments me-1"></i> 10
                        </p>
                    </div>
                </div>

                <h1 class="display-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing.
                </h1>

                <span class="badge bg-primary me-2 fw-normal text-uppercase">Primary</span>
                <span class="badge bg-primary me-2 fw-normal text-uppercase">Primary</span>
                <span class="badge bg-primary me-2 fw-normal text-uppercase">Primary</span>

                <div class="py-5">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque beatae consectetur consequatur deserunt, dolorum earum error, et excepturi fugiat harum laudantium libero nesciunt numquam quos reiciendis repellat sequi sunt suscipit? Ab adipisci aliquam blanditiis dolor exercitationem natus quisquam recusandae temporibus vitae voluptatem! Aperiam, asperiores atque blanditiis cupiditate dolorum, earum enim et exercitationem facere laborum nemo numquam odio optio repellat vitae voluptas voluptatum! Ad aspernatur atque aut commodi cupiditate deserunt enim esse ex excepturi facilis ipsa itaque, laborum maxime minima modi molestiae natus necessitatibus nihil nostrum nulla officia, quaerat repudiandae saepe similique suscipit tempora, tempore unde vel veniam voluptates? Fugiat, recusandae?
                    </p>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto asperiores beatae culpa doloremque dolorum enim error esse eum excepturi exercitationem facilis hic ipsam labore laboriosam laborum laudantium libero nam nisi, nostrum numquam odit officia quidem repellendus reprehenderit tempore vel voluptatem. Blanditiis consequuntur cumque debitis delectus ducimus facilis, maiores maxime non rerum totam? Accusamus alias aliquam asperiores aspernatur beatae cumque delectus doloremque dolores enim eos et exercitationem impedit inventore iste itaque, iure laboriosam maxime minima minus nemo nobis numquam quasi quo ratione recusandae rem sed soluta sunt totam velit veritatis vitae voluptas voluptatibus? Blanditiis expedita explicabo harum molestiae molestias nesciunt veritatis. Dicta dolores, eos ex expedita iure nostrum quam repudiandae. Accusamus aliquid, autem beatae blanditiis dolorem doloremque eligendi eum exercitationem illo iusto necessitatibus nostrum quia repellat reprehenderit repudiandae sequi, tempora tempore, tenetur vitae voluptatum? Animi asperiores consectetur consequuntur, culpa cum cupiditate deserunt ducimus, esse est ex expedita hic iure maiores mollitia nam natus necessitatibus obcaecati officia omnis placeat quae qui quibusdam saepe sapiente similique, ut vitae voluptate. A accusamus animi ducimus perspiciatis. A assumenda blanditiis consectetur fugiat in non odio ratione repellendus similique soluta? Aperiam consectetur consequuntur ducimus libero nihil omnis unde? Expedita fugit iste nobis! Iusto nihil quis soluta velit?
                    </p>
                </div>

                @include('posts.partials.comments')

            </div>

            <div class="col-md-4 gx-5">

                @include('posts.partials.categories')

                @include('posts.partials.recent-post')

            </div>

        </div>

    </div>

@endsection
