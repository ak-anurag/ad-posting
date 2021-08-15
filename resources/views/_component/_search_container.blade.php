<div class="search">
    <form autocomplete="off" class="form" method="post" action="{{ route('show_adlist') }}">
        @csrf
        
        <div class="form-row">
            <div class="col-md-4 form-group">
                <input type="text" name="search_term" placeholder="What are you searching for?" minlength="3" class="form-control">
            </div>
            <div class="col-md-3">
                <select name="category" id="category" class="custom-select form-control">
                    <option value="callgirl">Call Girl</option>
                    <option value="massages">Massages</option>
                    <option value="male-escorts">Male Escorts</option>
                    <option value="transsexual">Transsexual</option>
                    <option value="adult-meetings">Adult Meetings</option>
                </select>
            </div>
            <div class="col-md-3 col-7 form-group">
                <select class="custom-select form-control" name="city">
                    <option selected disabled>Select location</option>
                    @foreach (DB::table('post_ads')->select('city')->get() as $item)
                        <option value="{{ $item->city }}">{{ ucfirst($item->city) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 col-5 form-group"><button type="submit"
                    class="form-control">Search</button></div>
        </div>
    </form>
</div>