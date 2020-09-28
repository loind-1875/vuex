<footer id="footer" class="m-0">
    <div class="container">
        <div class="footer-ribbon">
            <span>{{ __('home.contact') }}</span>
        </div>
        <div class="row py-5">
            <div class="col-lg-5 col-md-5 col-sm-12 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}" style="animation-delay: 1000ms;">
                <h4>{{ __('home.show_room') }}</h4>
                    {!! $settings[9]->detail ?? '' !!}
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1200" data-plugin-options="{'accY': -200}" style="animation-delay: 1200ms;">
                <h4>{{ __('home.info') }}</h4>
                <ul class="list list-icons mt-2 info">
                    <li>
                        <p>{{ __('home.time_working') }}</p>
                        <span>{!! $settings[10]->value ?? ''!!}</span>
                    </li>
                    <li>
                        <p>
                            {{ __('home.contact_us.email') }}: <span>{{ $settings[4]->value ?? '' }}</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            {{ __('home.contact_us.phone') }}: <span>{{ $settings[5]->value ?? '' }}</span>
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1400" data-plugin-options="{'accY': -200}" style="animation-delay: 1400ms;">
                <h4 class="">{{ __('home.category') }}</h4>
                <ul class="categories">
                    @forelse($categories as $key => $category)
                        <li class="category">
                            <a href="{{ route('client.category', parseLink($category)) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                    @empty
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row py-1">
                <div class="col-lg-12">
                    <p class="text-center">Thiết kế web: 0984.282.942</p>
                </div>
            </div>
        </div>
    </div>
</footer>
