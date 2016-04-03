@extends('layouts.index')

@section('title', 'Mental Health in Tech Survey Results')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="resources">Survey Results</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-quote">
            Selected data parsed from the responses of the 2016 Survey.
            If you have questions or comments about this survey, please email <a href="mailto:survey@osmihelp.org">survey@osmihelp.org</a>
        </div>
        <div class="col-sm-8 col-xs-12 col-content">
            <div class="list-group">
                    <h4 class="resource-title">
                        <i class="fa fa-chevron-circle-right fa-fw"></i>
                        People don't know if they have mental health care coverage,
                        but have been or suspect they have a mental health condition
                    </h4>
                    <p class="resource-description">
                        <ul>
                            @foreach($highlight_one as $country => $results)
                            <li>
                                {{ $results['percent'] }} in {{ $country }} ({{ $results['matched_query'] }}
                                of {{ $results['all_from_country'] }} responses)
                            </li>
                            @endforeach
                        </ul>
                    </p>
            </div>
        </div>
        {{--<div class="col-sm-8 col-xs-12 col-content">--}}
            {{--<div class="list-group">--}}
                {{--<a class="list-group-item" href="https://survey.osmihelp.org/results">--}}
                    {{--<h4 class="resource-title">--}}
                        {{--<i class="fa fa-chevron-circle-right fa-fw"></i> 2016 Survey Results--}}
                    {{--</h4>--}}
                    {{--<p class="resource-description">--}}
                        {{--View results and data we have gathered from the 2016 Mental Health in Tech Survey.--}}
                    {{--</p>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection