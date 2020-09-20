<div class="col-lg-3 col-md-3 col-sm-12">
    <aside class="sidebar">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="font-weight-bold pt-3">{{ __('home.categories') }}</h5>
                <ul class="nav nav-list flex-column">
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('client.category', parseLink($category)) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <hr class="solid my-3">
        <div class="row">
            <div class="col">
                <div class="tabs tabs-dark mb-4 pb-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-toggle="tab">
                                {{ __('home.new_product') }}
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="popularPosts">
                            <ul class="simple-post-list">
                                @if (count($recentProducts))
                                    @foreach ($recentProducts as $n)
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="{{ route('client.product', parseLink($n)) }}">
                                                        <img src="{{ ($n->image) }}" width="100" height="50" alt="{{ $n->name }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="{{ route('client.product', parseLink($n)) }}">
                                                    {{ $n->name }}
                                                </a>
                                                <div class="post-meta">
                                                    {{ formatDate($n->updated_at) }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li><p>{{ __('home.no_data') }}</p></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- news --}}
        <div class="row">
            <div class="col">
                <div class="tabs tabs-dark mb-4 pb-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#news" data-toggle="tab">
                                {{ __('home.news') }}
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="news">
                            <ul class="simple-post-list">
                                @if (count($recentNews))
                                    @foreach ($recentNews as $new)
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="{{ route('client.post_detail', parseLink($new)) }}">
                                                        <img src="{{ ($new->image) }}" width="100" alt="{{ $new->title }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="{{ route('client.post_detail', parseLink($new)) }}">
                                                    {{ $new->title }}
                                                </a>
                                                <div class="post-meta">
                                                    {{ formatDate($new->updated_at) }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li><p>{{ __('home.no_data') }}</p></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- recruitment --}}
        <div class="row mb-5">
            <div class="col">
                <div class="tabs tabs-dark mb-4 pb-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item active">
                            <a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#recruitment" data-toggle="tab">
                                {{ __('home.recruitment') }}
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="recruitment">
                            <ul class="simple-post-list">
                                @if (count($recentRecruitments))
                                    @foreach ($recentRecruitments as $new)
                                        <li>
                                            <div class="post-image">
                                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                    <a href="{{ route('client.rec_detail', parseLink($new)) }}">
                                                        <img src="{{ ($new->image) }}" width="100" alt="{{ $new->title }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <a href="{{ route('client.rec_detail', parseLink($new)) }}">
                                                    {{ $new->title }}
                                                </a>
                                                <div class="post-meta">
                                                    {{ formatDate($new->updated_at) }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li><p>{{ __('home.no_data') }}</p></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>