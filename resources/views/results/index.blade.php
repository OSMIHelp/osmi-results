@extends('layouts.index')

@section('title', 'Mental Health in Tech Survey Results')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <h2 class="content-header" id="resources">Survey Results</h2>
            <p>
                Selected data parsed from the responses of the 2016 Survey.
                If you have questions or comments about this survey, please email <a href="mailto:survey@osmihelp.org">survey@osmihelp.org</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-content">
            <div class="list-group">
                <a class="list-group-item" href="#">
                    <h4 class="resource-title">
                        <i class="fa fa-chevron-circle-right fa-fw"></i>
                        People don't know if they have mental health care coverage,
                        but have been or suspect they have a mental health condition
                    </h4>
                    <div class="answer hidden">
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
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-content">
            <div class="list-group">
                <a class="list-group-item" href="#">
                    <h4 class="resource-title">
                        <i class="fa fa-chevron-circle-right fa-fw"></i>
                        People who think they have a mental health issue but have not sought treatment
                    </h4>
                    <div class="answer hidden">
                        <p class="resource-description">
                            <ul>
                            @foreach($highlight_two as $country => $results)
                                <li>
                                    {{ $results['percent'] }} in {{ $country }} ({{ $results['matched_query'] }}
                                    of {{ $results['all_from_country'] }} responses)
                                </li>
                            @endforeach
                            </ul>
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-content">
            <div class="list-group">
                <a class="list-group-item" href="#">
                    <h4 class="resource-title">
                        <i class="fa fa-chevron-circle-right fa-fw"></i>
                        Does your employer provide mental health benefits as part of healthcare coverage?
                    </h4>
                    <div class="answer hidden">
                        <p class="resource-description">
                        @foreach($employer_provides_mental_health_benefits as $country => $results)
                            <h5>{{ $country }}</h5>
                            <ul>
                                @foreach($results as $answer => $count)
                                <li>
                                    {{ $answer }} - {{ $count }}
                                </li>
                                @endforeach
                            </ul>
                        @endforeach
                        </p>
                    </div>
                </a>
            </div>
       </div>
    </div>
@endsection
