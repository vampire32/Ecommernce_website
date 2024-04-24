<aside class="col-md-3">

    <div class="card">
        <article class="filter-group">
            <header class="card-header">
                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                    <i class="icon-control fa fa-chevron-down"></i>
                    <h6 class="title">Product type</h6>
                </a>
            </header>
            <div class="filter-content collapse show" id="collapse_1" style="">
                <div class="card-body">
                    <form class="pb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <ul class="list-menu">
                        <li><a href="#">Men </a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids </a></li>

                    </ul>

                </div> <!-- card-body.// -->
            </div>
        </article>
        <form action="/products/filter" id="filterForm" method="post">
            <article class="filter-group">
                <header class="card-header">
                    <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                        <i class="icon-control fa fa-chevron-down"></i>
                        <h6 class="title">Brands </h6>
                    </a>
                </header>
                <div class="filter-content collapse show" id="collapse_2" style="">
                    <div class="card-body">
                        <label class="custom-control custom-checkbox">
                            <input name="brandname" value="Junaid Jamshed" id="junaidjamshed" type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Junaid Jamshed

                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input id="MTJ" type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">MTJ

                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input id="" type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Bonaza

                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input id="Ideas" type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Ideas

                            </div>
                        </label>
                        <label class="custom-control custom-checkbox">
                            <input id="gulahmed" type="checkbox" class="custom-control-input">
                            <div class="custom-control-label">Gul Ahmed

                            </div>
                        </label>
                    </div> <!-- card-body.// -->
                </div>
            </article>
            <button type="submit">Apply Filters</button>
        </form>



    </div>


</aside>

<main class="col-md-9">