<div id="pagesection" class="page-section bg-light">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Get A Membership</h1>
        <form action="{{ route('member.store') }}" method="post" class="main-form">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <label for="fullName">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <label for="emailAddress">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email address..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <label for="number">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div>
