<div class="search-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <form method="post" action="{{ route('show_adlist') }}">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="search_term" type="text" placeholder="Search">
                                    <i class="ti-time"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="city" type="text" placeholder="City">
                                    <i class="ti-location-pin"></i>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="search-category-container">
                                    <label class="styled-select">
                                        <select name="category" class="dropdown-product selectpicker">
                                            <option value="callgirl">Call Girl</option>
                                            <option value="massages">Massages</option>
                                            <option value="male-escorts">Male Escorts</option>
                                            <option value="transsexual">Transsexual</option>
                                            <option value="adult-meetings">Adult Meetings</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-6">
                                <button type="submit" class="btn btn-search-icon"><i class="ti-search"></i></button>
                            </div>
                        </div>
                        {{-- <div class="row" style="margin-top: 20px;">
                            <div class="col-12 col-md-11 col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" type="text"
                                        placeholder="Search here">
                                    <i class="ti-search"></i>
                                </div>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>