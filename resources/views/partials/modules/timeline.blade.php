@if($days_to_show > 0 && $all_incidents)
<div class="section-timeline">
    <div class="section-timeline__header">
        <h2>
            <i class="icon ion-android-alarm-clock"></i>
            {{ trans('cachet.incidents.past') }}
        </h2>
    </div>
    @foreach($all_incidents as $date => $incidents)
    @include('partials.incidents', [compact($date), compact($incidents)])
    @endforeach
</div>

<nav>
    <ul class="pager">
        @if($can_page_backward)
        <li class="previous">
            <a href="{{ cachet_route('status-page') }}?start_date={{ $previous_date }}" class="links">
                <span aria-hidden="true">&larr;</span> {{ trans('cachet.incidents.previous_week') }}
            </a>
        </li>
        @endif
        @if($can_page_forward)
        <li class="next">
            <a href="{{ cachet_route('status-page') }}?start_date={{ $next_date }}" class="links">
                {{ trans('cachet.incidents.next_week') }} <span aria-hidden="true">&rarr;</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
